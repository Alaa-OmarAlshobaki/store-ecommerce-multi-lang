@extends('admin.layout')
@section('content')
<div class="text-center">
  @include('admin.include.alert.error_alert')
  @include('admin.include.alert.success_alert')
</div>
<div class="statbox widget box box-shadow mt-5 ">

    <div class="row mb-4 mt-3">
        <div class="col-sm-3 col-12">
            <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              {{-- <a class="nav-link active mb-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
              <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a> --}}
            <a class="nav-link mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#shipping-method" role="tab" aria-controls="v-pills-messages" aria-selected="false">{{__('admin/setting.Sipping_Method')}}</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
            </div>
        </div>
    
        <div class="col-sm-9 col-12">
   
            <div class="tab-content" id="v-pills-tabContent">
              {{-- <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <h4 class="mb-4">We move your world!</h4>
                <p class="mb-4">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                </p>
    
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="media">
                    <img class="mr-3" src="assets/img/90x90.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </div>
              </div> --}}
              <div class="tab-pane fade" id="shipping-method" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="widget-content widget-content-area">  
                    <div class="widget-header">
                        <div class="row mt-3">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4 class="text-center">{{__('admin/setting.Edit_Method_Shipping')}}</h4>
                            </div>                 
                        </div>
                    </div>                              
                    <form class="needs-validation" novalidate action="{{route('method.shipping.update',$shipping->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                    
                            <div class="form  ">
                                <div class="col-md-4 mb-4  ">
                                <input type="text" value="{{$shipping->id}}" name="id" class="form-control"> 
                                <label for="validationCustom01">{{__('admin/setting.Method_name')}}</label>
                                    <input type="text" class="form-control" name="value" id="validationCustom01" placeholder="" value="{{$shipping->value}}"  required>
                                 @error('value')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                     
                             
                                </div>
                                <div class="col-md-4 mb-4">
                                <label for="validationCustom02">{{__('admin\setting.Value')}}</label>
                                    <input type="number" name="plain_value" class="form-control" id="validationCustom02" value="{{$shipping->plain_value}}" placeholder=""  required>
                                    @error('plain_value')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                           
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Submit form</button>
                        </form>
                    </div>
              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <blockquote class="blockquote">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                </blockquote>
              </div>
            </div>
        </div>
    </div>

</div>
@endsection