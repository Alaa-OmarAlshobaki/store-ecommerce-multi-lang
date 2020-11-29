<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\GeneralTraites;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductValidRequest;

class ProductController extends Controller
{
    use GeneralTraites;
    public function Index()
    {
        return view('admin.products.index');
    }

    public function createStepOne()
    {
        try {
            $data=[];
            $data['brands']=Brand::active()->select('id')->session()->get();
            $data['tags']=Tag::select('id')->session()->get();
            $data['categories']=Category::active()->select('id')->session()->get();
            //  return $data;
            return view('admin.products.create-step1',compact('data'));

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
    public function postCreateStepOne(ProductValidRequest $request)
    {
        try {
              if(empty($request->session()->get('data'))){
            $product = new data();
            $product->fill($request);
            $request->session()->put('data', $data);
        }else{
            $product = $request->session()->get('data');
            $product->fill($validatedData);
            $request->session()->put('data', $data);
        }
          
            return view('admin.products.create-step2',compact(''));

        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
  
      
  
        return redirect()->route('products.create.step.two');
    }
  

    
    
    public function Edit()
    {
    }
    public function Delete()
    {
    }
    public function Update()
    {
    }
}