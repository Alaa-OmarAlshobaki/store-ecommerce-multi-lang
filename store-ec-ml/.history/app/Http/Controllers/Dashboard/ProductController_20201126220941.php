<?php

namespace App\Http\Controllers\Dashboard;

use session;
use App\Models\Tag;
use App\Models\Brand;
use App\Models\Product;
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
            $data = [];
            $data['brands'] = Brand::active()->select('id')->get();
            $data['tags'] = Tag::select('id')->get();
            $data['categories'] = Category::active()->select('id')->get();

            return view('admin.products.create-step1', compact('data'));
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
        DB::beginTransaction();
        if ($request->has('is_active')) {
            $request->request->add(['is_active' => 1]);
        } else {
            $request->request->add(['is_active' => 0]);
        }
        $product = Product::create($request->except(['_token']));
        $product->name=$request->name;
        $product->description=$request->description;
        $product->short_description=$request->short_description;
        $product->save();
        $product->Categories()->attach($request->categories);
        $product->Tags()->attach($request->tags);
        return redirect()->route('products.create.step.two');


        DB::commit();
      
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
