@if(Session::has('fail'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>{{Session::get }}</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div>
@endif