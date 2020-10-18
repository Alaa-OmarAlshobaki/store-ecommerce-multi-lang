@include('admin.include.header')
@include('admin.include.nav')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
@yield('content')
@include('admin.include.footer')