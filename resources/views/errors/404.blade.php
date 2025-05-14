<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACMA | 404</title>
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/acmaicon.ico">
    {{-- **font  link ** --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    {{-- font  link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Underdog&display=swap" rel="stylesheet">

    <style>
        /* font */


        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            font-family: "Underdog", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        :root {
            --color-1: #171718da;
            --color-2: #f5f5f5;
            --color-3: #808080;
            --color-4: #ecc363;
        }

        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .img-container {
            text-align: center;
        }

        .img-style {
            width: 400px;
        }

        .text-container {
            text-align: center;
            margin-top: 10px;
        }

        .container-1 {
            height: auto;
            width: auto;
            padding: 50px 30px;
            border: 2px solid var(--color-3);
            box-shadow: var(--color-3) 10px 10px 10px;
        }

        .text-1 {
            font-size: 100px;
            color: var(--color-1);
            font-weight: 700
        }

        .text-1-1 {
            color: var(--color-4);
        }

        .text-2 {
            font-size: 40px;
            color: var(--color-1);
            margin-bottom: 10px;
        }

        .text-3 {
            font-size: 20px;
            color: var(--color-1);
            font-weight: 600
        }

        .btn-container {
            background: var(--color-4);
            width: 300px;
            height: 50px;
            margin: 0 auto;
            margin-top: 20px;
            border-radius: 20px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            text-decoration: none;
            font-size: 25px;
            font-weight: 600;
        }


        @media screen and (max-width: 650px) {
            .container-1 {
                border: none;
                box-shadow: none;
                padding: 10px 10px;
            }

            @media screen and (max-width: 450px) {
                .img-style {
                    width: 320px;
                }
            }
        }
    </style>


</head>

<body class="luckiest-guy-regular">

    <div class="main-container">
        <div class="container-1">
            <div class="img-container">
                <img class="img-style" src="{{ asset('error/error-Photoroom.png') }}" alt="">
            </div>
            <div class="text-container">
                <div class="text-1">4<span class="text-1-1">0</span>4</div>
                <div class="text-2">It looks like you're lost...</div>
                <div class="text-3">The page you're looking for doesn't exist or has been moved.</div>
                <a class="btn-container" href="/">Go Back Home</a>
            </div>
        </div>

    </div>
</body>

</html>
