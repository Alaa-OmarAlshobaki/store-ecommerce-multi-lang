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
                                <h4>stock</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <form class="needs-validation" id="saveGen" novalidate action="{{ route('products.Store.Stock') }}"
                                    method="post">
                                    @csrf
                                    
                                    <div class="form-row">
                                        <input type="hidden" class="form-control" value="{{ $product->id }}" name="product_id" >
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">code product</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{$product->sku}}" name="sku" >
                                            @error('sku')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-6">
                                            <label for="validationCustom01">in_stock</label>
                                            <select class="form-control  form-small" name="in_stock"
                                                >
                                              
                                                <option value="1" @if($product->in_stock== 1)  selected  @endif>Available</option>
                                                <option value="0" @if($product->in_stock== 0)  selected  @endif>UnAvailable</option>


                                            </select>
                                            @error('in_stock')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-6">
                                            <label for="validationCustom01">mange_stock</label>
                                            <select class="form-control mangStock  form-small" name="mange_stock" id="mangStock"
                                                >
                                                <option value="1" @if($product->mange_stock== 1)  selected  @endif>Track the product</option>
                                                <option value="0" @if($product->mange_stock== 0)  selected  @endif>Cancel tracking the product</option>


                                            </select>
                                            @error('mange_stock')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                      
                                    </div>
                                   
                                    <div class="form-row invisible" id="qty" >
                                        <div class="col-md-6 mb-6">
                                            <label for="validationCustom01">qty</label>
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('qty')}}" name="qty" >
                                            @error('qty')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                   
                                    </div>
                                   
                                  

                                    <button class="btn btn-primary mt-3" type="submit">Next</button>
                                </form>
                                </div>
                            </div>
                        </div>

                     
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--  END CONTENT AREA  -->
@endsection
