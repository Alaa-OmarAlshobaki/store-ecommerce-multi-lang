   
      <footer>
        <div class="footer-top bg-dark sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <h5>Customer Service</h5>

                        <ul class="footer-nav">
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Return</a></li>
                            <li><a href="#">Site map</a></li>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                        </ul>
                    </div>
                    <!--widget-->

                    <div class="col-md-3 col-sm-3">
                        <h5>Information</h5>

                        <ul class="footer-nav">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <!--widget-->

                    <div class="col-md-3 col-sm-3">
                        <h5>Account</h5>

                        <ul class="footer-nav">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </div>
                    <!--widget-->

                    <div class="col-md-3 col-sm-3">
                        <h5>Contact us</h5>
                        <div class="contact-info">
                            <p>
                                <i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing and typesetting.
                            </p>

                            <p>
                                <i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </p>

                            <p>
                                <i class="fa fa-phone"></i> 01 234 5678 / 01 234 5698
                            </p>
                        </div>
                    </div>
                    <!--widget-->
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row footer-bottom">
                    <div class="col-md-4 col-sm-4">
                        Copyright &copy; 2018 - Neostore, All right reserved
                    </div>
                    <div class="col-md-4 col-sm-4 cards text-center">
                        <ul class="cards">
                            <li><i class="icofont icofont-paypal"></i></li>
                            <li><i class="icofont icofont-maestro"></i></li>
                            <li><i class="icofont icofont-discover"></i></li>
                            <li><i class="icofont icofont-american-express"></i></li>
                        </ul>
                    </div>
                    <!--cards-->

                    <div class="col-md-4 col-sm-4 text-right">
                        <ul class="social">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--social-->
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->
</div>
<!--wrap-->

<div id="morphsearch" class="morphsearch">
    <div class="morphsearch-content">
        <div class="container">
            <span class="morphsearch-close"></span>

            <form class="morphsearch-form">
                <input class="morphsearch-input" type="search" placeholder="Search..."/>
                <button class="morphsearch-submit" type="submit"><i class="pe-7s-search"></i></button>
            </form> 
        </div>
    </div><!-- /morphsearch-content -->        
</div>
<!--search wrap-->

<div id="quick-view-popup">
    <div class="qv-wrap">
        <div class="row product">
            <div class="col-md-6 col-sm-6 image pdt-single-slider">
                <div class="product-thumb-slider layout-btm-thumb">
                    <div class="slide-top">
                        <ul class="qv-single-image single-2">
                            @isset($product)
                            @foreach($product as $key => $item)
                            <li>
                                <figure><img src="{{ $item->image[0]->photo }}" alt=""></figure>
                            </li>
                            @endforeach
                            @endisset
                          
                        </ul>
                    </div>

                    <ul class="qv-single-thumb thumb-2">
                        <li>
                            <figure><img src="assets/images/lingerie/pdt-single-slide1.jpg" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="assets/images/lingerie/pdt-single-slide2.jpg" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="assets/images/lingerie/pdt-single-slide3.jpg" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="assets/images/lingerie/pdt-single-slide4.jpg" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="assets/images/lingerie/pdt-single-slide5.jpg" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="assets/images/lingerie/pdt-single-slide6.jpg" alt=""></figure>
                        </li>
                    </ul>
                </div>
            </div>
            <!--slider-->

            <div class="col-md-6 col-sm-6 summary ">
                <div class="wrap">
                    <div class="pdt-cat bm-5">
                        <span>{{ $item->name }}</span>
                    </div>

                    <h4>{{ $item->name }}</h4>

                    <div class="price-wrap">
                        <div class="price"><del>{{ $item->price }}</del><ins>{{ $item->name }}</ins></div>
                        <div class="star-rate">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                        </div>
                    </div>
                    <!--price wrap-->

                    <div class="disc bm-20">
                        Globally administrate synergistic web services after team driven technology. Professionally customize cutting-edge information vis-a-vis value-added internal or "organic" sources. Holisticly develop value-added communities via orthogonal products.
                    </div>
                    <!--disc-->

                    <div class="flx-element bm-20">{{ $item->qty ? $item->qty:'0' }}10
                            <span class="text-green"><i class="fa fa-check-square"></i> {{ $item->in_stock ? 'in stock':'out of stock' }}</span>
                        </div>
                        <div><strong>SKU :</strong> BLFG01</div>
                    </div>
                    <!--flex-->

                    <div class="color-option bm-20">
                        <h6 class="bm-5">Select color</h6>

                        <div class="color-filter">
                            <form>
                                <div class="radio-wrap red">
                                    <input type="radio" name="color">
                                    <label>&nbsp;</label>
                                </div>
                                <!--red-->

                                <div class="radio-wrap black">
                                    <input type="radio" name="color">
                                    <label>&nbsp;</label>
                                </div>
                                <!--black-->

                                <div class="radio-wrap yellow">
                                    <input type="radio" name="color">
                                    <label>&nbsp;</label>
                                </div>
                                <!--yellow-->

                                <div class="radio-wrap blue">
                                    <input type="radio" name="color">
                                    <label>&nbsp;</label>
                                </div>
                                <!--blue-->
                            </form>
                        </div>
                    </div>
                    <!--color option-->

                    <div class="size-option bm-20">
                        <h6 class="bm-5">Select Size</h6>

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
                    <!--size option-->

                    <div class="btn-wrap bm-20">
                        <input type="number" value="1" title="Qty" class="input-text qty" size="4">
                        <a href="#" class="btn pri-bg"><i class="pe-7s-cart"></i> ADD TO CART</a>
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
    </div>
</div>
<!--quick view-->

<a href="#" class="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
   <!-- jQuery library -->
    <script src="{{ asset('asset/site/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/touch.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/slick.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/count-up.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/youtube-jquery.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/jquery.fractionslider.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/jarallax.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/jarallax-video.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/lightcase.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/threesixty.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/jquery.amaran.min.js')}}"></script>
    <script src="{{ asset('asset/site/assets/js/main.js')}}"></script>
</body>

</html>