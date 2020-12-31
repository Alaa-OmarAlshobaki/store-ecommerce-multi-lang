@include('home.include.header')
<body class="home">
  <div id="wrap">
     @include('home.include.menue')
      <!--header-->

      @include('home.include.slidr')
      <!--banner-->

@yield('content')

  @include('home.include.footer')
  
