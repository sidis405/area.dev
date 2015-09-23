<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">   
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>@yield('title', 'Areea')</title>

    <!-- Author -->
    <link type="text/plain" rel="author" href="/humans.txt" />   
    
    <link rel="stylesheet" href="/styles/vendor.css">

    <!-- Favicons -->     
    @include('layouts.favicons')
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/styles/style.css">

    <script src="/scripts/modernizr.js"></script>

    @yield('header_scripts')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="top">

    
    @include('layouts.header')

    <div class="main container">

    @yield('content')
    
    </div> <!-- end of main container -->

    
    @yield('footer')
 
  
    <script src="/scripts/vendor.js"></script>

    <script src="/scripts/main.js"></script>

    @yield('footer_scripts')
    
  </body>
</html>
