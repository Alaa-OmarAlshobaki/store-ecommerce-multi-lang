@if(Session::has('error'))
<strong class="text-successs">Error ! {{Seesion::get('error')}}</strong> 
@endif