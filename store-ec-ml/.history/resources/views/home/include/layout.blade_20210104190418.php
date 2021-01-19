@include('home.include.header')
<body class="home">
  <div id="wrap">
     @include('home.include.menue')
      <!--header-->

      <!--banner-->

@yield('content')
@yield('script')
@include('home.include.footer')

  
