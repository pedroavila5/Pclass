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
<a href="{{route('contactanos')}}">Contactanos</a>

</nav>
</div>

     <h1>Venta de casas exclusivas</h1>
</div>
    </header>
<section class="contenedor seccion">
  
  

     

<main class="seccion contenedor">
     <h2 class="fw-300 centrar-texto">Casas en venta</h2>
     <div class="contenedor-anuncios">


     <div class="anuncio">
    <img src="img/casalago.jpeg" alt="casa lago">
     <div class="contenido-anuncio">
     <h3>Casa de lujo frente al lago</h3>
     <p>Casa frente  al mar con excelente vista, con ultima tecnologia y excelente precio</p>
     <p class="precio">$5.000.000</p>
     <a href="#" class="boton boton-amarillo d-block">Ver Propiedad</a>
</div>
     </div>

     <div class="anuncio">
     <img src="img/casafinca.jpg" alt="casa de lujo">
     <div class="contenido-anuncio">
     <h3>Casa finca</h3>
     <p>Casa de lujo amoblada, con acabados de lujos y excelente precio</p>
     <p class="precio">$7.000.000</p>
     <a href="#"class="boton boton-amarillo d-block">Ver Propiedad</a>
     </div>
     </div>

     <div class="anuncio">
     <img src="img/condominio.jpeg" alt="casa en condominios">
     <div class="contenido-anuncio">
     <h3>Casa finca</h3>
     <p>Casa frente  al mar con excelente vista, con excelente tecnologia y zona muy exclusiva</p>
     <p class="precio">$11.000.000</p>
     <a href="#"class="boton boton-amarillo d-block">Ver Propiedad</a>
</div>
     </div>
</div>
     <div class="ver-todas">
     <a href="Anuncios.html"class="boton boton-verde">Ver todas</a>
</div>
     </main>

     <section class="imagen-contacto">
      <div class="contenedor contenido-contacto">

     <h2>Encuentra la casa perfecta para ti y tu familia</h2>
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

<a href="{{route('contactanos')}}">Contactanos</a>

</nav>

     </footer>

</div>

</body>
</html>