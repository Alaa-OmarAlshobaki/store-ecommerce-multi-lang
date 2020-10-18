@if (Session::has('fail'))
    

<strong>Warning! {{Session::get('fail')}}</strong>

@endif