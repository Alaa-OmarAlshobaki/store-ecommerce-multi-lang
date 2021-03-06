@extends('home.include.layout')
@section('content')
@include('home.include.loggin')
<div class="pg-header jarallax overlay parlx-pad sec-mar">
    <img class="jarallax-img" src="{{ $cat->image ?? '' }}" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center"> 
                <h2>{{ $cat->name }}</h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">{{ $cat->name }}</li>
                </ul>
            </div>              
        </div>
    </div>
</div>
<!--page title-->

<main class="main"> 
    <div class="container"> 
        <div class="sorting-outer">
            <div class="sorting-wrap">
                Showing 1–12 of 292 results
                <button class="filter-btn">Filter <i class="fa fa-angle-down"></i></button> 
            </div>
            <!--sorting wrap-->

            <div class="filter-toggle collapse bg-soft-gray">
               <div class="row">
                   <div class="col-sm-3">
                        <div class="title"><h5>Sort by:</h5></div>
                        <form action="#">
                          <ul>
                            <li class="active"><a href="#">Default</a></li>
                            <li><a href="#">Popularity</a></li>
                            <li><a href="#">Average rating</a></li>
                            <li><a href="#">Newness</a></li>
                            <li><a href="#">Price: low to high</a></li>
                            <li><a href="#">Price: high to low</a></li>
                          </ul> 
                        </form> 
                   </div>
                   <!--sort by-->

                    <div class="col-sm-3">
                        <div class="title"><h5>filter by price:</h5></div>
                        <form action="#">
                          <ul>
                            <li class="active"><a href="#">All</a></li>
                            <li><a href="#">$0.00 - £150.00</a></li>
                            <li><a href="#">$150.00 - £200.00</a></li>
                            <li><a href="#">$200.00 - £500.00</a></li>
                            <li><a href="#">$500.00 - £800.00</a></li> 
                            <li><a href="#">$800.00 +</a></li>
                          </ul> 
                        </form> 
                    </div>
                    <!--price filter-->

                    <div class="col-sm-3">
                        <div class="title"><h5>filter by color:</h5></div>
                        <div class="color-filter">
                            <form>
                                <div class="check-wrap red">
                                    <input type="checkbox">
                                    <label>Red (20)</label>
                                </div>
                                <!--red-->

                                <div class="check-wrap black">
                                    <input type="checkbox">
                                    <label>Black (100)</label>
                                </div>
                                <!--black-->

                                <div class="check-wrap yellow">
                                    <input type="checkbox">
                                    <label>Yellow(20)</label>
                                </div>
                                <!--yellow-->

                                <div class="check-wrap blue">
                                    <input type="checkbox">
                                    <label>Blue (120)</label>
                                </div>
                                <!--blue--> 
                            </form>
                        </div> 
                   </div>
                   <!--color filter-->

                    <div class="col-sm-3">
                        <div class="title"><h5>FILTER BY SIZE</h5></div>
                        <div class="size-filter">
                            <form>
                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>L</label>
                                </div>
                                <!--l-->

                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>XL</label>
                                </div>
                                <!--xl-->

                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>M</label>
                                </div>
                                <!--m-->

                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>S</label>
                                </div>
                                <!--s-->

                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>X</label>
                                </div>
                                <!--x-->
                            </form>
                        </div>
                    </div>
               </div> 
            </div>
            <!--filter toggle-->
        </div>
        <!--sorting outer-->

        <div class="sec-mar"> 
            <div class="row"> 
                <div class="col-md-12 col-sm-12 col-xs-12 product-wrap product-listing">
                    <ul class="products">
                        @isset($product)
                        @foreach($product as $key=>$item )
                    

                        <li class="product flip">
                            <figure class="img-animi">
                                <div class="actions trans">
                                    <a class="link-layer" href="#">&nbsp;</a>
                                    
                                    <a href="#" class="actn add-to-favorite" data-tarrget-id="{{ $item->id }}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                 <form action="" method="post" class="formAddToCart">
                                     @csrf
                                    <input type="hidden" value="{{ $item->id }}">
                                    <a href="#" class="actn add-to-cart"
                                                data-product-id="{{$item->id}}"
                                                data-product-slug="{{ $item->slug }}" 
                                                data-toggle="tooltip"
                                                 data-placement="top" title="Add to Cart">
                                                 <i class="pe-7s-cart"></i>
                                                </a>
                                 </form>
                                
                                    <a href="#quick-view-popup-{{ $item -> id }}" class="quick-view actn"
                                   data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                </div>
                                @foreach( $item->image  as $key=>$phot)
                                <a href="#" class="front"><img src="{{ $phot->photo }}" alt=""></a>
                                <a href="#" class="back"><img src="{{ $phot->photo }}" alt=""></a>
                                @endforeach
                            </figure>

                            <div class="price-wrap">
                                <div class="price"><del>{{ $item->	special_price ? $item->price : "" }}</del><ins>{{ $item->special_price ? $item->special_price : $item->price }} </ins></div>
                                <div class="star-rate">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>
                            </div>

                            <h4><a href="{{ route('single.product.view',$item->slug) }}">{{ $item->name }}</a></h4> 
                        </li>
                        <!--product-->
                        @include('home.include.quickView',$item)
                        @endforeach
                        @endisset

                    </ul>
                </div>
             
                <!--product wrap-->
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="bottom-sorting">
                        <div class="result-count">Showing 1 - 12 of 120 results</div>
                        <!--result count-->

                        <div class="pagination">
                            <ul class="page-numbers">
                                <li><a class="prev page-numbers" href="#">&lt;</a></li>
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="next page-numbers" href="#">&gt;</a></li>
                            </ul>
                        </div>
                        <!--pegination--> 
                    </div>  
                </div>                 
            </div> 
        </div>
        <!--feature item-->  
    </div>  
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


            $(document).on('click', '.add-to-cart', function (e) {
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
                url: "{{Route('add-cart')}}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                    'product_slug' : $(this).attr('data-product-slug'),
                },
                success: function (data) {
                    if(data.cart == true){ 
                        $(this).bstooltip('hide');
                        $.amaran({
                            content: {
                                title: 'Success!',
                                message: 'Added to Cart',
                                info: '',
                                icon: 'icofont icofont-cart-alt'
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
