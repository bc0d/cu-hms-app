<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            width: 100%;
            padding: 20px;
            background-color: #f8f9fa;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .content {
            max-width: 700px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-image: url('{{ asset('data/Images/mail.jpg') }}');
            background-size: cover;
            position: relative;
        }
        .card-body {
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;

        }
        .otp-code {
            font-size: 2rem;
            font-weight: bold;
            color: #d9232d;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
        .app {
            color: #606370;
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .details {
            background-color: whitesmoke;
            padding: 1rem;
            border-radius: 6px;
            text-align: center;
            width: 50%;
        }
        .msg {
            color: #606370;
        }

        .link {
            background: #d9232d;
            border: 0;
            padding: 10px 24px;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;

        }

        .link:hover {
            background: #e24d55;
        }

        

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card-body">
                <div class="app">CU-HOSTEL</div>
                <div class="details">
                    <h4>Password Reset Link</h4>
                    <a class="link" href="{{ url('http://127.0.0.1:8000/forgot/reset/'.$key) }}">Reset Password</a>
                    <p class="msg">Link will expire in 24 Hours.</p>
                </div>
                <p>Please use this link to reset your password.</p>
            </div>
        </div>
        <div class="footer">
            <div>&copy; Copyright <strong><span>ARM</span></strong>. All Rights Reserved</div>
            <div>Developed by <a href="#">ARM</a></div>
        </div>
    </div>
</body>
</html>
