<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario registrado</title>
</head>
<body>

<h1> correo enviado desde laravel</h1>

<h2> Sus datos han sido registrados en nuestra página <h2>

<p> con el siguiente correo electronico  {{ $mensaje}}

</p>

<p>
    {{json_encode($mensaje, JSON_PRETTY_PRINT)}}
</p>
    
</body>
</html>

