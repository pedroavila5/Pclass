<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienes Raices</title>
        <link rel="stylesheet" href="{{ asset('css/normalice.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        

        </head>
<body>

    <header class="site-header inicio">
      <div class="contenedor contenido-header">
      <div class="barra">
    
     <img src="img/principal" width="600"alt="">

     <nav class="navegacion">

<a href="{{route('nosotros')}}">Nosotros</a>
<a href="{{route('anuncio_dos')}}">Anuncios</a>
<a href="{{route('blog')}}">Blog</a>
<a href="{{route('contactanos')}}">Contactanos</a>

</nav>

<section class="contenedor seccion">
  

<main class="seccion contenedor">
     <h2 class="fw-300 centrar-texto"></h2>
     <div class="contenedor-anuncios">


    

     <section class="imagen-contacto">
      <div class="contenedor contenido-contacto">
     <p>Llena el formulario de conctacto</p>
     <a href="{{route('contactanos')}}" class="boton boton-amarillo">Contactanos</a>
</div>
     </section>
     <div class="seccion-inferior contenedor">
<section class="blog">

     <h3 class="centrar-texto fw-300">Nuestro Blog</h3>
     <article class="entrada-blog">
      <div class="imagen">
     <img src="img/blog1.jpg" alt="blog1">
</div>
<div class="texto-entrada">
<a href="#">
     <h4>Terraza en el techo de tu casa</h4>
</a>
     <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
</div>
    </article>

<article class="entrada-blog">
  <div class="imagen">
     <img src="img/blog2.jpg" alt="blog1">
</div>
<div class="texto-entrada">
  <a href="#">
     <h4>Decora tu hogar</h4>
     </a>
     <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>

    </article>


    </section>
     
      <section class="testimoniales">
     <h3 class="centrar-texto fw-300">Testimoniales</h3>
     <div class="testimonial">
     <blockquote>
        El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecion cumple con todas mi expectativas.
     </blockquote>
     <p>Pedro Luis Avila Gomez</p>
     </div>
</section>
</div>


<footer class="site-footer seccion">
  <div class="contenedor contenedor-footer">
     
<nav class="navegacion">

<a href="{{route('nosotros')}}">Nosotros</a>
<a href="{{route('anuncio_dos')}}">Anuncios</a>
<a href="{{route('blog')}}">Blog</a>
<a href="{{route('contactanos')}}">Contactanos</a>

</nav>

     </footer>

</div>
</main>
</body>
</html>