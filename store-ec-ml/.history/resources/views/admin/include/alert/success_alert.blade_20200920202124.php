@if(Session::has('error'))
<strong class="text-">Error ! {{Seesion::get('error')}}</strong> 
@endif