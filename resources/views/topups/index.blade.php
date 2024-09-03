<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-Ups - Futuristic</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            background: #0d0d0d;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffd700;
            text-align: center;
            margin-top: 50px;
        }

        form {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        input[type="text"] {
            border: 2px solid #ffd700;
            border-radius: 50px;
            padding: 10px 20px;
            width: 300px;
            margin-right: 10px;
            background: #333;
            color: #fff;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus {
            border-color: #ffc107;
            box-shadow: 0 0 10px #ffd700;
        }

        button {
            background: #ffd700;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            color: #000;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        button:hover {
            background: #ffc107;
            transform: scale(1.1);
        }

        a.btn-primary {
            background: #ffd700;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            color: #000;
            text-decoration: none;
            margin: 10px 0;
            transition: background 0.3s, transform 0.3s;
            display: inline-block;
        }

        a.btn-primary:hover {
            background: #ffc107;
            transform: scale(1.1);
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #1a1a1a;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ffd700;
        }

        th {
            background: #333;
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700;
        }

        td {
            background: #2a2a2a;
        }

        tr:nth-child(even) {
            background: #1c1c1c;
        }

        tr:hover {
            background: #333;
        }

        .message {
            text-align: center;
            color: #ffd700;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>
        <!-- Navigation atau header lainnya dapat ditambahkan di sini -->
    </header>

    <main>
        <h1>Top-Ups</h1>

        <form method="GET" action="{{ route('topups.index') }}">
            <input type="text" name="search" placeholder="Search..." value="{{ request()->query('search') }}">
            <button type="submit">Search</button>
        </form>

        <div style="text-align: center;">
            <a href="{{ route('reports') }}" class="btn btn-primary">Go to Reports</a>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
            <a href="{{ route('topups.create') }}" class="btn btn-primary">Create New Top-Up</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="logout">Logout</button>
            </form>
        </div>

        @if ($message = Session::get('success'))
            <p class="message">{{ $message }}</p>
        @endif

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Game Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topUps as $topUp)
                <tr>
                    <td>{{ $topUp->id }}</td>
                    <td>{{ $topUp->user_name }}</td>
                    <td>{{ $topUp->game_name }}</td>
                    <td>{{ $topUp->amount }}</td>
                    <td>{{ $topUp->status }}</td>
                    <td>
                        <a href="{{ route('topups.show', $topUp->id) }}">Show</a>
                        <a href="{{ route('topups.edit', $topUp->id) }}">Edit</a>
                        <form action="{{ route('topups.destroy', $topUp->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <footer>
        <!-- Footer atau elemen tambahan lainnya dapat ditambahkan di sini -->
    </footer>

</body>
</html>
