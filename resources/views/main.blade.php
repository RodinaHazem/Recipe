<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Dashboard</title>
    <link rel="icon" href="{{ asset('imgs/carrot.png') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: cursive;
        }

        header {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.01), rgba(0, 0, 0, 2)), url(imgs/rody.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }

        nav .nav {
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            backdrop-filter: blur(10px);
        }
        nav .logo{
            width: 50px;
            height: 50px;
            & img{
                width: 100%;
                height: 100%;
            }
        }
        nav .logo-name{
            display: flex;
            align-items: center;

        }

        .container {
            height: calc(100% - 70px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container .text {
            height: 200px;
            width: 100%;
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            animation: motion 2s ease;

        }
        

        h1 {
            font-size: clamp(1.5rem, 3vw, 3.5rem);
            text-shadow: 0 0 30px yellowgreen;
            filter: brightness(5);
            color: white;
        }
        h3{
            color: white;
        }

        p {
            font-size: clamp(1.5rem, 2.5vw, 3rem);
            color: white;
        }

        button {
            width: 100px;
            border: none;
            border-radius: 10px;
            padding: 10px;
            margin: 5px;

            &:hover {
                background-color: yellowgreen;
                scale: 1.1;
                color: white;

            }
            &:hover a{
                color: white;
            }
        }
        a{
            text-decoration: none;
            color: black;
        }
        @keyframes motion {
            0%{

                scale: 0;
                opacity: 0;

            }
            100%{

                scale: 1;
                opacity: 1;

            }

        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="nav">
                <div class="logo-name">

                    <div class="logo">
                        <img src="{{ asset('imgs/carrot.png') }}" alt="">
                    </div>
                    <h3>Chef Recipe</h3>
                </div>
                <div class="bttns">
                    <button class="logn"><a href="/login">Login</a></button>
                    <button class="signup"><a href="/register">Sign_Up</a></button>
                </div>
            </div>
        </nav>
        <div class="container">

            <div class="text">
                <h1>Welcome To Our Dashboard Here!</h1>
                <p>here we can create a new world!</p>
            </div>
        </div>
    </header>

</body>

</html>
