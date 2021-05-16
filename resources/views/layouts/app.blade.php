
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('public/assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('public/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('public/assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>
<body>
   
        <main >
            @yield('content')
        </main>
    <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('public/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('public/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('public/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('public/assets/js/argon.js?v=1.2.0')}}"></script>
   <script type="text/javascript" src="https://unpkg.com/web3@1.2.11/dist/web3.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
    <script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>

    <!-- This is our example code -->
    <script type="text/javascript" src="{{asset('public/example.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/.prettierrc.js')}}"></script>
</body>

</html>