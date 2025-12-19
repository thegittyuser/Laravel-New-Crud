<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #f3f4f6;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px 18px;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .success.hide {
            opacity: 0;
            transform: translateY(-10px);
        }

        h2 {
            text-align: left;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 14px;
            text-align: left;
        }

        th {
            background: #4f46e5;
            color: #fff;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background: #f9fafb;
        }

        tr:hover {
            background: #eef2ff;
        }

        .actions a {
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
        }

        .delete-btn {
            background: #ef4444;
            border: none;
            color: #fff;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background: #dc2626;
        }

        /* ---------- Mobile View ---------- */
        @media (max-width: 768px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                background: #fff;
                margin-bottom: 16px;
                border-radius: 10px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
                padding: 12px;
            }

            td {
                display: flex;
                justify-content: space-between;
                padding: 10px 0;
                border-bottom: 1px solid #e5e7eb;
            }

            td:last-child {
                border-bottom: none;
            }

            td::before {
                content: attr(data-label);
                font-weight: bold;
                color: #555;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        @if ($users->isEmpty())
            <strong>No Records Found!</strong>
        @else
            <h2>User Records</h2>

            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td data-label="Username">{{ $user->username }}</td>
                            <td data-label="Email">{{ $user->email }}</td>
                            <td data-label="Phone">{{ $user->phone }}</td>

                            <td data-label="Edit" class="actions">
                                <a href="{{ route('update', $user->id) }}">Edit</a>
                            </td>

                            <td data-label="Delete">
                                <form action="{{ route('delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="delete-btn" type="submit" onclick="return confirm('Are you sure?');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <br>
        @if (session('success'))
            <div class="success" id="successMessage">
                {{ session('success') }}
            </div>
        @endif

    </div>

    <!-- AUTO HIDE SUCCESS MESSAGE -->
    <script>
        const successMessage = document.getElementById( 'successMessage' );

        if ( successMessage ) {
            setTimeout( () => {
                successMessage.classList.add( 'hide' );
            }, 3000 ); // 3 seconds

            setTimeout( () => {
                successMessage.remove();
            }, 3500 );
        }
    </script>

</body>

</html>