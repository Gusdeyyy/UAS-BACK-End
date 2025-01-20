<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Elegant</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
            font-family: 'Roboto', sans-serif;
            color: #ffffff;
            animation: backgroundAnimation 5s infinite alternate;
        }

        @keyframes backgroundAnimation {
            0% {
                background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
            }
            100% {
                background: linear-gradient(135deg, #2c2c2c, #1e1e1e);
            }
        }

        .logout-message {
            text-align: center;
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            animation: fadeIn 2s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            animation: textGlow 2s infinite alternate;
        }

        @keyframes textGlow {
            0% {
                text-shadow: 0 0 5px #ffffff, 0 0 10px #6a11cb;
            }
            100% {
                text-shadow: 0 0 10px #ffffff, 0 0 20px #2575fc;
            }
        }

        p {
            font-size: 16px;
            margin: 0;
        }

        .redirect {
            margin-top: 20px;
            font-size: 14px;
            color: #6a11cb;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .redirect:hover {
            color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="logout-message">
        <h1>Anda telah Logout</h1>
        <p>Terima kasih telah menggunakan Layanan kami.</p>
        <a class="redirect" href="login.php">Kembali ke Login</a>
        <a class="redirect" href="datatranskrip.php">Kembali ke Halaman</a>
    </div>
</body>
</html>

<?php

session_start();
session_destroy();

