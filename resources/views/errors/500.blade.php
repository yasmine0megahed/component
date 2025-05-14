<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Maintenance</title>
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/acmaicon.ico">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            min-height: 100vh;
            ;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .maintenance-container {
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .icon {
            font-size: 5rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .progress-container {
            width: 100%;
            height: 8px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            margin: 30px 0;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            width: 65%;
            background-color: #fff;
            border-radius: 4px;
            animation: progress 2s ease-in-out infinite;
        }

        @keyframes progress {
            0% {
                width: 65%;
            }

            50% {
                width: 75%;
            }

            100% {
                width: 65%;
            }
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .social-link {
            color: #fff;
            font-size: 1.5rem;
            transition: transform 0.3s;
        }

        .social-link:hover {
            transform: translateY(-3px);
        }

        .contact {
            margin-top: 30px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="maintenance-container">
        <div class="icon">🚧</div>
        <h1>We're Making Improvements</h1>
        <p>Our website is currently undergoing scheduled maintenance to bring you an even better experience. We
            apologize for the inconvenience and appreciate your patience.</p>

        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>

        <p>We expect to be back online shortly. Please check back in a little while.</p>

        <div class="social-links">
            <a href="tel:+12024417500" class="social-link">📱</a>
            <a href="mailto:acma@acma.us" class="social-link">📧</a>
        </div>

        <div class="contact">
            Need immediate assistance? call us at <a href="tel:4103494900"
                style="color: #fff; text-decoration: underline;">(202) 441-7500</a>
        </div>
    </div>
</body>

</html>
