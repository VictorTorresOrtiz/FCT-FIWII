<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiwii Accounts</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/auth.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            @yield('login')
            @yield('register')
        </div>
    </div>
    </div>
    </div>
</body>
</html>
