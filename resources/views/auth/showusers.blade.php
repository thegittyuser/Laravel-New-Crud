<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
</head>

<body>

    @if ($users->isEmpty())
        <strong>No Records Found!</strong>
    @else
        <center>
            <table border="1">
                <tr>
                    <th colspan="6">User Records</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->phone }}</td>
                        <td><a href="#">Edit Record</a></td>
                        <td><a href="#">Delete Record</a></td>
                    </tr>
                @endforeach
            </table>
        </center>
    @endif


</body>

</html>