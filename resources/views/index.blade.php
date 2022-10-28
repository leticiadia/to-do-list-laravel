<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')

    <title>ToDoList</title>
</head>

<body>
    <header>
        <h1>ToDoList</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; Direitos reservados a Leticia Dias</p>
    </footer>

    <script src="/js/script.js"></script>
</body>

</html>