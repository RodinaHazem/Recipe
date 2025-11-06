<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Recipes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: cursive;
        }

        body::-webkit-scrollbar {
                display: none;
            }


        header {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/rody.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: scroll;
            /* height: 100vh; */

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }

        header .container {
            display: grid;
            width: 60%;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        h1 {
            color: white;
            text-shadow: 0 0 20px yellowgreen;
            margin: 10px;
            text-align: center;

        }

        header .recipe {
            background-color: white;
            border-radius: 20px;
            width: 100%;
            text-align: center;
            padding: 10px;

            &:hover {
                scale: 1.1;
                transition: all 1s;
            }
        }

        button,
        input {
            width: 100px;
            height: 20px;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            height: 30px;
        }

        .del {
            background-color: red;
            color: white;
        }

        .edit {
            background-color: green;
            color: white;
        }

        a {
            text-decoration: none;
            color: white;

        }

        form {
            display: inline;

        }

        p {
            word-wrap: break-word;
            height: 70%;
            overflow: auto;
            margin-block: 10px;

            &::-webkit-scrollbar {
                display: none;
            }

        }


        .add {
            color: black;
        }

        .btns {
            text-align: center;
            margin-block: 50px;

        }
    </style>
</head>

<body>
    <header>


        <div class="container">
            <h1> Welcome, {{ Auth::user()->name }}</h1>
        </div>

        <h1>All Recipes</h1>


        <div class="container">
            @foreach ($recipes as $recipe )
            <div class="recipe">
                <h3>{{ $recipe['name'] }}</h3>
                <p>{{ $recipe['decription'] }}</p>
                <form action="/Admin_Dashboard/{{ $recipe['id'] }}" method="post">
                    @csrf
                    @method('delete')
                    <input class='del' type="submit" value="Delete">
                </form>
                <button class="edit"><a href="/Admin_Dashboard/{{ $recipe['id'] }}/edit">Update</a></button>
            </div>
            @endforeach
        </div>






        <div class="btns">

            <button>
                <a class="add" href="/Admin_Dashboard/create">Add a recipe</a>
            </button>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </header>

</body>

</html>
