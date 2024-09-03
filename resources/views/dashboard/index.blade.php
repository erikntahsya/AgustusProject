<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Futuristic</title>
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
        a {
            color: #ffd700;
            font-size: 1.2em;
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid #ffd700;
            border-radius: 50px;
            transition: background 0.3s, color 0.3s;
            margin-top: 20px;
            text-align: center;
        }

        a:hover {
            background: #ffd700;
            color: #000;
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

        h2 {
            color: #ffd700;
            text-shadow: 0 0 5px #ffd700;
            text-align: center;
        }

        h3 {
            color: #ffd700;
            text-shadow: 0 0 5px #ffd700;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: #2a2a2a;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: background 0.3s;
        }

        li:hover {
            background: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <div>
            <h2>Total Top-Ups: {{ $totalTopUps }}</h2>
        </div>
        <div>
            <h3>Recent Top-Ups</h3>
            <ul>
                @foreach ($recentTopUps as $topUp)
                    <li>{{ $topUp->user_name }} - {{ $topUp->amount }} - {{ $topUp->created_at }}</li>
                @endforeach
            </ul>
        </div>
        
        <a href="{{ route('topups.index') }}">Back to List</a>  
    </div>
</body>
</html>
