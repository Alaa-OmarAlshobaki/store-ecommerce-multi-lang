@if(Session::has('fail'))
<strong class="text-danger">Error ! {{Seesion::get('fild')}}</strong> 
@endif