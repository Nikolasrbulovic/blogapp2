<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.heading')
    <title>Document</title>
</head>
<body>
    @include('layout.header')

    @yield('content')

    @include('layout.footer')
</body>
</html>