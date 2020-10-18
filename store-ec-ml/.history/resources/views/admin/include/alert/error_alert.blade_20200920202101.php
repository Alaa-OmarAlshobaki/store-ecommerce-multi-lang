@if(Session::has('error'))
<strong class="text-danger">Error ! {{Seesion::get('error')}}</strong> 
@endif