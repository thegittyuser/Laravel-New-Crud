<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .dashboard-card {
            background: #ffffff;
            width: 100%;
            max-width: 500px;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .dashboard-card h1 {
            margin-bottom: 25px;
            color: #1f2937;
        }

        .username {
            color: #4f46e5;
        }

        .logout-btn {
            padding: 14px 26px;
            background: #ef4444;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .logout-btn:hover {
            background: #dc2626;
            transform: translateY(-1px);
        }

        @media (max-width: 480px) {
            .dashboard-card {
                padding: 25px;
            }

            .dashboard-card h1 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard-card">
        <h1>
            Welcome
            <span class="username">{{ Auth()->user()->username }}</span>
        </h1>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="logout-btn" type="submit">
                Logout
            </button>
        </form>
    </div>

</body>

</html>