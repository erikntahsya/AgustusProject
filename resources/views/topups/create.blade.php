<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Top-Up - Futuristic</title>
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

        label {
            color: #ffd700;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ffd700;
            border-radius: 50px;
            background: #333;
            color: #fff;
            margin-bottom: 20px;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #ffc107;
            box-shadow: 0 0 10px #ffd700;
        }

        button {
            background: #ffd700;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            color: #000;
            cursor: pointer;
            font-size: 1.2em;
            transition: background 0.3s, transform 0.3s;
            display: block;
            margin: 0 auto;
        }

        button:hover {
            background: #ffc107;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create New Top-Up</h1>
        <form action="{{ route('topups.store') }}" method="POST">
            @csrf
            <div>
                <label for="user_name">User Name</label>
                <input type="text" name="user_name" required>
            </div>
            <div>
                <label for="game_name">Game Name</label>
                <input type="text" name="game_name" required>
            </div>
            <div>
                <label for="amount">Amount</label>
                <input type="number" name="amount" required>
            </div>
            <div>
                <label for="status">Status</label>
                <input type="text" name="status" required>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
