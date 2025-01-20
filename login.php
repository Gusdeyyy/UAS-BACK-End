<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
            color: #ffffff;
            font-family: 'Roboto', sans-serif;
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

        .login-container {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            text-align: center;
            width: 100%;
            max-width: 400px;
            animation: containerFadeIn 2s ease;
        }

        @keyframes containerFadeIn {
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
            margin-bottom: 20px;
            font-weight: 500;
            animation: textPulse 2s infinite;
        }

        @keyframes textPulse {
            0%, 100% {
                text-shadow: 0 0 5px #ffffff, 0 0 10px #6a11cb;
            }
            50% {
                text-shadow: 0 0 10px #ffffff, 0 0 20px #2575fc;
            }
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 14px;
            font-weight: 300;
            text-align: left;
        }

        input[type="text"], input[type="password"] {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            color: #ffffff;
            outline: none;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            transform: scale(1.02);
        }

        input[type="submit"] {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 8px;
            color: #ffffff;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            animation: buttonGlow 3s infinite alternate;
        }

        @keyframes buttonGlow {
            0% {
                box-shadow: 0 0 10px #6a11cb;
            }
            100% {
                box-shadow: 0 0 20px #2575fc;
            }
        }

        input[type="submit"]:hover {
            background: linear-gradient(90deg, #2575fc, #6a11cb);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            opacity: 0.8;
            animation: footerFadeIn 3s ease;
        }

        @keyframes footerFadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 0.8;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Selamat Datang</h1>
        <form action="loginact.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <input type="submit" value="Login">
        </form>
        <div class="footer">&copy; copyright 2025 By GusDe</div>
    </div>
</body>
</html>
