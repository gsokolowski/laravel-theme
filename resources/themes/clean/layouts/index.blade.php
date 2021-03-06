<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ setting('site.title') }} @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/css/clean-blog.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <link href="/css/slider-reset.css" rel="stylesheet">
    <link href="/css/slider-style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    @include('theme::partials.navigation')

    <!-- Page Header -->
    @yield('header')

    <!-- Main Content -->
    <div class="container">
      @yield('content')
    </div>

    <hr>

    <!-- Footer -->
    @include('theme::partials.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/clean-blog.min.js"></script>
    <!-- main.js for slider-->
    <script src="/js/slider-main.js"></script>

  </body>

</html>
