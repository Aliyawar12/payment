<!DOCTYPE html>
<html>
<head>
    <title>Payment Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #5bc0de; /* Blue color for success */
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Success</h1>
        <p>{{ $message }}</p>
    </div>
</body>
</html>
