<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>RMG | Setara Group</title>

    <!-- Css -->
    @include('auth/components/css')
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Css -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Preloader -->
    @yield('preloader')

    <!-- Navbar -->
    @include('frontend/components/navbar')
    <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
    @yield('content')
  <!-- /.content-wrapper -->
   

  <!-- Main Footer -->
  @include('frontend/components/chat')
  @yield('footer')
</div>
<!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
        @include('auth/components/js')
    <!-- REQUIRED SCRIPTS -->
    @auth
    <script>
        window.Laravel = {
            auth: @json(auth()->check() ? auth()->user() : null),
            csrfToken: "{{ csrf_token() }}"
        };
    </script>
    @endauth
</body>
</html>
