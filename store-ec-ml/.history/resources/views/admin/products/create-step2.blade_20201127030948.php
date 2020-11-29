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
                                    <form class="needs-validation" id="saveGen" novalidate action="{{route('products.create.step.t.post')}}"
                                    method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">@lang('admin/category.name')</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('name')}}" name="name" required>
                                            @error('name')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">@lang('admin/category.link')</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('slug')}}" name="slug" required>
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
                                            <div class="input-group mb-4">
                                              
                                                <textarea class="form-control" rows="7" value="{{old('description')}}" name="description"
                                                 aria-label="With textarea"></textarea>
                                            
                                              </div>
                                              @error('description')
                                              <p class="text-danger"> {{$message}}</p>
                                              @enderror
                                              <div class="valid-feedback">
  
                                              </div>
                                          
                                        </div>
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">short_description</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('short_description')}}"
                                                name="short_description" required>
                                            @error('short_description')
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
                                    <div class="form-group mb-4">
                                        <div class="form-check pl-0">
                                            <div class="custom-control custom-checkbox checkbox-success">
                                                <input type="checkbox" class="custom-control-input" name="is_active"
                                                    id="invalidCheck">
                                                <label class="custom-control-label"
                                                    for="invalidCheck">@lang('admin/category.status')</label>
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