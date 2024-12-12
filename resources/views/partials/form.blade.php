<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulario</title>

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
                        <h4>Formulario de Registro</h4>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('partials.form.submit') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nombre">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="apellidos">Apellidos <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="datos_personales">Objetivo Personal <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="datos_personales" name="datos_personales" rows="3"
                                    required></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="habilidades">Habilidades <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="habilidades" name="habilidades" rows="3"
                                    required></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="idiomas">Idiomas <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="idiomas" name="idiomas" rows="3" required></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="profesion">Profesión <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="profesion" name="profesion" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="experiencia_profesional">Experiencia Profesional <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="experiencia_profesional"
                                    name="experiencia_profesional" rows="3" required></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="historial_academico">Historial Académico <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="historial_academico" name="historial_academico"
                                    rows="3" required></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="formacion_complementaria">Formación Complementaria</label>
                                <textarea class="form-control" id="formacion_complementaria"
                                    name="formacion_complementaria" rows="3"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="otros_datos">Otros Datos de Interes</label>
                                <textarea class="form-control" id="otros_datos" name="otros_datos" rows="3"></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="/list" class="btn lg-primary shadow-sm" style="background-color: red; border-radius: 8px;">
                                    Regresar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>