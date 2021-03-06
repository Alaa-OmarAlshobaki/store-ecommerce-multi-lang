<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\HTTP\Serves\verificationCodeServ;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::VERIFY;
    public $sms_services;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(verificationCodeServ $sms_services)
    {
        $this->middleware('guest');
        $this->sms_services = $sms_services;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        try {
            DB::beginTransaction();
            $verification = [];
            $user = User::create([
                'name' => $data['name'],
                'mobile' => $data['mobile'],
                'password' => Hash::make($data['password']),
            ]);


            $verification['user_id'] = $user->id;

            $verification_data =  $this->sms_services->setVerificationCode($verification);

            $message = $this->sms_services->getSMSVerifyMessageByAppName($verification_data->verify_code);
            // app(VictoryLinkSms::class) -> sendSms($user -> mobile,$message);
            DB::commit();
            return  $user;

            /////////////////send OPT SMS code
            ///// set or generate code(set new code)
            ///save code in table verify
            //send to user mobile
        } catch (\Exception $ex) {
            DB::rollback();
        }
    }
}
