<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $index1 }}</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="/">{{ $index1 }}</a>
                <a href="/index2">{{ $index2 }}</a>
                <a href="/index3">{{ $index3 }}</a>
            </ul>
        </nav>
    </header>

    <main>
        <iframe width="960" height="540" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </main>
</body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
    }

    nav{
        display: flex;
        justify-content: center;
        background-color: lightgrey;
        padding: 20px 0;
    }

    header nav ul{
        display: flex;
        gap: 40px;
    }

    a{
        list-style: none;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 600;
        text-decoration: none;
        color: red;
        text-transform: uppercase;
    }

    a:hover{
        color: yellow;
    }

    main{
        display: flex;
        justify-content: center;
        padding: 50px 0;
        background-color: lightcoral;
    }
</style>
