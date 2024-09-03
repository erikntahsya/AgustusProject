<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction - Futuristic</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            background: #0d0d0d;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 400px;
        }

        label {
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ffd700;
            border-radius: 50px;
            background: #333;
            color: #fff;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input:focus,
        select:focus {
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
    </style>
</head>
<body>
    <form action="{{ route('transaction.store') }}" method="POST">
        @csrf
        <h1 class="text-center">Complete Your Transaction</h1>
        <div>
            <label for="id_game">Game ID</label>
            <input type="text" name="id_game" id="id_game" required>
        </div>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" required>
        </div>
       
        <div>
            <label for="payment_method">Payment Method</label>
            <select name="payment_method" id="payment_method" required>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank_transfer">Bank Transfer</option>
            </select>
        </div>
        <button type="submit">Complete Transaction</button>
    </form>
</body>
</html>
