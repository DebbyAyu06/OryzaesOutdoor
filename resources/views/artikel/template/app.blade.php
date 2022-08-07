<!doctype html>
<html lang="en">

<!-- head -->
@include('sb-admin/head')

<body id="page-top">
    <!-- navbar -->
    @include('artikel/template/navbar')

    @yield('content')

    <!-- Scroll to Top Button-->
    @include('sb-admin/button-topbar')

    <!-- javascript -->
    @include('sb-admin/javascript')
</body>

</html>
