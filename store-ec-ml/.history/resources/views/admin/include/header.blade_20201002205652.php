<!DOCTYPE html>
<html lang="en" {{app()->getLocale() ==="en"?'ltr':'rtl'}}>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('asset/admin/assets/img/favicon.ico')}}" />
    <link href="{{asset('asset/admin/assets/'.getFolder().'/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('asset/admin/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('asset/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/admin/assets/'.getFolder().'/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('asset/admin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset/admin/assets/'.getFolder().'/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/admin/assets/'.getFolder().'/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/admin/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <!-- font awsom pro  -->
        <link href="{{asset('asset/fontawesome-pro/css/all.min.css')}}" rel="stylesheet">
        <script src="{{asset('asset/fontawesome-pro/js/all.min.js')}}"></script>
    <!-- end fontawsom -->
  
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    


</head>