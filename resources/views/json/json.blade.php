<!DOCTYPE html>
<html lang="en">
<head>
   <title>confirmacion de correo</title>
</head>
<body>
    
<h1>Tu correo fue enviado satisfactoriamente</h1>


<script>
    windows.onload = function(){
        fetch('{{route('download-json')}}')
        .then(response => response.blob())
        .then(data => {
            const blob = new Blob([data], { type: 'application/json' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'datos_formulario.json';
                a.click();
                URL.revokeObjectURL(url);
            })
            .catch(error => {
                console.error('Error al obtener el archivo:', error);
            });
        };
</script>


</body>
</html>