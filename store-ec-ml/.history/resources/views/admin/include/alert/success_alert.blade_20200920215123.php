@if (Session::has(''))
    

<strong class="text-danger">Warning! {{Session::get('fail')}}</strong>

@endif