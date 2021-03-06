<?php

namespace App\Http\Controllers\Site;

use OrderPay;
use App\Models\Order;
use GuzzleHttp\Client;
use App\Events\NewOrder;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    private $base_url;
    private $request_client;
    private $token;
    public function __construct(Client $request_client)
    {
        $this->request_client = $request_client;
        $this->base_url = "https://apitest.myfatoorah.com/";
        $this->token = "Tfwjij9tbcHVD95LUQfsOtbfcEEkw1hkDGvUbWPs9CscSxZOttanv3olA6U6f84tBCXX93GpEqkaP_wfxEyNawiqZRb3Bmflyt5Iq5wUoMfWgyHwrAe1jcpvJP6xRq3FOeH5y9yXuiDaAILALa0hrgJH5Jom4wukj6msz20F96Dg7qBFoxO6tB62SRCnvBHe3R-cKTlyLxFBd23iU9czobEAnbgNXRy0PmqWNohXWaqjtLZKiYY-Z2ncleraDSG5uHJsC5hJBmeIoVaV4fh5Ks5zVEnumLmUKKQQt8EssDxXOPk4r3r1x8Q7tvpswBaDyvafevRSltSCa9w7eg6zxBcb8sAGWgfH4PDvw7gfusqowCRnjf7OD45iOegk2iYSrSeDGDZMpgtIAzYVpQDXb_xTmg95eTKOrfS9Ovk69O7YU-wuH4cfdbuDPTQEIxlariyyq_T8caf1Qpd_XKuOaasKTcAPEVUPiAzMtkrts1QnIdTy1DYZqJpRKJ8xtAr5GG60IwQh2U_-u7EryEGYxU_CUkZkmTauw2WhZka4M0TiB3abGUJGnhDDOZQW2p0cltVROqZmUz5qGG_LVGleHU3-DgA46TtK8lph_F9PdKre5xqXe6c5IYVTk4e7yXd6irMNx4D4g1LxuD8HL4sYQkegF2xHbbN8sFy4VSLErkb9770-0af9LT29kzkva5fERMV90w";
    }
    public function ViewPayment($amount)
    {
        return view('home.payment.view', compact('amount'));
    }
    public function processPayment(Request $request)
    {

        $error = '';

        //best practice as we do sperate validation on request form file
        $validator = Validator::make($request->all(), [
            'ccNum' => 'required',
            'ccExp' => 'required',
            'ccCvv' => 'required|numeric',
            'amount' => 'required|numeric|min:100',
        ]);

        if ($validator->fails()) {
            $error = 'Please check if you have filled in the form correctly. Minimum order amount is PHP 100.';
        }

        $ccNum = str_replace(' ', '', $request->ccNum);
        $ccExp = $request->ccExp;
        $ccCvv = $request->ccCvv;
        $amount = $request->amount;
        $customerName = auth()->user()->name;
        $customerEmail = 'demo@gmail.com';
        $phone = substr(auth()->user()->mobile, 4);
        $ccExp = (explode('/', $ccExp));
        $ccMon = $ccExp[0];
        $ccYear = $ccExp[0];
        $customerMobile = strlen($phone) <= 11 ? $phone : '123456';
        $data['Language'] = 'en';
        $PaymentMethodId = $request->PaymentMethodId;
        $token = $this->token;
        $basURL = $this->base_url;
        $curl = curl_init();

        // you can use laravel http or Guzzl and you my create an object to encode that oject direct on requrest
        curl_setopt_array($curl, array(
            CURLOPT_URL => "$basURL/v2/ExecutePayment",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"PaymentMethodId\":\"$PaymentMethodId\",\"CustomerName\": \"$customerName\",\"DisplayCurrencyIso\": \"SAR\", \"MobileCountryCode\":\"+965\",\"CustomerMobile\": \"$customerMobile\",\"CustomerEmail\": \"$customerEmail\",\"InvoiceValue\": $amount,\"CallBackUrl\": \"https://dieera.com\",\"ErrorUrl\": \"https://dieera.com\",\"Language\": \"en\",\"CustomerReference\" :\"ref 1\",\"CustomerCivilId\":12345678,\"UserDefinedField\": \"Custom field\",\"ExpireDate\": \"\",\"CustomerAddress\" :{\"Block\":\"\",\"Street\":\"\",\"HouseBuildingNo\":\"\",\"Address\":\"\",\"AddressInstructions\":\"\"},\"InvoiceItems\": []}",
            CURLOPT_HTTPHEADER => array("Authorization: Bearer $token", "Content-Type: application/json"),
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return [
                'payment_success' => false,
                'status' => 'faild',
                'error' => $err
            ];
        }

         $json = json_decode((string)$response, true);
        //echo "json  json: $json '<br />'";

        $payment_url = $json["Data"]["PaymentURL"];


        $card = new \stdClass();
        $card->Number = $ccNum;
        $card->expiryMonth = trim($ccMon);
        $card->expiryYear = trim($ccYear);
        $card->securityCode = trim($ccCvv);
        $card_data = json_encode($card);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "$payment_url",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"paymentType\": \"card\",\"card\":$card_data,\"saveToken\": false}",
            CURLOPT_HTTPHEADER => array("Authorization: Bearer $token", "Content-Type: application/json"),
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return [
                'paymemt_success' => false,
                'status' => 'faild',
                'error' => $err
            ];
        }

        $json = json_decode((string)$response, true);
        $PaymentId = $json["Data"]["PaymentId"];
        try {
            DB::beginTransaction();
            // if success payment save order and send realtime notification to admin
            $order = $this->saveOrder($amount, $PaymentMethodId);  // your task is  . add products with options to order to preview on admin
            $this->saveTransaction($order, $PaymentId);
            DB::commit();

            //fire event on order complete success for realtime notification
           
        event(new NewOrder($order));


        } catch (\Exception $ex) {
            DB::rollBack();
            return $ex;
        }
        // replace return statment with message that tell the user that the payment successes
        return [
            'payment_success' => true,
            'token' => $PaymentId,
            'data' => $json,
            'status' => 'succeeded',
        ];
    }


    private function saveOrder($amount,$paymentMethodId){
        return Order::create([
            'customer_id'=>auth()->id(),
            'customer_phone'=> auth()->user()->mobile,
            'customer_name'=> auth()->user()->name,
            'total'=>$amount,
            'local'=>'en',
            'payment_method'=>$paymentMethodId,
            'status'=>Order::PAID,

        ]);

    }

    private function SaveTransaction(Order $order ,$PaymentId){
        Transaction::create([
            'order_id'=>$order->id,
            'transaction_id'=>$PaymentId,
            'payment_method'=>$order->payment_method,
        ]);
    }
}
