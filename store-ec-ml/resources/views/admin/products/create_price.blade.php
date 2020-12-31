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
                                <h4>add price</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <form class="needs-validation" id="saveGen" novalidate action="{{ route('products.Store.Price') }}"
                                    method="post">
                                    @csrf
                                    <div class="form-row">
                                      {{-- {{ dd(Session::get('product')) }} --}}
                                      <input type="hidden" class="form-control"  value="{{$product->id}}" name="product_id" >
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">price</label>
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{$product->price}}" name="price" required>
                                            @error('price')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">special_price</label>
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{$product->special_price}}" name="special_price" >
                                            @error('special_price')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="form-row">
                                        <div class="col-md-4 mb-6">
                                            <label for="validationCustom01">special_price_type</label>
                                            <select class="form-control  form-small" name="special_price_type"
                                                >
                                                <option>--select--</option>
                                                <option value="percent" @if($product->special_price_type ==  'percent' ) selected  @endif >percent</option>
                                                <option value="fixed" @if($product->special_price_type ==  'fixed')  selected  @endif>fixed</option>


                                            </select>
                                            @error('special_price_type')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">special_price_start</label>
                                            <input type="date" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{$product->special_price_start}}" name="special_price_start" >
                                            @error('special_price_start')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">special_price_end</label>
                                            <input type="date" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{$product->special_price_end}}" name="special_price_end" >
                                            @error('special_price_end')
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