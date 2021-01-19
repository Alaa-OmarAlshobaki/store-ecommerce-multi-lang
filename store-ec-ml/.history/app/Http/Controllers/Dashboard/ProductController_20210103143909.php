<?php

namespace App\Http\Controllers\Dashboard;

use session;
use Validator;
use App\Models\Tag;
use App\Models\Brand;
use App\Models\Photo;
// use App\Helper\helper;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\GeneralTraites;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageValidRequest;
use App\Http\Requests\PriceValidRequest;
use App\Http\Requests\ProductValidRequest;
use App\Http\Requests\stockValidatRequest;

class ProductController extends Controller
{
    use GeneralTraites;

    public function Index()
    {
        $product = Product::select('id', 'slug', 'price', 'created_at')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);;
        return view('admin.products.index', compact('product'));
    }

    public function CreateGeneralInfo()
    {
        try {
            $data = [];
            $data['brands'] = Brand::active()->select('id')->get();
            $data['tags'] = Tag::select('id')->get();
            $data['categories'] = Category::active()->select('id')->get();

            return view('admin.products.create_generalInfo', compact('data'));
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreGeneralInf(ProductValidRequest $request)
    {
        try {
            DB::beginTransaction();
            //save data for model product in the same table
            if ($request->has('is_active')) {
                $request->request->add(['is_active' => 1]);
            } else {
                $request->request->add(['is_active' => 0]);
            }

            $product = Product::create(
                [
                    'slug' => $request->slug,
                    'brand_id' => $request->brand,
                    'is_active' => $request->is_active

                ]
            );
            $product->name = $request->name;
            $product->description = $request->description;
            $product->short_description = $request->short_description;
            $product->save();
            //save data in table prodcate and tagcate
            $product->Categories()->attach($request->categories);
            $product->Tags()->attach($request->tags);
            DB::commit();

            // $request->session()->put('product', ['product' => $product]);
            // $product = $request->session()->get('product');
            return redirect()->route('main.product')->with(['success', 'operation accomplished successfully']);
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }


    public function ViewStock($product_id)
    {
        try {
            $product = Product::find($product_id);
            return view('admin.products.create_stock', compact('product'));
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }


    public function StoreStock(stockValidatRequest $request)
    {
        try {
            DB::beginTransaction();
            $product = Product::whereId($request->product_id);
            $product->update($request->except(['_token', 'product_id']));
            DB::commit();
            return redirect()->route('main.product')->with('success', __('admin/error.msg_success_back'));
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    public function ViewPrice($product_id)
    {
        try {
            $product = Product::find($product_id);
            return view('admin.products.create_price', compact('product'));
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    public function StorePrice(PriceValidRequest $request)
    {
        try {
            DB::beginTransaction();
            $product = Product::whereId($request->product_id);
            $product->update($request->only(['price', 'special_price', 'special_price_type', 'special_price_start', 'special_price_end']));
            DB::commit();
            return redirect()->route('main.product')->with('success', __('admin/error.msg_success_back'));
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }
    public function ViewImages($product_id)
    {
        try {
            $image=Photo::where('product_id',$product_id)->get();

            return view('admin.products.uploadimages', compact(['product_id','image']));
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }
    // store image in folder only
    public function StoreImages(Request $request)
    {
        try {
            $file = $request->file('dzfile');
            $fileName = $this->uploadImage('product', $file);
            return response()->json([
                'name' => $fileName,
                'original_name' => $file->getClientOriginalName(),
            ]);
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }
    public function StoreImagesDB(ImageValidRequest $request)
    {
        try {
            DB::beginTransaction();
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Photo::create([
                        'photo' => $image,
                        'product_id' => $request->product_id,
                        'photo_type' => 'App\Models\Photo'
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('main.product')->with('success', __('admin/error.msg_success_back'));
        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }
    public function DeleteImage($id,$product_id){
        $delete=Photo::where('product_id',$product_id)->find($id);
        $path = parse_url($delete->photo);
        \File::delete(public_path($path['path']));
        $delete->delete();
        return redirect()->back()->with('fail', __('admin/error.msg_error_back'));

    }

}
