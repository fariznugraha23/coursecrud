<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home Page</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('public/test/img/mdb-favicon.ico')}}" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('public/test/css/mdb.rtl.min.css')}} " /> 
    <link rel="stylesheet" href="{{ asset('public/test/css/mdb.dark.rtl.min.css')}} " /> 
    <link rel="stylesheet" href="{{ asset('public/test/css/mdb.dark.min.css')}} " /> 
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('public/test/css/mdb.min.css')}}" />
  </head>
  <body>
      @include('layouts.navbar')
      @yield('content')
      
    <!-- Start your project here-->
    
    <!-- End your project here-->
    @include('layouts.footer')
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('public/test/js/mdb.min.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
