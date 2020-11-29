@extends('admin.layout')
@section('content')
     <!--  BEGIN CONTENT AREA  -->
     <div id="content" class="main-content">
        <div class="layout-px-spacing">
     <div class="row">
        <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>@lang('admin/category.edit_category')</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">                                
                <form class="needs-validation" novalidate action="{{route('store.cat')}}"  enctype="multipart/form-data" method="post">
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
                                <label for="validationCustom02">@lang('admin/category.link')</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="" value="{{old('slug')}}" name="slug" required>
                                @error('slug')
                                <p class="text-danger"> {{$message}}</p>
                             
                                @enderror
                                <div class="valid-feedback">
                                
                                </div>
                            </div>
                        
                        
                        </div>
                   
                      

                        <div class="form-row ">
                        
                          
                            <div class="col-md-5 mb-6">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*" required>
                                        {{-- <input type="hidden" name="MAX_FILE_SIZE" value="10485760" /> --}}
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                                @error('image')
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
                        <div class="col-md-5 mb-6">
                        <div class="form-group mb-4">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <div class="n-chk align-self-end">
                                            <label class="new-control new-radio radio-info" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                                <input type="radio" value="1" name="type" class="new-control-input" name="custom-radio-1" >
                                                <span class="new-control-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="subcategory" aria-label="radio" >
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <div class="n-chk align-self-end">
                                            <label class="new-control new-radio radio-info" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                                <input type="radio" value="2" name="type" checked class="new-control-input" id="show" name="custom-radio-1" checked>
                                                <span class="new-control-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Category" aria-label="radio" >
                            </div>
                        </div>
                        </div>

                        
                         
                        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
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
