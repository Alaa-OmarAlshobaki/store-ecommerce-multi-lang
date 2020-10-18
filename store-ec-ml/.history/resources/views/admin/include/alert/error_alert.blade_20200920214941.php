@if (Session::has('fail'))
    

<strong>Warning!</strong> {{Session::get('fail')}}

@endif