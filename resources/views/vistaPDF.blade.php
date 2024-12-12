<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            line-height: 1.6;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 2em;
            color: #4CAF50;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .content {
            margin-left: 20px;
        }

        .content p {
            margin: 5px 0;
        }

        /* Estilos de las listas */
        ul {
            margin: 10px 0;
            padding-left: 20px;
        }

        ul li {
            list-style-type: disc;
            margin: 5px 0;
        }

        /* Estilos de la sección de contacto */
        .contact {
            text-align: center;
            font-size: 1.1em;
            margin-top: 20px;
        }

        .contact p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>{{ $nombre }} {{ $apellidos }}</h1>

    <div class="section">
        <div class="section-title">Datos Personales</div>
        <div class="content">
            <p>{{ $datos_personales }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Habilidades</div>
        <div class="content">
            <p>{{ $habilidades }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Idiomas</div>
        <div class="content">
            <p>{{ $idiomas }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Profesión</div>
        <div class="content">
            <p>{{ $profesion }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Experiencia Profesional</div>
        <div class="content">
            <p>{{ $experiencia_profesional }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Historial Académico</div>
        <div class="content">
            <p>{{ $historial_academico }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Formación Complementaria</div>
        <div class="content">
            <p>{{ $formacion_complementaria ?? 'No disponible' }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Otros Datos</div>
        <div class="content">
            <p>{{ $otros_datos ?? 'No disponible' }}</p>
        </div>
    </div>

</body>
</html>
