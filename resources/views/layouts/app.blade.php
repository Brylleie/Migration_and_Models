<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <a href="{{ route('tasks.index') }}" class="text-white text-xl font-bold">Task Manager</a>
        </div>
    </nav>
    <main class="container mx-auto px-6 py-8">
        @yield('content')
    </main>
</body>
</html>
