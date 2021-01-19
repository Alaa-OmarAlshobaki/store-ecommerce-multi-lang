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
                <form class="needs-validation" novalidate action="{{ route('store-control-user') }}" method="post">
                    @csrf
                        <div class="form-row">
                     
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">name </label>
                            <input type="text" class="form-control" id="validationCustom01" value="{{ $admin->name }}" placeholder=""  name="name" required>
                                @error('name')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">email </label>
                            <input type="email" class="form-control" id="validationCustom01" placeholder="" value={{ $admin->email }}  name="email" required>
                                @error('email')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                        
                        
                        </div>
                   
                      

                        <div class="form-row">
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">password </label>
                            <input type="password" class="form-control" id="validationCustom01" value="{{ $admin->password }}" placeholder=""  name="password" required>
                                @error('password')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">confirm password </label>
                            <input type="password" class="form-control" id="validationCustom01" placeholder=""  name="password_confirmation" required>
                                @error('password_confirmation')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">Roles</label>
                                <select class="form-control tagging" name="role_id"
                                    >
                                    @isset($role)
                                    @foreach($role as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                    @endisset


                                </select>
                                @error('role_id')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                                <div class="valid-feedback">

                                </div>
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