<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <div>
            @include('User.sidebar')
        </div>
        <div>
            @include('General.header')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>