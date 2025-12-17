<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>

<body>

    <form action="{{ route(name: 'doupdate') }}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="password">Password (Optional): </label>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="phone">Phone: </label>
        <input type="tel" name="phone" id="phone">
        <br><br>
        <input type="submit" value="Update Record">
    </form>

</body>

</html>