<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
</head>
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
        height: 400px;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 30px;
        animation: motion 2s ease;
    }

    @keyframes motion {
        0% {

            transform: translateY(-100px);
            opacity: 0;

        }

        100% {

            transform: translateY(0);
            opacity: 1;

        }

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
</style>


<body>

    @if(Session::has('error'))
    <div role="alert">
        {{ Session::get('error') }}
    </div>
    @endif
    <header>

        <form action="{{ route('login.submit') }}" method="POST">
            <h3>Login</h3>
            @csrf
            <div>
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            @error("email")
            <span>{{ $message }}</span>
            @enderror
            <div>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password">
            </div>
            @error("password")
            <span>{{ $message }}</span>
            @enderror
            <div class="btns">
                <button>Login</button>
                <button><a href="/register">Sign Up</a></button>
            </div>

        </form>
    </header>

</body>

</html>
