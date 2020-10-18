@if (Session::has('fail'))
    

<strong class="text-danger">Warning! {{Session::get('fail')}}</strong>

@endif