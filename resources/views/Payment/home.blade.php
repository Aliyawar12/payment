<!DOCTYPE html>
<html>
<head>
    <title>PayPal Payment</title>
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
            background-color: #b3d6f7;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            width: 94%;
        }

        button {
            padding: 10px;
            background-color: #0070ba;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #005f9e;
        }

        .footer {
            margin-top: 20px;
            padding: 10px;
            background-color: #d9e8f5;
            border-top: 1px solid #ccc;
        }

        .footer form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .footer input[type="email"] {
            padding: 10px;
            width: 70%;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .footer button {
            background-color: #28a745;
        }

        .footer button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PayPal Payment Integration</h1>
        <form action="{{ route('payment') }}" method="POST">
            @csrf
            <input type="text" name="amount" placeholder="Enter Amount" required>
            <button type="submit">Pay with PayPal</button>
        </form>
        <div class="footer">
            <form action="{{ route('email.route') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>
</body>
</html>
