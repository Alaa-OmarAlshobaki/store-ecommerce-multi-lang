{{ dd($data['product'])->SubCate() }}
<header class="header header-5">
    <div class="top-bar bg-dark"> 
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 site-dir hidden-xs">
                <a href="tel:+01123456789"><i class="fa fa-phone"></i> +1 123 456 7890</a>
                <a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@yourdomain.com</a>
            </div>
            <!--site dir-->

            <div class="col-md-6 col-sm-6 col-xs-12 header-right pull-right text-right">
                <div class="lang">
                    <div class="dropdown">
                        <span class="drop-down-toggle">
                            <img src="assets/images/flag1.png" alt=""> Eng <i class="fa fa-angle-down"></i>
                        </span>
                        <ul class="drop-link trans">
                            <li><a href="#" class="bg-dark">English</a></li>
                            <li><a href="#" class="bg-dark">Spanish</a></li>
                        </ul>
                    </div>
                </div>
                <!--lang-->

                <div class="currency">
                    <div class="dropdown">
                        <span class="drop-down-toggle">
                            USD <i class="fa fa-angle-down"></i>
                        </span>
                        <ul class="drop-link trans">
                            <li><a href="#" class="bg-dark">USD</a></li>
                            <li><a href="#" class="bg-dark">EUR</a></li>
                        </ul>
                    </div>
                </div>
                <!--currency-->

                <div class="account-wrap style2">
                    <div class="dropdown">
                        <span class="drop-down-toggle">
                            <i class="fa fa-user"></i> ACCOUNT <i class="fa fa-angle-down"></i>
                        </span>
                        <ul class="drop-link trans">
                            @guest
                            <li><a href="{{ route('login') }}" class="bg-dark">Login</a></li>
                            <li><a href="{{ route('register') }}" class="bg-dark">Register</a></li>
                            @endguest
                            @auth
                         
                            <li>
                              
                                <a clss="bg-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
    
                                <form clss="bg-dark" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                
                            </li>
                       
                            @endauth
                        </ul>
                    </div>
                </div>
                <!--account wrap--> 

                <form class="search-form">
                    <input class="search-input" type="search" placeholder="Search..."> 
                </form>
            </div>
        </div> 
    </div>
    <!--top bar-->

    <nav class="navbar navbar-default"> 
        <div class="header-mid">                       
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo4.png" alt=""></a> 
                <!-- <a class="navbar-brand site-brand" href="index.html">neostore</a>  --> 

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button> 
            </div>
            <!-- navbar header -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li class="active menu-item-has-children">
                        <a href="#">HOME</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home V1</a></li>
                            <li><a href="home-fashion.html">Home fashion</a></li>
                            <li><a href="home-lingerie.html">Home lingerie</a></li>
                            <li><a href="electronics.html">Home electronics</a></li>
                            <li><a href="home-furniture.html">Home furniture</a></li>
                        </ul>
                    </li>  

                   <li class="menu-item-has-children mega-menu">
                        <a href="#">shop</a>

                        <div class="mega-wrap">
                            <div class="row">
                                <div class="col-sm-3 menu-item-has-children">
                                    <h6>Shop pages</h6>
                                    <ul>
                                        <li><a href="shop-grid-full.html">Grid full width</a></li>
                                        <li><a href="shop-list-full.html">List full width</a></li> 
                                        <li><a href="shop-grid-left-sidebar.html">Grid left sidebar</a></li>
                                        <li><a href="shop-grid-right-sidebar.html">grid right sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">list left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">list right sidebar</a></li>
                                        <li><a href="single-category.html">single category</a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-3 menu-item-has-children">
                                    <h6>Product pages</h6>
                                    <ul>
                                        <li><a href="product-single-v1.html">Product single v1</a></li>
                                        <li><a href="product-single-v2.html">product single v2</a></li>
                                        <li><a href="product-single-v3.html">product single v3</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li> 
                                    </ul>
                                </div>

                                <div class="col-sm-3 menu-item-has-children">
                                    <h6>product hover</h6>
                                    <ul>
                                        <li><a href="icon-left.html">icon left</a></li>
                                        <li><a href="icon-right.html">icon right</a></li>
                                        <li><a href="cart-center.html">cart center</a></li>
                                        <li><a href="summary-hover.html">hover summary</a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-3 menu-item-has-children">
                                    <h6>shop features</h6>
                                    <ul>
                                        <li><a href="product-single-v1.html">360<sup>&deg;</sup> product view </a></li>
                                        <li><a href="fly-cart.html">Fly to cart</a></li>
                                        <li><a href="docking-cart.html">Docking cart</a></li> 
                                        <li><a href="off-canvas-cart.html">Off canvas cart</a></li>   
                                        <li><a href="product-quick-view-custom.html">Quick view custom</a></li> 
                                        <li><a href="sliding-bar.html">sliding bar</a></li>
                                        <li><a href="cookie-notice.html">Cookie notice</a></li>                               
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </li>

                   <li><a href="#">women’s</a></li> 

                   <li class="menu-item-has-children">
                        <a href="#">product</a>
                        <ul class="sub-menu">
                           
                            @isset($data['product'])
                            @foreach ($data['product'] as $item)
                            <li class="menu-item-has-children">
                                <a href="#">{{ $item->name }} </a>
                                <ul class="sub-menu">
                                    @isset($data->SubCate)
                                    @foreach ($data->SubCate as $items)
                                    <li><a href="about-v1.html"> {{ $items->name }}</a></li>
                                    @endforeach
                                    @endisset
                                </ul>
                            </li> 
                            @endforeach
                            @endisset
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-v1.html">blog v1</a></li>
                            <li><a href="blog-v2.html">blog-v2</a></li>
                            <li><a href="blog-v3.html">blog v3</a></li>
                            <li><a href="blog-v4.html">blog-v4</a></li> 
                            <li><a href="blog-single.html">blog single</a></li>  
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">contact</a>
                        <ul class="sub-menu">
                            <li><a href="contact-v1.html">contact v1</a></li>
                            <li><a href="contact-v2.html">contact v2</a></li>  
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="header-mid-right"> 
                <div class="header-cart style2">
                    <a href="#" class="crt-btn pe-7s-like"></a> 
                </div>
                <!--header mini cart-->

                <div class="header-cart style2">
                    <a href="#" class="crt-btn drop-cart pe-7s-cart"> </a>
                    <div class="cart-count">
                        0 Items
                        <strong>$0.00</strong>
                    </div>

                    <div class="widget widget_shopping_cart ">
                        <h5 class="title">Your cart have (<span>2</span> Items)</h5>
                        <ul class="neo-mini-cart">
                            <li class="item">
                                <figure class="product-thumb">
                                   <a href="#"><img src="assets/images/cart-pdt-thumb3.jpg" alt=""></a>
                                </figure>
                                <!--product thumb-->

                                <div class="item-disc">
                                    <h6 class="pri-font">Ladies black full sleeves</h6>
                                    <span class="qty">1</span> X <span class="item-price">$110</span>
                                </div>

                                <a href="#" class="delete-item"><i class="pe-7s-close"></i></a>
                            </li>

                            <li class="item">
                                <figure class="product-thumb">
                                   <a href="#"><img src="assets/images/cart-pdt-thumb1.jpg" alt=""></a>
                                </figure>
                                <!--product thumb-->

                                <div class="item-disc">
                                    <h6 class="pri-font">Ladies black top</h6>
                                    <span class="qty">1</span> X <span class="item-price">$110</span>
                                </div>

                                <a href="#" class="delete-item"><i class="pe-7s-close"></i></a>
                            </li>
                        </ul>

                        <div class="mini-cart-total flx-element">
                            <span>Subtotal</span> 
                            <span>$220.00</span>
                        </div>

                        <div class="btn-hold flx-element">
                            <a class="btn text-uppercase" href="cart.html">view cart</a>
                            <a class="btn pri-bg text-uppercase" href="checkout.html">checkout</a>
                        </div>
                    </div>
                    <!--mini cart-->
                </div>
                <!--header mini cart-->
            </div>
        </div>                
    </nav> 
</header>