@extends('home.include.layout')
@section('content')
<!--  BEGIN CONTENT PART  -->
<main class="main"> 
    <div class="container"> 
        <div class="row sec-padding">
             <div class="col-md-12 col-sm-12">
                 <div class="login-wrap">
                    <div class="bm-30">
                        <span class="icon lh"><i class="icofont icofont-ui-unlock"></i></span>
                        <h3>Login Account</h3>
                        <p>Enter your username and password to login.</p>
                    </div>

                    <form>
                        <div class="form-group">
                            <label>Username / Email <span>*</span></label>
                            <input type="text" placeholder="Your Username / Email">
                        </div>

                        <div class="form-group">
                            <label>Password <span>*</span></label>
                            <input type="password" placeholder="***********">
                        </div>

                        <div class="form-group flx-element">
                            <div class="check-wrap">
                                <input type="checkbox">
                                <label>Remember me</label>
                            </div>

                            <a href="#">Lost Password?</a>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="signup">
                        </div>

                        Don’t have an account yet? <a href="signup.html"><strong>Signup Now!</strong></a> 
                    </form>
                 </div>
             </div>
        </div>              
    </div>  
</main>
<!--main-->
 @endsection