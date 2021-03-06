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
                            @isset($products)
                            @foreach($products as $product)
                            <tr class="crt_itm">
                                <td class="pdt_remove" data-tarrget-id="{{ $product->id }}" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                <td class="pdt_name" data-title="Product name">
                                    <figure class="pdt_thumb">
                                        <img src="{{ $product->image[0]->photo }}" alt="">
                                    </figure>

                                    <span class="pdt_title">{{ $product->name }}</span>
                                </td>

                                <td class="pdt_price" data-title="Product price">{{ $product->special_price ? $product->special_price : $product->price }}</td>

                                <td class="pdt_stk" data-title="Stock">
                                    <span class="text-green"><i class="fa fa-check-square"></i> {{ $product->in_stock ? 'stock' : 'out of stock' }}</span>
                                </td>

                                <td class="pdt_subtotal" data-title="Total"> 
                                    <a href="#" class="btn btn-default"><i class="pe-7s-cart"></i> ADD TO CART</a>
                                </td> 
                            </tr>
                            @endforeach
                            @endisset
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
@endsection
@section('script')
<script>
  $('.pdt_remove').on('click', function (e) {
               e.preventDefault();
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
                   });

               $.ajax({
                   headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                   type: 'post',
                   url: "{{Route('delete.product.wishlist')}}",
                   data: {
                       'productId': $(this).attr('data-tarrget-id'),
                   },
                   success: function (data) {
                 
                    location.reload();

                    if(data.delete){
                       $(this).bstooltip('hide');

                           $.amaran({
                               content: {
                                   title: 'Success!',
                                   message: 'deleted from Favorite',
                                   info: '',
                                   icon: 'icofont icofont-heart-alt'
                               },
                               position: 'top right',
                               delay: 4000,
                               theme: 'awesome ok'
                           });
                      
                   }
                      
               }

               });
           });
 
</script>
@endsection