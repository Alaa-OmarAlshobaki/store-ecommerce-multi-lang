@extends('home.include.layout')
@section('content')
@include('home.include.loggin')
<main class="main single-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
        <!--breadcrumb-->

        <div class="row product sec-mar">
            @include('home.include.alert')
            <div class="col-md-8 col-sm-8 image pdt-single-slider">
                <ul class="pdt-thumb">
                  
                    @isset($product)
                    @foreach($product->image as $pho)
                    
                   
                    <li>
                        <figure><img src="{{ $pho->photo }}" alt=""></figure>
                    </li>
                    @endforeach
                    @endisset
                   
                </ul>

                <ul class="pdt-single">
                    @isset($product)
                    @foreach($product->image as $phot)
                    <li>
                        <figure><img src="{{ $phot->photo }}" alt=""></figure>
                    </li>
                    @endforeach
                    @endisset
                  
                </ul>
            </div>
            <!--slider-->

            <div class="col-md-4 col-sm-4 summary ">
                <div class="wrap">
                    <div class="pdt-cat bm-5">
                        <span>Ladies fashion</span>
                    </div>

                    <h4>{{ $product->name }}</h4>

                    <div class="price-wrap">
                        <div class="price">
                            <del>{{ $product->	special_price ? $product->price : "" }}</del><ins>{{ $product->special_price ? $product->special_price : $product->price }} </ins>
                        </div>
                        <div class="star-rate">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                        </div>
                    </div>
                    <!--price wrap-->

                    <div class="disc bm-25">
                        {!! $product->short_description !!}
                    </div>
                    <!--disc-->

                    <div class="flx-element bm-25">
                        <div><strong>Availability :</strong> {{ $product->qty ? $product->qty : '' }}
                            <span class="text-green"><i class="fa fa-check-square"></i> {{ $product->in_stock ? 'in stock' : 'Unavailable' }}</span>
                        </div>
                        <div><strong>SKU :</strong> {{ $product->sku }}</div>
                    </div>
                    <!--flex-->
                   
                    @if(isset($product_attribute) && count($product_attribute) > 0 )
                    @foreach($product_attribute as $attributes)
                    @if($attributes->Attribute->name == 'color')
                    <div class="color-option bm-25">
                        <h6 class="bm-5">Select  @if($attributes->Attribute->name  == 'color') {{ $attributes->Attribute->name }} @endif</h6>

                        <div class="color-filter">
                            <form>
                                 

                                <div class="radio-wrap {{ $attributes->name }}">
                                    <input type="radio" name="color">
                                    <label>&nbsp; </label>
                                </div> 
                               
                            </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                    <!--color option-->
                    @if(isset($product_attribute) && count($product_attribute) > 0 )
                    @foreach($product_attribute as $attributes)
                    @if($attributes->Attribute->name  == 'size')
                    <div class="size-option bm-30">
                        <h6 class="bm-5">Select @if($attributes->Attribute->name  == 'size') {{  $attributes->Attribute->name  }} @endif</h6>

                        <div class="size-filter">
                            <form>
                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>{{ $attributes->name }}</label>
                                </div>
                                <!--l-->
                            </form>
                        </div>
                    </div> 
                    @endif
                    @endforeach
                    @endif
                    <!--size option-->
                 

                    <div class="btn-wrap bm-30">
                        <form action="" method="post" class="formAdd">
                            @csrf
                        <input type="hidden" value="{{ $product->id }}">   
                        <input type="number" value="1"  title="Qty" class="input-text qty" size="4">
                        <a href="#" data-target-id="{{ $product->id }}" data-target-slug="{{ $product->slug }}" class="btn pri-bg"><i class="pe-7s-cart"></i> ADD TO CART</a>
                        </form>
                        <a href="#" class="btn bdr"><i class="pe-7s-like"></i></a>
                    </div>
                    <!--btn wrap-->

                    <div class="share pri-font">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i> facebook</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i> twitter</a>
                        <a href="#" class="pin"><i class="fa fa-pinterest-p"></i> pinterest</a>
                    </div>
                </div>
            </div>
            <!--summery-->
        </div>
        <!--product-->

        <div class="row product sec-mar">
            <div class="col-md-12 col-sm-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs sec-font" role="tablist">
                    <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                    <li><a href="#information" data-toggle="tab">Information</a></li>
                    <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="description">
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                    <!--description-->

                    <div role="tabpanel" class="tab-pane" id="information">
                        Information
                    </div>
                    <!--information-->

                    <div role="tabpanel" class="tab-pane" id="reviews">
                        Reviews
                    </div>
                    <!--reviews-->
                </div>
            </div>
        </div>
        <!--descripton tab-->
    </div>
    <!--container-->

    <div class="trending">
        <div class="bg-soft-gray sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="title mid-sep">
                            <h2>Related Products</h2>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 product-wrap product-slide-wrap">
                        <ul class="products product-slider">
                            @if(isset($related_products) && count($related_products)>0)
                            @foreach($related_products as $related_product)
                           
                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                    
                                        <a href="#" class="actn add-to-favorite" data-tarrget-id="{{ $related_product->id }}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="{{ route('single.product.view',$related_product->slug) }}" class="actn quick-view" data-tarrget-id="{{ $related_product->slug }}" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{ $related_product->image[0]->photo }}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>{{ $related_product->	special_price ? $related_product->price : "" }}</del><ins>{{ $related_product->special_price ? $related_product->special_price : $related_product->price }} </ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="{{ route('single.product.view', $related_product->slug) }}"> {{ $related_product->name}}</a></h4>
                            </li>
                            
                            @endforeach
                            @endif
                            <!--product-->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--tranding-->
</main>
<!--main-->
@endsection
@section('script')
<script>
  $('.add-to-favorite').on('click', function (e) {
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
                   url: "{{Route('wishlist')}}",
                   data: {
                       'productId': $(this).attr('data-tarrget-id'),
                   },
                   success: function (data) {
                       console.log(data.wished)
                       if(data.wished){
                       $(this).bstooltip('hide');

                           $.amaran({
                               content: {
                                   title: 'Success!',
                                   message: 'Added to Favorite',
                                   info: '',
                                   icon: 'icofont icofont-heart-alt'
                               },
                               position: 'top right',
                               delay: 4000,
                               theme: 'awesome ok'
                           });
                      
                   }else{
                       $(this).bstooltip('hide');

                           $.amaran({
                               content: {
                                   title: 'Success!',
                                   message: 'Added to Favorite before',
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