<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Traits\GeneralTraites;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    use GeneralTraites;
    public function Index()
    {
        return view
    }
    public function Create()
    {
        try {
            $data=[];
            $data['brands']=Brand::Active()->select('id')->get();
            $data['tags']=Tag::select('id')->get();
            $data['categories']=Category::Active()->select('id')->get();
            return $data;

        } catch (\Exception $ex) {
            return DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
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
