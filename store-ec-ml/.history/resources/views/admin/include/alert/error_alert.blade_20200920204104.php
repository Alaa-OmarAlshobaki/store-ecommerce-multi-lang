@if(Session::has('fail'))
<strong class="text-danger">Error ! {{Seesion::get('fail')}}</strong> 
@endif