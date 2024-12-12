<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Establecer fondo blanco para el cuerpo de la página */
    body {
        background-color: #f8f9fa;
    }

    .button-container {
        border: 3px solid #f8f9fa; /* Borde verde */
        border-radius: 15px; /* Bordes redondeados del cuadro */
        padding: 20px; /* Espacio entre el borde y el botón */
        display: inline-block; /* El cuadro se ajusta al tamaño del botón */
        background-color: transparent; /* Fondo transparente para el contenedor */
    }

    .hover-effect {
        transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
    }

    .hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        background-color: #218838;
    }

    .hover-effect:active {
        transform: translateY(2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #1e7e34;
    }
</style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <a href="/list" class="btn btn-success btn-lg rounded-pill shadow-lg hover-effect">
        Lista de Registros!!
    </a>
</div>

</body>
</html>

</x-app-layout>