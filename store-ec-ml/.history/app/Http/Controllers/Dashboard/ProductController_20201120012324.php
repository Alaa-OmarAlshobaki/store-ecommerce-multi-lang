<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function Index()
    {
    }
    public function Create()
    {
        try {
            $data=[];
            
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
