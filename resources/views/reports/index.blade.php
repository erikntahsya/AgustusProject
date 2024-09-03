<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Reports - Futuristic</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ffd700;
        }

        th {
            background: #333;
            color: #ffd700;
        }

        tr:nth-child(even) {
            background: #2a2a2a;
        }

        tr:hover {
            background: #333;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Monthly Reports</h1>
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monthlyReports as $report)
                <tr>
                    <td>{{ $report->month }}</td>
                    <td>{{ $report->total_amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('topups.index') }}">Back to List</a>
    </div>
</body>
</html>
