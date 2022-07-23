<!doctype html>
<html lang="en">

<!-- head -->
@include('artikel/template/head')

<body>
    <!-- navbar -->
    @include('artikel/template/navbar')

    @yield('content')

    <!-- javascript -->
    @include('artikel/template/javascript')
</body>

</html>