<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Futuristic</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            background: linear-gradient(45deg, #1d2b64, #f8cdda, #1d2b64);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        h1 {
            text-align: center;
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffd700;
            margin-bottom: 30px;
        }

        form {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        label {
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ffd700;
            border-radius: 50px;
            background: #333;
            color: #fff;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #ffc107;
            box-shadow: 0 0 10px #ffd700;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 50px;
            background: #ffd700;
            color: #000;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        button:hover {
            background: #ffc107;
            transform: scale(1.1);
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700;
            text-decoration: none;
            transition: color 0.3s, text-shadow 0.3s;
        }

        .register-link a:hover {
            color: #ffc107;
            text-shadow: 0 0 20px #ffd700;
        }

        ul {
            margin-top: 20px;
            color: #ff6347;
            text-shadow: 0 0 10px #ff6347;
        }
    </style>
</head>
<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h1>Login</h1>
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="/registerr">Register here</a></p>
        </div>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
