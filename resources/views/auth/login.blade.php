<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>



    <form action="{{ route('dologin') }}" method="POST">
        @csrf
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
    <br><br>

    @if ($errors->any())
        <b>{{ $errors->first() }}</b>
    @endif

</body>

</html>