 @extends('admin.layout')
@section('content')
     <!--  BEGIN CONTENT AREA  -->
     <div id="content" class="main-content">
        <div class="layout-px-spacing">
     <div class="row">
        <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
            <div class="breadcrumb-five">
                <ul class="breadcrumb">
                    <li class="mb-2"><a href="javscript:void(0);">Home</a>
                    </li>
                    <li class="active mb-2"><a href="javscript:void(0);">Components</a></li>
                    <li class="mb-2"><a href="javscript:void(0);">UI Kit</a></li>
                </ul>
            </div>
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>@lang('admin/category.edit_category')</h4>
                        </div>                 
                    </div>
                </div>                              
                    <div class="widget-content widget-content-area">

              <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <h3>Basic details</h3>
                	<div class="form-row">
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <select class="form-control tagging" name="tags[]" multiple="multiple">
                                @if ($data['tags'] && $data['tags']->count()>0)
                                @foreach ($data['tags'] as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                                @endforeach

                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="validationCustom01">tags</label>
                        <select class="form-control tagging" name="tags[]" multiple="multiple">
                            @if ($data['tags'] && $data['tags']->count()>0)
                            @foreach ($data['tags'] as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                            @endforeach

                            @endif
                        </select>
                        @error('tags.0')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror
                        <div class="valid-feedback">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <i class="zmdi zmdi-email"></i>
                            <input type="text" class="form-control" placeholder="Email ID">
                        </div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account-box-o"></i>
                            <input type="text" class="form-control" placeholder="Your User ID">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <i class="zmdi zmdi-map"></i>
                            <input type="text" class="form-control" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin"></i>
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin-drop"></i>
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <i class="zmdi zmdi-smartphone-android"></i>
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-holder password">
                            <i class="zmdi zmdi-eye"></i>
                            <input type="password" class="form-control" placeholder="Reference Coder">
                        </div>
                    </div>
                </section>

				<!-- SECTION 2 -->
                <h4></h4>
                <section>
                	<h3>Password change</h3>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="password" class="form-control" placeholder="Current Password">
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="password" class="form-control" placeholder="Enter the Current Password">
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="password" class="form-control" placeholder="New Password">
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="password" class="form-control" placeholder="Confirm New Password">
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>
                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <h3 style="margin-bottom: 16px;">My Cart</h3>
                    <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table">
                        <thead>
                            <th >&nbsp;</th>
                            <th style="text-align: left;">Product Detail</th>
                            <th >Quantity</th>
                            <th >Total Price</th>
                            <th >&nbsp;</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/item-1.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Cherry</a>
                                        <span>$</span>
                                        <span>35</span>
                                    </div>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <span class="plus">+</span>
                                        <input type="number" id="quantity_5b4f198d958e1" class="input-text qty text" step="1" min="0" max="" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
                                        <span class="minus">-</span>
                                    </div>
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        70
                                    </span>
                                </td>
                                <td class="product-remove">
                                    <a href="#">
                                        <i class="zmdi zmdi-close-circle-o"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/item-2.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                         <a href="#">Mango</a>
                                        <span>$</span>
                                        <span>2035</span>
                                    </div>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <span class="plus">+</span>
                                        <input type="number" id="quantity_5b4f198d958e1" class="input-text qty text" step="1" min="0" max="" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
                                        <span class="minus">-</span>
                                    </div>
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        20
                                    </span>
                                </td>
                                <td class="product-remove">
                                    <a href="#">
                                        <i class="zmdi zmdi-close-circle-o"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- SECTION 4 -->
                <h4></h4>
                <section>
                    <h3>Cart Totals</h3>
                    <div class="cart_totals">
                        <table cellspacing="0" class="shop_table shop_table_responsive">
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>110.00
                                    </span>
                                </td>
                            </tr>
                            <tr class="cart-subtotal shipping">
                                <th>Shipping:</th>
                                <td data-title="Subtotal">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="shipping" checked> Free Shipping
                                            <span class="checkmark"></span>
                                        </label>
                                        <label>
                                            <input type="radio" name="shipping"> Local pickup: <span>$</span><span>0.00</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <span>Calculate shipping</span>
                                </td>
                            </tr>
                            <tr class="cart-subtotal">
                                <th>Service <span>(estimated for Vietnam)</span></th>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>5.60
                                    </span>
                                </td>
                            </tr>
                            <tr class="order-total border-0">
                                <th>Total</th>
                                <td data-title="Total">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>64.69
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                </section>
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <!--  END CONTENT AREA  -->
@endsection 