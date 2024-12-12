<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar Registro</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Editar Registro</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update', $curriculum->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="nombre" 
                                name="nombre" 
                                value="{{ $curriculum->nombre }}" 
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="apellidos" 
                                name="apellidos" 
                                value="{{ $curriculum->apellidos }}" 
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="datos_personales" class="form-label">Datos Personales</label>
                            <textarea 
                                class="form-control" 
                                id="datos_personales" 
                                name="datos_personales" 
                                rows="3" 
                                required>{{ $curriculum->datos_personales }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="habilidades" class="form-label">Habilidades</label>
                            <textarea
                                class="form-control" 
                                id="habilidades" 
                                name="habilidades" 
                                rows="3" 
                                required>{{ $curriculum->habilidades }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="idiomas" class="form-label">Idiomas</label>
                            <textarea
                                class="form-control" 
                                id="idiomas" 
                                name="idiomas" 
                                rows="3" 
                                required>{{ $curriculum->idiomas }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="profesion" class="form-label">Profesión</label>
                            <input
                                class="form-control" 
                                id="profesion" 
                                name="profesion" 
                                rows="3" 
                                value="{{ $curriculum->profesion }}" 
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="experiencia_profesional" class="form-label">Exp Profesional</label>
                            <textarea
                                class="form-control" 
                                id="experiencia_profesional" 
                                name="experiencia_profesional" 
                                rows="3" 
                                required>{{ $curriculum->experiencia_profesional }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="historial_academico" class="form-label">Historial Academico</label>
                            <textarea
                                class="form-control" 
                                id="historial_academico" 
                                name="historial_academico" 
                                rows="3" 
                                required>{{ $curriculum->historial_academico }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="formacion_complementaria" class="form-label">Formacion Complementaria</label>
                            <textarea
                                class="form-control" 
                                id="formacion_complementaria" 
                                name="formacion_complementaria" 
                                rows="3" 
                                required>{{ $curriculum->formacion_complementaria }}</textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="otros_datos" class="form-label">Otros datos de interes</label>
                            <textarea
                                class="form-control" 
                                id="otros_datos" 
                                name="otros_datos" 
                                rows="3" 
                                required>{{ $curriculum->otros_datos }}</textarea>
                        </div>

                        <!-- Agregar otros campos según sea necesario -->

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="{{ route('list') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
