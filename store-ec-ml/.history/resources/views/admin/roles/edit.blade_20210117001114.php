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
                <form class="needs-validation" novalidate action="" method="post">
                    @csrf
                        <div class="form-row">
                     
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">اسم الصلاحية </label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old()  }}"  name="name" required>
                                @error('name')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                        
                        
                        </div>
                   
                      

                        <div class="form-row">
                            @foreach(config('global.permissions') as $name=>$value)
                            <div class="form-group col-sm-4">
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="chk-box" name="permissions[]" value="{{ $name }}">  {{ $value }}
                                </label>
                            </div>
                            @endforeach
                            @error('permissions.0')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                            <div class="valid-feedback">
                             
                            </div>                     
                        </div>
                        <div class="form-group mb-4">
                            @include('admin.include.alert.error_alert')
                            @include('admin.include.alert.success_alert')
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