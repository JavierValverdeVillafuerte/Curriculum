<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registros</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
            <h4>Lista de Registros</h4>
        </div>
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
            <a href="/form" class="btn lg-primary shadow-sm" style="background-color: #4CAF50; border-radius: 8px;">
                Crear Curriculum Vitae!!
            </a>
        </div>
    </div>
        @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @method('PUT')
        <div class="card-body">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Objetivos personales</th>
                        <th>Prefesion</th>

                        {{-- seguir registro --}}

                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($curriculums as $curriculum)
                    <tr>
                        <td>{{ $curriculum->nombre }}</td>
                        <td>{{ $curriculum->apellidos }}</td>
                        <td>{{ $curriculum->datos_personales }}</td>
                        <td>{{ $curriculum->profesion }}</td>

                                {{-- seguir registro --}}

                        <td class="text-center">
                            <a href="{{ route('edit', $curriculum->id) }}" class="btn btn-warning btn-sm mx-1">Editar</a>
                            <form action="{{ route('destroy', $curriculum->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                            </form>
                            <a href="{{ route('vistaPDF', ['id' => $curriculum->id]) }}" target="_blank" class="btn btn-success">Generar PDF</a>


</form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted text-center">
            Total de registros: {{ $curriculums->count() }}
            <a href="dashboard" class="btn lg-primary shadow-sm" style="background-color: red; border-radius: 8px; color:aliceblue">
                Regresar
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
