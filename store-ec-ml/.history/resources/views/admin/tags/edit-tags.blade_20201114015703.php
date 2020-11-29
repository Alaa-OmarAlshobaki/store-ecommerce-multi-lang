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
                            <h4>@lang('admin/category.edit_category')&nbsp;{{$tag->name}}</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">                                
                <form class="needs-validation" novalidate action="{{route('update.tags',$tag->id)}}"  enctype="multipart/form-data" method="post">
                    @csrf
                        <div class="form-row">
                        <input type="hidden" value="{{$tag->id}}" name="id">
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">@lang('admin/category.name')</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{$tag->name}}" name="name" required>
                                @error('name')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">@lang('admin/category.link')</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{$tag->slug}}" name="slug" required>
                                @error('slug')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                
                        
                        </div>
                   
                      

                     
                        </div>
                     
                        <div class="form-group mb-4">
                            {{-- <div class="form-check pl-0">
                                <div class="custom-control custom-checkbox checkbox-success">
                                    <input type="checkbox" class="custom-control-input" name="is_active" id="invalidCheck" @if($brand->is_active == 0 )checked @endif>
                                    <label class="custom-control-label" for="invalidCheck">@lang('admin/category.status')</label>
                                  
                                </div>
                            </div> --}}
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