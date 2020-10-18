@if(Session::has(''))
<strong class="text-danger">Error ! {{Seesion::get('error')}}</strong> 
@endif