<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}" type="image/x-icon" />

    <!---CSS Y JS-->
    <link rel="stylesheet" href="{{URL::asset('assets/css/form.css')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Fiwoo - Enterprise Account</title>
</head>
<body>
    <div class="container">
      <form >
        <p>Fiwoo Enterprise</p>
        <input type="text" placeholder="Username" name="user"><br>
        <input type="email" placeholder="Email" name="email"><br>
        <input type="password" placeholder="Password" name="pass"><br>
        <input type="button" value="Cuenta"><br>
        <a href="{{url('en')}}" class="back">Go back</a>
      </form>

      <div class="drops">
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
      </div>
    </div>

</body>
</html>
