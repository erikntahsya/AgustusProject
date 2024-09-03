<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Top-Up - Futuristic</title>
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

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #1a1a1a;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffd700;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            font-size: 1.2em;
            color: #fff;
            margin-bottom: 15px;
        }

        a {
            color: #ffd700;
            font-size: 1.2em;
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid #ffd700;
            border-radius: 50px;
            transition: background 0.3s, color 0.3s;
        }

        a:hover {
            background: #ffd700;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Top-Up Details</h1>
        <p><strong>User Name:</strong> {{ $topup->user_name }}</p>
        <p><strong>Game Name:</strong> {{ $topup->game_name }}</p>
        <p><strong>Amount:</strong> {{ $topup->amount }}</p>
        <p><strong>Status:</strong> {{ $topup->status }}</p>
        <a href="{{ route('topups.index') }}">Back to List</a>
    </div>
</body>
</html>
