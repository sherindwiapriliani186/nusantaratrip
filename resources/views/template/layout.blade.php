<!DOCTYPE html>
<html lang="en">
<!-- memanggil semua yang dipisah(foter dll) -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2</title>
    <link rel="stylesheet" type="text/css" href="profil.css">
</head>

<body>

    @include('template.switch')

    <div class="container">

        @include('template.header')

        @include('template.midbar')

        @include('template.sidebar-right')

        @include('template.sidebar-left')

        @yield('content')

        @include('template.footer')

    </div>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>