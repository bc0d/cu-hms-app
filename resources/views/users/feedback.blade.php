<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Notification Page" />
    <meta name="keywords" content="Frontend Mentor, Notification Page , nehal, Responsive Designs" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png" />
    <title>Notification Page</title>
    <!-- Linking Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-CpVOKHzlH5rYo3obHdbT5U5lcv+W4Hkof8K7wOUuk9eQD9HPqG61onA5X0WfwL1cnqYVVo4XgWuSxVR4OlwGtg=="
        crossorigin="anonymous" />
    <style>
        /* Your custom styles here */
        .notification-container {
            margin-top: 20px;
        }

        .notification {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 10px;
            background-color: #e7f3ff;
        }

        .notification-icon img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .notification-message {
            flex: 1;
        }

        .info-message {
            background-color: #e7f3ff;
        }

        .success-message {
            background-color: #d4edda;
        }

        .error-message {
            background-color: #f8d7da;
        }

        .warning-message {
            background-color: #fff3cd;
        }
    </style>
</head>

<body class="mx-auto min-h-screen bg-light">
    <div class="container">
        <div class="notification-container">
            <div class="notification">
                <div class="notification-icon">
                    
                    <img src="{{ asset('users/assets/img/team/team-3.jpg') }}" class="rounded-circle" alt="User Image">
                </div><strong>Gamora</strong>
                <div class="notification-message info-message text-left">This is an informational notification.</div>
            </div>
            <!-- Add more notifications as needed -->
        </div>
    </div>

    <!-- Linking Bootstrap JS Bundle -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
        integrity="sha512-q88hZ9s00PW3E/Wczd/Fo+xD3e8fMVi2HjwCsfzNUKjUMNp/pu4+ts5PtTZ2cNPIHGwKK6ZpqU8md5XOXU4Rqw=="
        crossorigin="anonymous"></script>
</body>

</html>
