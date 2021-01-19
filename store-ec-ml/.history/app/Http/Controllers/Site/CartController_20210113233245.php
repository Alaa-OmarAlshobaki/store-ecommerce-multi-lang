<?php

namespace App\Http\Controllers\Site;

use App\Basket\Basket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    protected $Basket;
    protected $id;
    public function __construct(Basket $basket){
        return $this->basket=$basket;

    }
    
    public function ViewCart(){
        $basket=$this->basket;
        return view('home.cart',compact())

    }
}
