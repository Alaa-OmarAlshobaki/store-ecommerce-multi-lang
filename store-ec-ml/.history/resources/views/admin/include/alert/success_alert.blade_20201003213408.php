@if (Session::has('success'))
    

<strong class="text-danger">{{Session::get('success')}}</strong>

@endif