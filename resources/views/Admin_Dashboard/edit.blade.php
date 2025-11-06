<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Recipe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: cursive;
        }

        header {
            height: 100vh;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('/imgs/header_photo.webp');
            background-repeat: no-repeat;
            background-size: cover;
            position: fixed;
            left: 0;
            bottom: 0;
            right: 0;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        form {
            background-color: tan;
            backdrop-filter: blur(10px);
            width: 500px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

            border-radius: 20px;

        }

        input {
            border-radius: 10px;
            border: 1px solid black;
            padding: 10px;
        }

        div {
            margin: 10px;
        }

        textarea {
            border-radius: 10px;
            height: 100px;
            padding: 20px;
        }

        input[type=submit] {
            border: none;
            cursor: pointer;
            background-color: orange;
            padding: 10px;

            &:hover {
                background-color: darkorange;

            }
        }

        label {
            display: block;
        }

        h1 {
            margin-bottom: 10px;
            text-shadow: 0 0 20px;
        }
    </style>
</head>

<body>
    <header>

        <form action="/Admin_Dashboard/{{ $recipe['id'] }}" method="post">
            @csrf
            @method("put")
            <h1>Update Recipe</h1>
            <div>

                <label for="id">ID</label>
                <input type="text" name="id" id="id" readonly value="{{ $recipe['id'] }}">
            </div>
            <div>

                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $recipe['name'] }}">
            </div>
            <div>

                <label for="desc">Description</label>
                <textarea name="description" id="desc">{{ $recipe['description'] }}</textarea>
            </div>
            <input type="submit" value="edit new one">

        </form>
    </header>
</body>

</html>
