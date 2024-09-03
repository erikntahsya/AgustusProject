<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - EFDG Top-Up</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            background: #0d0d0d url('futuristic-bg-pattern.jpg') repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-form {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
        }

        .register-form h2 {
            text-align: center;
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffd700;
            margin-bottom: 30px;
        }

        .register-form label {
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700;
        }

        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ffd700;
            border-radius: 50px;
            background: #333;
            color: #fff;
            transition: border 0.3s, box-shadow 0.3s;
        }

        .register-form input[type="text"]:focus,
        .register-form input[type="email"]:focus,
        .register-form input[type="password"]:focus {
            border-color: #ffc107;
            box-shadow: 0 0 10px #ffd700;
        }

        .register-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 50px;
            background: #ffd700;
            color: #000;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .register-form button:hover {
            background: #ffc107;
            transform: scale(1.1);
        }

        .register-form .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-form .login-link a {
            color: #ffd700;
            text-decoration: none;
            transition: color 0.3s;
        }

        .register-form .login-link a:hover {
            color: #ffc107;
        }
    </style>
</head>

<body>
    <form action="/register" method="POST" class="register-form">
        @csrf
        <h2>Register</h2>
        <div>
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="no tlp">No Tlp</label>
            <input type="number" name="no tlp" id="no tlp" required>
        </div>
        <div>
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat" required>
        </div>
        <div>
            <label>Level</label>
            <select name="level" required>
                <option value="pelanggan">pelanggan</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
        <div class="login-link">
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </form>

    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
