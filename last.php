<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Emoji & Text</title>
    <style>
        body {
            background-color: #0d0d0d;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Emoji animation */
        .emoji {
            font-size: 60px;
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-20px);
            }
        }

        /* Text animation */
        .animated-text {
            font-size: 40px;
            font-weight: bold;
            background: linear-gradient(90deg, #ff0080, #ff8c00, #40e0d0);
            -webkit-background-clip: text;
            color: transparent;
            animation: gradientMove 3s infinite linear;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        /* Blinking effect */
        .blink {
            font-size: 22px;
            color: #ffeb3b;
            margin-top: 20px;
            animation: blinkText 1s infinite;
        }

        @keyframes blinkText {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <h2 class="emoji">😊🔥💥</h2>
    <h1 class="animated-text">Hey Mother F*cker 😎</h1>
    <p class="blink">janh bork ke hz npp</p>
</body>
</html>
