<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <h1>Welcome {{ Auth()->User()->username }}</h1>

    <form action="{{ route("logout") }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>

</html>