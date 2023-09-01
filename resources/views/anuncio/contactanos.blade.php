
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con Bootstrap</title>
  <!-- Agrega la referencia a los archivos de estilo de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/normalice.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  
  <style>
    /* Estilos personalizados */
    body {
      background-image: url('img/header.jpg'); /* Cambia 'ruta-de-tu-imagen.jpg' por la ruta de tu imagen de fondo */
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: #f8f9fa; /* Color de fondo en caso de que la imagen no se cargue o cubra todo el fondo */
    }
    .container {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .logo {
      max-width: 50px; /* Ajusta el tamaño máximo del logo según tus necesidades */
      margin: 0 auto;
      display: block;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      border-color: #ced4da;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: none;
    }
  </style>
</head>
<body>
<nav class="navegacion">

<a href="{{route('nosotros')}}">Nosotros</a>
<a href="{{route('anuncio_dos')}}">Anuncios</a>
<a href="{{route('contactanos')}}">Contactanos</a>

</nav>
<div class="container mt-5">
 

<div class="container mt-5">
  <form name="miFormulario" action="{{ route('download-json')}}" method="POST">
    @csrf
    <h2> Formulario de registro </h2>
    <img src="img/contacto.png" alt="logo" class="logo">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombres</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
      <label for="apellidos" class="form-label">Apellidos</label>
      <input type="text" class="form-control" name="apellidos">
    </div>
    <div class="mb-3">
      <label for="identificacion" class="form-label">Identificación</label>
      <input type="text" class="form-control" name="identificacion">
    </div>
    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección</label>
      <input type="text" class="form-control" name="direccion">
    </div>
    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="date" class="form-control" name="fecha">
    </div>

    <div class="mb-3">
      <label for="mensaje" class="form-label">Mensaje</label>
      <textarea class="form-control" name="mensaje" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="destinatario" class="form-label">Destinatario</label>
      <input type="email" class="form-control" name="destinatario" required>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>

<!-- Agrega la referencia al archivo de script de Bootstrap (opcional si deseas utilizar componentes interactivos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
