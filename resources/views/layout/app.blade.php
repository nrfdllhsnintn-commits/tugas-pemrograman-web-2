<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PendakiRent')</title>
</head>

<body>
    @include('components.navbar')


    <div class="container">
        @yield('content')
    </div>

</body>

</html>
