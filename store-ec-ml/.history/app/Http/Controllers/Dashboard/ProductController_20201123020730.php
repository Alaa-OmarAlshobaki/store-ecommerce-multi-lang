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
            $data['brands']=Brand::active()->select('id')->get();
            $data['tags']=Tag::select('id')->get();
            $data['categories']=Category::active()->select('id')->get();
            //  return $data;
            return view('admin.products.create-step1',compact('data'));

        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }
      /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        try {
            return $request;
            return view('admin.products.create');

        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
        $validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);
  
        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);
  
        return redirect()->route('products.create.step.three');
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