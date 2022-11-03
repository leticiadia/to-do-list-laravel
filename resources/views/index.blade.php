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
    <header class="p-8">
        <a href="{{ route('tasks') }}" class="font-sans font-medium text-4xl no-underline text-violet-400">ToDoList</a>
    </header>

    <main class="flex flex-col items-center justify-center">
        @yield('content')
    </main>

    <footer class="m-auto pb-2">
        <p class="text-sm text-violet-500 font-medium">&copy; Direitos reservados a Leticia Dias</p>
    </footer>

    <script src="/js/script.js"></script>
</body>

</html>