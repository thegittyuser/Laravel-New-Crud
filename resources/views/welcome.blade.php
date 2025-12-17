<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

    <!-- Optional Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .btn-custom {
            min-width: 180px;
            margin: 8px;
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">

            <!-- Heading -->
            <h1 class="mb-4">
                Laravel User Registration & Login System With CRUD
            </h1>

            <!-- Buttons -->
            <div class="d-flex flex-column align-items-center">

                <a href="{{ route('register') }}" class="btn btn-primary btn-custom">
                    Register
                </a>

                <a href="{{ route('login') }}" class="btn btn-success btn-custom">
                    Login
                </a>

                <a href="{{ route('showusers') }}" class="btn btn-info btn-custom">
                    Show Users
                </a>

                <a href="{{ route('update') }}" class="btn btn-warning btn-custom">
                    Edit Record
                </a>

                <a href="{{ route('delete') }}" class="btn btn-danger btn-custom">
                    Delete Record
                </a>

            </div>
        </div>
    </div>

</body>

</html>