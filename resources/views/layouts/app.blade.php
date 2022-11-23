<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voetbal</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-screen flex flex-col bg-yellow-200">
        <div class="flex-1 overflow-auto flex flex-col md:flex-row">
            <div class="h-auto overflow-auto md:w-auto">@yield('menu')</div>
            <div class="flex-1 h-auto overflow-auto">@yield('content')</div>
        </div>
        <div class="flex justify-center h-auto bg-black text-lime-400 pt-2 italic text-xs">
            &copy; Voetballers.
        </div>
    </div>
</body>
</html>
