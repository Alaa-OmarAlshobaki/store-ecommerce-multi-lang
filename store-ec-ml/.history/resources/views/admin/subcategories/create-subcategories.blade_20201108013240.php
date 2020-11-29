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
                <form class="needs-validation" novalidate action="{{route('store.category')}}" method="post">
                    @csrf
                        <div class="form-row">
                     
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">@lang('admin/category.name')</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder=""  name="name" required>
                                @error('name')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom02">@lang('admin/category.link')</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder=""  name="slug" required>
                                @error('slug')
                                <p class="text-danger"> {{$message}}</p>
                             
                                @enderror
                                <div class="valid-feedback">
                                
                                </div>
                            </div>
                        
                        
                        </div>
                   
                      

                        <div class="form-row mt-3">
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom02">@lang('admin/category.link')</label>
                                <select class="form-control  basic" nane="parent_id" required>
                                    <option selected="selected">select category</option>
                                    @if ($cate && $cate->count() >0)
                                    @foreach($cate as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('parent_id')
                                <p class="text-danger"> {{$message}}</p>
                             
                                @enderror
                                <div class="valid-feedback">
                                
                                </div>
                            </div>
                        <div class="form-row mt-3">
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom02"></label>
                                <div class="form-check pl-0">
                                    <div class="custom-control custom-checkbox checkbox-success">
                                        <input type="checkbox" class="custom-control-input" name="is_active" id="invalidCheck" >
                                        <label class="custom-control-label" for="invalidCheck">@lang('admin/category.status')</label>
                                      
                                    </div>
                                </div>
                                @error('is_active')
                                <p class="text-danger"> {{$message}}</p>
                             
                                @enderror
                                <div class="valid-feedback">
                                
                                </div>
                            </div>
                          
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom02">Upload Images For Category</label>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label> (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>

                                  

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
        </div>
    </div>
</div>
</div>

    <!--  END CONTENT AREA  -->
@endsection 