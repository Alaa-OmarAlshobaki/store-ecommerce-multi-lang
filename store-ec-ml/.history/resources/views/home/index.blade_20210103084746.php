@extends('home.include.layout')
@section('content')

{{ dd($product)}}
<!--  BEGIN CONTENT PART  -->
<main class="main"> 
    <div class="lingerie-cat sec-mar">   
        <div class="container gutter-5">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="cat-3 img-animi">                                
                        <a href="#" class="link-layer">&nbsp;</a>
                        <div class="text-overlay text-uppercase ">
                            <h3 class="bm-0 text-white">Sexy Lingerie
                                <span class="pri-font">150 items</span>
                            </h3>  
                            <span class="text-white view"><i class="fa fa-angle-right"></i></span>
                        </div>    
                        <figure>
                            <img src="assets/images/lingerie/lingerie-cat1.jpg" alt="smart watch">
                        </figure>
                    </div>
                </div>  
                <!--singel cat--> 

                <div class="col-md-4 col-sm-4">
                    <div class="cat-3 img-animi">                                
                        <a href="#" class="link-layer">&nbsp;</a>
                        <div class="text-overlay text-uppercase ">
                            <h3 class="bm-0 text-white">designer bras
                                <span class="pri-font">300 items</span>
                            </h3>  
                            <span class="text-white view"><i class="fa fa-angle-right"></i></span>
                        </div>   
                        <figure>
                            <img src="assets/images/lingerie/lingerie-cat2.jpg" alt="smart watch">
                        </figure>
                    </div>
                </div>  
                <!--singel cat--> 

                <div class="col-md-4 col-sm-4">
                    <div class="cat-3 img-animi">                                
                        <a href="#" class="link-layer">&nbsp;</a>
                        <div class="text-overlay text-uppercase ">
                            <h3 class="bm-0 text-white">luxury panties
                                <span class="pri-font">550 items</span>
                            </h3>  
                            <span class="text-white view"><i class="fa fa-angle-right"></i></span>
                        </div>    
                        <figure>
                            <img src="assets/images/lingerie/lingerie-cat3.jpg" alt="smart watch">
                        </figure>
                    </div>
                </div>  
                <!--singel cat-->  
            </div>
        </div>
    </div>
    <!--electronic category-->

    <div class="sec-mar ling-featured-pdt">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="title mid-sep">
                        <h2>Featured items</h2>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 left-pdt"> 
                    <div class="product-wrap">
                        {{-- <ul class="products solo">
                            <li class="product last">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                    
                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                    </div>

                                    <a href="#"><img src="assets/images/lingerie/product-big.jpg" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$189.00</del>
                                        <ins>$189.00 </ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>
                                <h4><a href="#">Continually maintain team</a></h4>
                            </li>
                            <!--product--> 
                        </ul> --}}
                        <div class="clearfix"></div>
                    </div>
                    <!--products--> 
                    <div class="promo-2 img-animi">
                        <a href="#" class="link-layer">&nbsp;</a>

                        <div class="content">
                            <div>
                                <h2 class="bm-0 wt-700 text-uppercase">get <span class="pri-color">20%</span> off</h2>
                               <h6 class="bm-0">Super lingerie clearance sale</h6>
                            </div>
                        </div>

                        <figure>
                             <img src="assets/images/lingerie/lingerie-promo.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <!--left-->

                <div class="col-md-6 col-sm-6 right-bdt"> 
                    <div class="product-wrap">
                        <ul class="products">
                         
                            @isset($cate)
                            @foreach($cate as $item)
                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                    
                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                    </div>

                                    <a href="#"><img src="assets/images/lingerie/product1.jpg" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$189.00</del>
                                        <ins>$189.00 </ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>
                                <h4><a href="#">Continually maintain team</a></h4>
                            </li>
                            @endforeach
                            @endisset
                            <!--product-->

                            {{-- <li class="product new last">
                                <figure class="img-animi">
                                    <div class="tag new">new</div>
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                    
                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                    </div>

                                    <a href="#"><img src="assets/images/lingerie/product2.jpg" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <ins>$30.00 </ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>
                                <h4><a href="#">Authoritatively customize</a></h4>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                    
                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                    </div>

                                    <a href="#"><img src="assets/images/lingerie/product3.jpg" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <ins>$200.00 </ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Collaboratively envisioneer</a></h4>
                            </li>
                            <!--product-->

                            <li class="product last">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                    
                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="assets/images/lingerie/product4.jpg" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$680.00</del>
                                        <ins>$660.00 </ins>
                                    </div>

                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>
                                <h4><a href="#">Rapidiously utilize extensiv</a></h4>
                            </li>
                            <!--product-->  --}}
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--products-->
                </div>
                <!--right-->
            </div>
        </div>
    </div>
    <!--featured pdt-->

    <div class="lingarie-offer sec-mar"> 
        <div class="jarallax ling-offer">
            <img class="jarallax-img" src="assets/images/lingerie/parallax.jpg" alt="">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-12 col-sm-12"> 
                        <div class="wrap"> 
                            <div class="col-sm-6">
                                <h2 class="text-uppercase txt-lg bm-0">exclusive offer</h2>
                                <h5 class="bm-30">
                                    <em>Dynamically customize orthogonal information.</em>
                                </h5>                                  

                                <div class="count-down bm-40" data-end-date="June 2, 2018"></div>
                                <!--count down--> 

                                <a class="btn btn-default">View more</a>
                            </div>
                        </div> 
                    </div>
                    <!--content-->    
                </div>    
            </div> 
        </div> 
    </div>
    <!--offer-->

    <div class="sec-mar lingerie-best-seller"> 
        <div class="container">
            <div class="row"> 
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="title mid-sep">
                        <h2>Best seller products</h2>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="product-wrap pdt-small col-3">
                        <ul class="products">
                            <li class="product">
                                <figure class="img-animi">
                                    <a href="#"><img src="assets/images/lingerie/product1.jpg" alt=""></a>
                                </figure>

                                <h6 class="pri-font"><a href="#">Continually maintain</a></h6>
                                <div class="star-rate bm-5">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>

                                <div class="price bm-5">
                                    <del>$189.00</del>
                                    <ins>$189.00 </ins>
                                </div>

                                <a class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <a href="#"><img src="assets/images/lingerie/product2.jpg" alt=""></a>
                                </figure>

                                <h6 class="pri-font"><a href="#">Authoritatively</a></h6>
                                
                                <div class="star-rate bm-5">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>

                                <div class="price bm-5">
                                    <ins>$40.00 </ins>
                                </div>

                                <a class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <a href="#"><img src="assets/images/lingerie/product3.jpg" alt=""></a>
                                </figure>

                                <h6 class="pri-font"><a href="#">Collaboratively envisioneer</a></h6>
                                <div class="star-rate bm-5">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>

                                <div class="price bm-5">
                                    <ins>$40.00 </ins>
                                </div>

                                <a class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <a href="#"><img src="assets/images/lingerie/product4.jpg" alt=""></a>
                                </figure>

                                <h6 class="pri-font"><a href="#">Rapidiously utilize</a></h6>
                                <div class="star-rate bm-5">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>

                                <div class="price bm-5">
                                    <ins>$40.00 </ins>
                                </div>

                                <a class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a>
                            </li>
                            <!--product-->


                            <li class="product">
                                <figure class="img-animi">
                                    <a href="#"><img src="assets/images/lingerie/product5.jpg" alt=""></a>
                                </figure>

                                <h6 class="pri-font"><a href="#">Credibly syndicate</a></h6>
                                <div class="star-rate bm-5">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>

                                <div class="price bm-5">
                                    <ins>$40.00 </ins>
                                </div>

                                <a class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a>
                            </li>
                            <!--product-->


                            <li class="product">
                                <figure class="img-animi">
                                    <a href="#"><img src="assets/images/lingerie/product6.jpg" alt=""></a>
                                </figure>

                                <h6 class="pri-font"><a href="#">Synergistically</a></h6>
                                <div class="star-rate bm-5">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>

                                <div class="price bm-5">
                                    <ins>$40.00 </ins>
                                </div>

                                <a class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a>
                            </li>
                            <!--product-->
                        </ul>
                    </div>
                </div> 
                <!--hot deal--> 
            </div>
        </div> 
    </div>
    <!--hot deal-->

    <div class="trending sec-mar"> 
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="title mid-sep"><h2>Trending Products</h2></div>
                </div> 

                <div class="col-md-12 col-sm-12 col-xs-12 product-wrap product-slide-wrap">
                    <ul class="products product-slider">
                        <li class="product">
                            <figure class="img-animi">
                                <div class="actions trans">
                                    <a class="link-layer" href="#">&nbsp;</a>
                                    
                                    <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                    <a href="#" class="actn" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="pe-7s-look"></i></a>
                                </div>
                                <a href="#"><img src="assets/images/lingerie/product1.jpg" alt=""></a>
                            </figure>

                            <div class="price-wrap">
                                <div class="price"><del>$189.00</del><ins>$189.00 </ins></div>
                                <div class="star-rate">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>
                            </div>

                            <h4><a href="#">Appropriately leverage</a></h4> 
                        </li>
                        <!--product-->

                        <li class="product new">
                            <figure class="img-animi">
                                <div class="tag new">new</div>
                                <div class="actions trans">
                                    <a class="link-layer" href="#">&nbsp;</a>
                                    
                                    <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                    <a href="#" class="actn" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="pe-7s-look"></i></a>
                                </div> 
                                <a href="#"><img src="assets/images/lingerie/product2.jpg" alt=""></a>
                            </figure>

                            <div class="price-wrap">
                                <div class="price"><ins>$109.00 </ins></div>
                                <div class="star-rate">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>
                            </div>

                            <h4><a href="#">Enthusiastically build</a></h4> 
                        </li>
                        <!--product-->

                        <li class="product">
                            <figure class="img-animi">
                                <div class="actions trans">
                                    <a class="link-layer" href="#">&nbsp;</a>
                                    
                                    <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                    <a href="#" class="actn" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="pe-7s-look"></i></a>
                                </div>
                                <a href="#"><img src="assets/images/lingerie/product3.jpg" alt=""></a> 
                            </figure>

                            <div class="price-wrap">
                                <div class="price"><del>$80.00</del><ins>$75.00 </ins></div>
                                <div class="star-rate">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>
                            </div>

                            <h4><a href="#">Objectively reconceptualize</a></h4> 
                        </li>
                        <!--product-->

                        <li class="product">
                            <figure class="img-animi">
                                <div class="actions trans">
                                    <a class="link-layer" href="#">&nbsp;</a>
                                    
                                    <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                    <a href="#" class="actn" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="pe-7s-look"></i></a>
                                </div>
                                <a href="#"><img src="assets/images/lingerie/product4.jpg" alt=""></a>
                            </figure>

                            <div class="price-wrap">
                                <div class="price"><del>$99.00</del><ins>$95.00 </ins></div>
                                <div class="star-rate">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>
                            </div>

                            <h4><a href="#">Energistically parallel</a></h4> 
                        </li>
                        <!--product-->

                        <li class="product new flip">
                            <figure class="img-animi">
                                <div class="tag new">new</div>
                                <div class="actions trans">
                                    <a class="link-layer" href="#">&nbsp;</a>
                                    
                                    <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                    <a href="#" class="actn" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="pe-7s-look"></i></a>
                                </div>
                                <a href="#"><img src="assets/images/lingerie/product5.jpg" alt=""></a> 
                            </figure>

                            <div class="price-wrap">
                                <div class="price"><ins>$109.00 </ins></div>
                                <div class="star-rate">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>
                            </div>

                            <h4><a href="#">Dramatically deliver</a></h4> 
                        </li>
                        <!--product-->

                        <li class="product flip">
                            <figure class="img-animi">
                                <div class="actions trans">
                                    <a class="link-layer" href="#">&nbsp;</a>
                                    
                                    <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                    <a href="#" class="actn" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="pe-7s-look"></i></a>
                                </div>
                                <a href="#"><img src="assets/images/lingerie/product6.jpg" alt=""></a> 
                            </figure>

                            <div class="price-wrap">
                                <div class="price"><del>$80.00</del><ins>$75.00 </ins></div>
                                <div class="star-rate">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>
                            </div>

                            <h4><a href="#">Conveniently deliver.</a></h4> 
                        </li>
                        <!--product-->
                    </ul>  
                </div>        
            </div>
        </div> 
    </div>
    <!--tranding--> 

    <div class="shop-feature sec-mar white sec-bg">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12 col-sm-12 shp-ftr-wrap">
                    <div class="feature-box">
                        <h5><span class="icon icofont icofont-free-delivery"></span>Free Shipping</h5>
                        <span class="sub-text">Free Delivery on orders above $40.</span>
                    </div>

                    <div class="feature-box">
                        <h5><span class="icon icofont icofont-reply"></span>Return back</h5>
                        <span class="sub-text">Return or exchange within 30 days.</span>
                    </div> 

                    <div class="feature-box">
                        <h5><span class="icon icofont icofont-money"></span>secure payment</h5>
                        <span class="sub-text">We follow tursted payment method.</span>
                    </div>

                    <div class="feature-box">
                        <h5><span class="icon icofont icofont-live-support"></span>24 / 7 support</h5>
                        <span class="sub-text">Experince our best support system</span>
                    </div>
                </div>
                <!--support-->
            </div>
        </div>
    </div>            
    <!--shop feature-->

    <div class="news blog-holder sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="title mid-sep">
                        <h2>Latest news</h2>
                    </div>
                </div>
            </div>
            <!--title-->

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 blog-wrap">
                    <figure class="img-animi">
                        <a href="#"><img src="assets/images/lingerie/news-1.jpg" alt=""></a>
                    </figure>

                    <div class="entry-info">
                        <span class="entry-date pri-bg">aug 10 2017</span>
                        <span class="comment-count"><a href="#"><i class="fa fa-comments"></i> 5</a></span>
                    </div>

                    <h3 class="post-title">
                        <a href="#">Proactively incubate plug-and-play collaboration.</a>
                    </h3>

                    <div class="content-hold">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, magnis dis parturient montes.
                        </p>
                    </div>
                    <!--content-->

                    <a class="btn faa-parent animated-hover">Read more <i class="fa fa-long-arrow-right faa-passing"></i></a>
                </div>
                <!--single blog-->

                <div class="col-md-4 col-sm-4 col-xs-12 blog-wrap">
                    <figure class="img-animi">
                        <a href="#"><img src="assets/images/lingerie/news-2.jpg" alt=""></a>
                    </figure>

                    <div class="entry-info">
                        <span class="entry-date pri-bg">aug 10 2017</span>
                        <span class="comment-count"><a href="#"><i class="fa fa-comments"></i> 5</a></span>
                    </div>

                    <h3 class="post-title">
                        <a href="#">Proactively incubate plug-and-play collaboration.</a>
                    </h3>

                    <div class="content-hold">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, magnis dis parturient montes.
                        </p>
                    </div>
                    <!--content-->

                    <a class="btn faa-parent animated-hover">Read more <i class="fa fa-long-arrow-right faa-passing"></i></a>
                </div>
                <!--single blog-->

                <div class="col-md-4 col-sm-4 col-xs-12 blog-wrap">
                    <figure class="img-animi">
                        <a href="#"><img src="assets/images/lingerie/news-3.jpg" alt=""></a>
                    </figure>

                    <div class="entry-info">
                        <span class="entry-date pri-bg">aug 10 2017</span>
                        <span class="comment-count"><a href="#"><i class="fa fa-comments"></i> 5</a></span>
                    </div>

                    <h3 class="post-title">
                        <a href="#">Proactively incubate plug-and-play collaboration.</a>
                    </h3>

                    <div class="content-hold">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, magnis dis parturient montes.
                        </p>
                    </div>
                    <!--content-->

                    <a class="btn faa-parent animated-hover">Read more <i class="fa fa-long-arrow-right faa-passing"></i></a>
                </div>
                <!--single blog-->
            </div>
        </div>
    </div>
    <!--news-->

    <div class="insta-wrap gutter-0">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h2 class="text-center">FOLLOW US ON <span class="pri-color">@INSTAGRAM</span></h2>
                <ul>
                    <li>
                        <figure><a href="#" class="img-animi"><img src="assets/images/insta-1.jpg" alt=""></a></figure>
                    </li>

                    <li>
                        <figure><a href="#" class="img-animi"><img src="assets/images/insta-2.jpg" alt=""></a></figure>
                    </li>

                    <li>
                        <figure><a href="#" class="img-animi"><img src="assets/images/insta-3.jpg" alt=""></a></figure>
                    </li>

                    <li>
                        <figure><a href="#" class="img-animi"><img src="assets/images/insta-4.jpg" alt=""></a></figure>
                    </li>

                    <li>
                        <figure><a href="#" class="img-animi"><img src="assets/images/insta-5.jpg" alt=""></a></figure>
                    </li>

                    <li>
                        <figure><a href="#" class="img-animi"><img src="assets/images/insta-6.jpg" alt=""></a></figure>
                    </li>

                    <li>
                        <figure><a href="#" class="img-animi"><img src="assets/images/insta-7.jpg" alt=""></a></figure>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    <!--instagram-->

</main>
<!--main-->

@include('home.include.modale')
<!-- /.modal -->
        @endsection