@if (Session::has('success'))
    

<strong class="text-danger">Warning! {{Session::get('success')}}</strong>

@endif