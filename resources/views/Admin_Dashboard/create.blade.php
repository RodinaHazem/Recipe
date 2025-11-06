<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New one</title>
</head>
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
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border-radius: 20px;


    }

    input {
        border-radius: 20px;
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

        &:hover {
            background-color: darkorange;

        }
    }

    h1 {
        text-shadow: 0 0 20px;
        margin-bottom: 10px;
    }
    span{
        text-shadow: 0 0 20px  orangered;
    }
</style>

<body>
    <header>


        <form action="/Admin_Dashboard" method="post">
            <h1>Add a Recipe</h1>
            @csrf
            <div>
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name">
            </div>
            @error("name")
            <span>add a name!</span>
            @enderror
            <!-- <div>
                <label for="image">Name</label><br>
                <input type="file" id="image" name="img">
            </div> -->
            <div>
                <label for="desc">Description</label><br>
                <textarea name="description" id="desc"></textarea>
            </div>
            @error("description")
            <span>Description please!</span>
            @enderror
            <div>
                <input type="submit" value="create new one">
            </div>
        </form>
    </header>
</body>

</html>
