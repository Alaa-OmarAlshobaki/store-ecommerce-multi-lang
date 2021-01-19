@extends('home.include.layout')
@section('content')
<main class="main cart"> 
    <div class="container">
        <form action="#">  
            <div class="row sec-mar">                    
                <div class="col-md-12 col-sm-12">                        
                    <table class="table_shop">
                        <thead>
                            <tr>
                                <th class="pdt_remove"></th>
                                <th class="pdt_name">Product</th>
                                <th class="pdt_price">Price</th>
                                <th class="pdt_qty">Quantity</th>
                                <th class="pdt_subtotal">Total</th> 
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

                                <td class="pdt_price" data-title="Price">$175.00</td>

                                <td class="pdt_qty" data-title="Quantity">
                                    <input type="number" value="1" title="Qty" class="input-text qty" size="4">
                                </td>

                                <td class="pdt_subtotal" data-title="Total">$175.00</td> 
                            </tr>
                         
                        </tbody>
                    </table>                        
                </div>
                <!--shop table--> 

                <div class="bdr-box cart-collaterals">
                    <h4>Cart Totals</h4>

                    <table class="table_shop">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>$700.00</td>
                            </tr>

                            <tr>
                                <td>Shipping</td>
                                <td>$25.00</td>
                            </tr>

                            <tr>
                                <td>Grand Total</td>
                                <td>$725.00</td>
                            </tr>
                        </tbody>    
                    </table>

                    <a class="btn pri-bg">PROCEED TO CHECKOUT</a>
                </div> 
            </div> 
        </form>               
    </div>  
</main>
<!--main-->
@endsection