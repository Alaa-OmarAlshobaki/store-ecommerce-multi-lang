<div id="quick-view-popup-{{ $item->id }}" style="display: none ;   ">
            <div class="qv-wrap">
                <div class="row product">
                    <div class="col-md-6 col-sm-6 image pdt-single-slider">
                        <div class="product-thumb-slider layout-btm-thumb">
                            <div class="slide-top">
                                <ul class="qv-single-image single-2">
                                  
                                    @isset($item)
                                    @foreach($item->image as $data)
                                    <li>
                                        <figure><img src="{{ $data->photo }}" alt=""></figure>
                                    </li>
                                    @endforeach
                                    @endisset
                                  
                                </ul>
                            </div>
        
                            <ul class="qv-single-thumb thumb-2">
                                    @isset($item)
                                    @foreach($item->image as $data)
                                    <li>
                                        <figure><img src="{{ $data->photo }}" alt=""></figure>
                                    </li>
                                    @endforeach
                                    @endisset
                            </ul>
                        </div>
                    </div>
                    <!--slider-->
                    <div class="col-md-6 col-sm-6 summary ">
                        <div class="wrap">
                            <div class="pdt-cat bm-5">
                                <span>Ladies fashion</span>
                            </div>
    
                            <h4>{{ $item->name }} </h4>
    
                            <div class="price-wrap">
                                <div class="price">
                                    <del>{{ $item->	special_price ? $item->price : "" }}</del><ins>{{ $item->special_price ? $item->special_price : $item->price }} </ins>
                                    {{-- <del>$189.00</del><ins>$189.00 </ins> --}}
                                </div>
                                <div class="star-rate">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </div>
                            </div>
                            <!--price wrap-->
    
                            <div class="disc bm-20">
                                Globally administrate synergistic web services after team driven technology. Professionally customize cutting-edge information vis-a-vis value-added internal or "organic" sources. Holisticly develop value-added communities via orthogonal products.
                            </div>
                            <!--disc-->
    
                            <div class="flx-element bm-20">
                                <div><strong>Availability :</strong> 10
                                    <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                                </div>
                                <div><strong>SKU :</strong> BLFG01</div>
                            </div>
                            <!--flex-->
    
                            <div class="color-option bm-20">
                                <h6 class="bm-5">Select color</h6>
    
                                <div class="color-filter">
                                    <form>
                                        {{ $item->Attribute }}
                                  @if($item->Option == 'color')
                                   
                                        <div class="radio-wrap red">
                                            <input type="radio" name="color">
                                            <label>&nbsp;</label>
                                        </div>
                                        @endif
                                     
                                       
                             
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