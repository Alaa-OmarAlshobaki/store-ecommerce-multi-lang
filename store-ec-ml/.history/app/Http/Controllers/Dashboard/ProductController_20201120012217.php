<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function Index(){

    }
    public function Create(){
        try{

        }catch(\Exception $ex){
           return DB::rollback();
        }

    }
    public function Edit(){

    }
    public function Delete(){

    }
    public function Update(){

    }
    
}
