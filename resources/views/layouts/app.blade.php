<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Estudiantes</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-stone-50 text-gray-800 antialiased">
    <nav class="bg-gray-800 text-white shadow-lg">
        <div class="container mx-auto max-w-7xl px-6 py-4 flex justify-between items-center">
            <a href="{{ route('estudiantes.index') }}" class="text-2xl font-bold tracking-tight text-sky-300">
                 Sistema Estudiantil
            </a>
            <div class="space-x-6 text-gray-200 text-lg">
                <a href="{{ route('estudiantes.index') }}" class="hover:text-sky-300 transition duration-150">Estudiantes</a>
                <a href="{{ route('carreras.index') }}" class="hover:text-sky-300 transition duration-150">Carreras</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-8 px-4 max-w-4xl">
        @if (session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 text-green-700 rounded-lg p-4 mb-6 shadow-sm" role="alert">
                <p class="font-medium">✅ Éxito</p>
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 rounded-lg p-4 mb-6 shadow-sm" role="alert">
                <p class="font-bold mb-2">❌ Error de Validación</p>
                <ul class="list-disc ml-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="mt-12 py-4 text-center text-gray-500 text-sm border-t border-gray-200">
        © {{ date('Y') }} Sistema Estudiantil. Todos los derechos reservados.
    </footer>

</body>
</html>