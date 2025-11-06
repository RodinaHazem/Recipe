<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            height: 100vh;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.01), rgba(0, 0, 0, 2)), url(imgs/rody.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background-color: rgba(244, 216, 8, 0.66);
            backdrop-filter: blur(10px);
            width: 500px;
            height: 500px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 30px;
            animation: motion 2s ease;
        }

        label {
            display: block;
            font-family: cursive;
        }

        div {
            width: 100%;
        }

        input {
            width: 100%;
            height: 30px;
            border-radius: 10px;
            padding: 10px;
            border: 1px solid black;
        }

        h3 {
            font-size: 50px;
            text-shadow: 0 0 20px;
            color: #663535;
            font-family: cursive;
            text-align: center;
        }

        button {
            font-family: cursive;
            border-radius: 20px;
            padding: 10px;
            border: none;
            margin: auto;
            margin: 10px;
            width: 100px;

            &:hover {
                background-color: #663535;
                cursor: pointer;
                color: white;

            }

            &:hover a {
                color: white;
            }

        }

        .btns {
            width: 100%;
            text-align: center;
        }

        a {
            color: black;
            text-decoration: none;
            width: 100%;
            height: 100%;
        }

        span {
            background-color: #dc35469d;
            padding-left: 10px;
            margin-block: 10px;
            border-radius: 10px;

        }

        @keyframes motion {
            0% {

                transform: translateY(100px);
                opacity: 0;

            }

            100% {

                transform: translateY(0);
                opacity: 1;

            }

        }
    </style>
</head>

<body>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <header>



        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <h3>Register</h3>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name"  id="name" placeholder="John Doe">
            </div>
            @error("name")
            <span>{{ $message }}</span>
            @enderror
            <div>
                <label for="email">Email address</label>
                <input type="email" name="email"  id="email" placeholder="name@example.com">
            </div>
            @error("email")
            <span>{{ $message }}</span>
            @enderror
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="At Least 6 characters">
        </div>
            @error("password")
            <span>{{ $message }}</span>
            @enderror
            <!-- <div>
                <label for="passkey">Passkey</label>
                <input type="passkey" name="passkey" id="passkey" placeholder="Enter Code">
            </div> -->
            <div class="btns">

                <button>Register</button>
                <button><a href="/login">Login</a></button>
            </div>

        </form>

    </header>

</body>

</html>
