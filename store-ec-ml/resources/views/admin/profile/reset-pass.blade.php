@extends('admin.layout-login')
@section('content')
<div class="form-container outer">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <h1 class="">Reset Password</h1>
                    <p class="signup-link recovery">Enter your email and instructions will sent to you!</p>
                    @include('admin.include.alert.error_alert')
                    @include('admin.include.alert.success_alert')
                <form class="text-left" method="post" action="{{route('update.password')}}">
                    @csrf
                    @method('PUT')
                        <div class="form">

                            <div id="email-field" class="field-wrapper input">
                                <div class="d-flex justify-content-between">
                                    <label for="email">EMAIL</label>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                            <input id="email" name="email" type="text" class="form-control" value="{{$admin->email}}" placeholder="Email" disabled>
                            </div>
                            <div id="email-field" class="field-wrapper input">
                                <div class="d-flex justify-content-between">
                                    <label for="email">Old Password</label>
                                </div>
                                <i class="fal fa-lock-alt mt-3"></i>
                                <input id="old" name="oldPass" type="password" class="form-control" value="" placeholder="Old Password">
                                @error('oldPass')
                                <p class="text-danger text-center">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <div id="email-field" class="field-wrapper input">
                                <div class="d-flex justify-content-between">
                                    <label for="email">Password</label>
                                </div>
                                <i class="fal fa-lock-alt mt-3"></i>
                                 <input id="password" name="password" type="password" class="form-control" value="" placeholder="New Password">
                                 @error('password')
                                 <p class="text-danger text-center">{{$message}}</p>
                                 @enderror
                            </div>
                            <div id="email-field" class="field-wrapper input">
                                <div class="d-flex justify-content-between">
                                    <label for="email">Confirm Password</label>
                                </div>
                                <i class="fal fa-lock-alt mt-3"></i>
                                <input id="confirm" name="password_confirmation" type="password" class="form-control" value="" placeholder="Confirm Password">
                                @error('password_confirmation')
                                <p class="text-danger text-center">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="d-sm-flex justify-content-between">

                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" value="">Reset</button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>                    
            </div>
        </div>
    </div>
</div>
@endsection