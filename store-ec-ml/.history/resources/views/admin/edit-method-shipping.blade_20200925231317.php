@extends('admin.layout')
@section('content')
<div class="statbox widget box box-shadow mt-5">
    <div class="widget-header">
        <div class="row mt-3">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-center">Edit Method Shipping</h4>
            </div>                 
        </div>
    </div>
<div class="widget-content widget-content-area ">                                
<form class="needs-validation" novalidate action="{{route('method.shipping.update',$shipping->id)}}" method="PUT">
    @csrf
    @met

        <div class="form d-flex justify-content-center">
            <div class="col-md-4 mb-4 ">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Shaun" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <label for="validationCustom02">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Park" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <label for="validationCustomUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
        </div>
      
        <div class="form-group mb-4">
            <div class="form-check pl-0">
                <div class="custom-control custom-checkbox checkbox-success">
                    <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                    <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
    </form>
</div>
</div>
@endsection