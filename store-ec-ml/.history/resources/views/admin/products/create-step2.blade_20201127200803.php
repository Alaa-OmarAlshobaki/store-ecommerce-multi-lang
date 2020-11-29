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
                                    <form class="needs-validation" id="saveGen" novalidate action="{{route('products.create.step.two.post')}}"
                                    method="post">
                                    @csrf
                                    <div class="form-row">
                                        @foreach ($product as $id)
                                        <input type="text" class="form-control" value="{{ $product->id }}" name="id" required>
                                        @endforeach
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">price</label>
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('price')}}" name="price" required>
                                            @error('price')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">special_price</label>
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('special_price')}}" name="special_price" required>
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
                                            <select class="form-control tagging form-small" name="special_price_type[]"
                                                multiple="multiple">
                                              
                                                <option value="percent">percent</option>
                                                <option value="fixed">fixed</option>


                                            </select>
                                            @error('special_price_type[0]')
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
                                                placeholder="" value="{{old('special_price_start')}}" name="special_price_start" required>
                                            @error('special_price_start')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">special_price_end</label>
                                            <input type="date" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('special_price_end')}}" name="special_price_end" required>
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