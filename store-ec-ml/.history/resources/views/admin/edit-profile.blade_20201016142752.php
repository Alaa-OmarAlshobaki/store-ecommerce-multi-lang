@extends('admin.layout')
@section('content')
     <!--  BEGIN CONTENT AREA  -->
     <div id="content" class="main-content">
        <div class="layout-px-spacing">                
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="general-info" action="{{route('update.profile')}}" class="section general-info" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="info">
                                        <h6 class="">General Information</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$admin->id}}">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <input type="file" id="input-file-max-fs" class="dropify" data-default-file="{{asset('asset/admin/assets/img/200x200.jpg')}}" data-max-file-size="2M" />
                                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                    <label for="fullName">Full Name</label>
                                                                    <input type="text" class="form-control mb-4" name="name" id="fullName" placeholder="" value="{{$admin->name}}">
                                                                    @error('name')
                                                                    <p class="text-danger text-center">{{$message}}</p>
                                                                    @enderror
                                                                </div>
                                                                </div>
                                                                {{-- <div class="col-sm-6">
                                                                    <label class="dob-input">Date of Birth</label>
                                                                    <div class="d-sm-flex d-block">
                                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" value="Jimmy Turner"> 
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                                                            <div class="row">
                                                               <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                    <label for="profession">Email</label>
                                                                    <input type="email" class="form-control mb-4" name="email" id="email" placeholder="" value="{{$admin->email}}">
                                                                    </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                     <div class="form-group">
                                                                     <a href="{{route('reset.password')}}" class="stretched-link">Change Password</a>
                                                                     </div>
                                                                </div>
                                                             </div>
                                                             <div class="row">
                                                                 <div class="col-sm-6">
                                                                     <div class="form-group">
                                                                        <button id="multiple-messages" type="submit" class="btn btn-primary">Save Changes</button>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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