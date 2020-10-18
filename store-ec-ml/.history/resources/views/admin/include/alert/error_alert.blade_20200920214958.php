@if (Session::has('fail'))
    

<strong class="text">Warning! {{Session::get('fail')}}</strong>

@endif