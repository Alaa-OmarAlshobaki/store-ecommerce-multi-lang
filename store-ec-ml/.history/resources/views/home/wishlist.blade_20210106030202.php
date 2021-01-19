@extends('home.include.layout')
@section('content')
<main class="main cart"> 
    <div class="container">
        <form action="#">  
            <div class="row sec-mar">                    
                <div class="col-md-12 col-sm-12">                        
                    <table class="table_shop wish_list">
                        <thead>
                            <tr>
                                <th class="pdt_remove"></th>
                                <th class="pdt_name">Product</th>
                                <th class="pdt_price">Price</th>
                                <th class="pdt_stk">Stock</th>
                                <th class="pdt_subtotal"></th> 
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="crt_itm">
                                <td class="pdt_remove" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                <td class="pdt_name" data-title="Product name">
                                    <figure class="pdt_thumb">
                                        <img src="assets/images/cart-pdt-thumb1.jpg" alt="">
                                    </figure>

                                    <span class="pdt_title">Ladies black full sleeves</span>
                                </td>

                                <td class="pdt_price" data-title="Product price">$175.00</td>

                                <td class="pdt_stk" data-title="Stock">
                                    <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                                </td>

                                <td class="pdt_subtotal" data-title="Total"> 
                                    <a href="#" class="btn btn-default"><i class="pe-7s-cart"></i> ADD TO CART</a>
                                </td> 
                            </tr>
                            <!--single item-->

                            <tr class="crt_itm">
                                <td class="pdt_remove" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                <td class="pdt_name" data-title="Product name">
                                    <figure class="pdt_thumb">
                                        <img src="assets/images/cart-pdt-thumb2.jpg" alt="">
                                    </figure>

                                    <span class="pdt_title">Men’s shirt </span>
                                </td>

                                <td class="pdt_price" data-title="Product price">$175.00</td>

                                <td class="pdt_stk" data-title="Stock">
                                    <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                                </td>

                                <td class="pdt_subtotal" data-title="Total">
                                    <a href="#" class="btn btn-default"><i class="pe-7s-cart"></i> ADD TO CART</a>
                                </td> 
                            </tr>
                            <!--single item-->

                            <tr class="crt_itm">
                                <td class="pdt_remove" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                <td class="pdt_name" data-title="Product name">
                                    <figure class="pdt_thumb">
                                        <img src="assets/images/cart-pdt-thumb3.jpg" alt="">
                                    </figure>

                                    <span class="pdt_title">Ladies full sleeves </span>
                                </td>

                                <td class="pdt_price" data-title="Product price">$175.00</td>

                                <td class="pdt_stk" data-title="Stock">
                                    <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                                </td>

                                <td class="pdt_subtotal" data-title="Total">
                                    <a href="#" class="btn btn-default"><i class="pe-7s-cart"></i> ADD TO CART</a>
                                </td> 
                            </tr>
                            <!--single item-->

                            <tr class="crt_itm">
                                <td class="pdt_remove" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                <td class="pdt_name" data-title="Product name">
                                    <figure class="pdt_thumb">
                                        <img src="assets/images/cart-pdt-thumb4.jpg" alt="">
                                    </figure>

                                    <span class="pdt_title">Ladies full sleeves</span>
                                </td>

                                <td class="pdt_price" data-title="Product price">$175.00</td>

                                <td class="pdt_stk" data-title="Stock">
                                    <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                                </td>

                                <td class="pdt_subtotal" data-title="Total">
                                    <a href="#" class="btn btn-default"><i class="pe-7s-cart"></i> ADD TO CART</a>
                                </td> 
                            </tr>
                            <!--single item--> 
                        </tbody>
                    </table>                        
                </div>
                <!--shop table-->   
            </div> 
        </form>               
    </div>  
</main>
<!--main-->
@