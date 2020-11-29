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
                        <div class="wrapper">
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
                                            <input type="text" class="form-control" placeholder="Last Name">
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
                                            <select class="form-control tagging" name="categories[]">
                                                @if ($data['categories'] && $data['categories']->count()>0)
                                                 @foreach ($data['categories'] as $category)
                                                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    
                                                @endforeach
                                                    
                                                @endif
                                               
                                            </select>
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

                        {{-- <div id="circle-basic" class="">
                            <h3>Keyboard</h3>
                            <section>
                                <form class="needs-validation" novalidate action="{{route('store.product')}}" method="post">
                                    @csrf
                                        <div class="form-row">
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">@lang('admin/category.name')</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('name')}}" name="name" required>
                                                @error('name')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">@lang('admin/category.link')</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('slug')}}" name="slug" required>
                                                @error('slug')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">description</label>
                                                <div id="content-container">
                                                    <div id="toolbar-container">
                                                        <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                                                        <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                                                        <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                                                        <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                                                        <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button>
                                                    </div>
                                                    <div id="quill-tooltip">
                                                        <h1>This is a heading text...</h1>
                                                        <br/>
                                                         <p>Aliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum. Vestibulum sed metus ac nisi tincidunt mollis sed non urna. Vivamus lacinia ullamcorper interdum. Sed sed erat vel leo venenatis pretium. Sed aliquet sem nunc, ut iaculis dolor consectetur et. Vivamus ligula sapien, maximus nec pellentesque ut, imperdiet at libero. Vivamus semper nulla lectus, id dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut molestie nunc convallis. Pellentesque et odio non dolor convallis commodo sit amet a ante. </p>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('description')}}" name="description" required>
                                                @error('description')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">short_description</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('short_description')}}" name="short_description" required>
                                                @error('short_description')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-6">
                                                <label for="validationCustom01">category</label>
                                                <select class="form-control tagging" name="categories[]" multiple="multiple">
                                                    @if ($data['categories'] && $data['categories']->count()>0)
                                                     @foreach ($data['categories'] as $category)
                                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        
                                                    @endforeach
                                                        
                                                    @endif
                                                   
                                                </select>
                                                @error('categories[0]')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
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
                                            <div class="col-md-4 mb-6">
                                                <label for="validationCustom01">brands</label>
                                                <select class="form-control form-small" name="brand">
                                                    @if ($data['brands'] && $data['brands']->count()>0)
                                                    @foreach ($data['brands'] as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                       
                                                   @endforeach
                                                       
                                                   @endif
                                                  </select>
                                                @error('brand')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-success">
                                                    <input type="checkbox" class="custom-control-input" name="is_active" id="invalidCheck" >
                                                    <label class="custom-control-label" for="invalidCheck">@lang('admin/category.status')</label>
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
                                    </form>
                              
                            </section>
                            <h3>Effects</h3>
                            <section>
                                <p>Wonderful transition effects.</p>
                            </section>
                            <h3>Pager</h3>
                            <section>
                                <p>The next and previous buttons help you to navigate through your content.</p>
                            </section>
                        </div> --}}
                        {{-- <div id="toggleAccordion">
                          <div class="card">
                            <div class="card-header" id="headingOne1">
                              <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="true" aria-controls="defaultAccordionOne">
                                    Fill in the basic data of the product <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                </div>
                              </section>
                            </div>

                            <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion">
                              <div class="card-body">
                                <form class="needs-validation" novalidate action="{{route('store.product')}}" method="post">
                                    @csrf
                                        <div class="form-row">
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">@lang('admin/category.name')</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('name')}}" name="name" required>
                                                @error('name')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">@lang('admin/category.link')</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('slug')}}" name="slug" required>
                                                @error('slug')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">description</label>
                                                <div id="content-container">
                                                    <div id="toolbar-container">
                                                        <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                                                        <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                                                        <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                                                        <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                                                        <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button>
                                                    </div>
                                                    <div id="quill-tooltip">
                                                        <h1>This is a heading text...</h1>
                                                        <br/>
                                                         <p>Aliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum. Vestibulum sed metus ac nisi tincidunt mollis sed non urna. Vivamus lacinia ullamcorper interdum. Sed sed erat vel leo venenatis pretium. Sed aliquet sem nunc, ut iaculis dolor consectetur et. Vivamus ligula sapien, maximus nec pellentesque ut, imperdiet at libero. Vivamus semper nulla lectus, id dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut molestie nunc convallis. Pellentesque et odio non dolor convallis commodo sit amet a ante. </p>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('description')}}" name="description" required>
                                                @error('description')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">short_description</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('short_description')}}" name="short_description" required>
                                                @error('short_description')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-6">
                                                <label for="validationCustom01">category</label>
                                                <select class="form-control tagging" name="categories[]" multiple="multiple">
                                                    @if ($data['categories'] && $data['categories']->count()>0)
                                                     @foreach ($data['categories'] as $category)
                                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        
                                                    @endforeach
                                                        
                                                    @endif
                                                   
                                                </select>
                                                @error('categories[0]')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
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
                                            <div class="col-md-4 mb-6">
                                                <label for="validationCustom01">brands</label>
                                                <select class="form-control form-small" name="brand">
                                                    @if ($data['brands'] && $data['brands']->count()>0)
                                                    @foreach ($data['brands'] as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                       
                                                   @endforeach
                                                       
                                                   @endif
                                                  </select>
                                                @error('brand')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-success">
                                                    <input type="checkbox" class="custom-control-input" name="is_active" id="invalidCheck" >
                                                    <label class="custom-control-label" for="invalidCheck">@lang('admin/category.status')</label>
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
                                    </form>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo1">
                              <section class="mb-0 mt-0">
                                <div role="menu" class="" data-toggle="collapse" data-target="#defaultAccordionTwo" aria-expanded="false" aria-controls="defaultAccordionTwo">
                                  Collapsible Group Item #2  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id="defaultAccordionTwo" class="collapse show" aria-labelledby="headingTwo1" data-parent="#toggleAccordion">
                                <div class="card-body">
                               
                               
                               
                                  

                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree1">
                              <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionThree" aria-expanded="false" aria-controls="defaultAccordionThree">
                                  Collapsible Group Item #3 <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id="defaultAccordionThree" class="collapse" aria-labelledby="headingThree1" data-parent="#toggleAccordion">
                              <div class="card-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                <button class="btn btn-primary mt-4">Accept</button>
                              </div>
                            </div>
                          </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <!--  END CONTENT AREA  -->
@endsection 