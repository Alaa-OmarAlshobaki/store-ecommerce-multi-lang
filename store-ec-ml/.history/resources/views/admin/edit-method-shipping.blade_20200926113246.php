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
    @method('PUT')

        <div class="form ">
            <div class="col-md-4 mb-4 ">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder=""  required>
             
            </div>
            <div class="col-md-4 mb-4">
                <label for="validationCustom02">Last name</label>
                <input type="number" class="form-control" id="validationCustom02" placeholder=""  required>
              
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-check pl-0">
                    <div class="custom-control custom-checkbox checkbox-success">
                        <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                        <label class="custom-control-label" for="invalidCheck">Status</label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
    </form>
</div>
</div>
@endsection