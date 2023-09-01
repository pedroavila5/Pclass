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

    <header class="site-header">
      <div class="contenedor contenido-header">
      <div class="barra">
    
     <img src="img/logo.svg" width="600"alt="">

     <nav class="navegacion">

<a href="{{route('nosotros')}}">Nosotros</a>
<a href="{{route('anuncio_dos')}}">Anuncios</a>
<a href="{{route('blog')}}">Blog</a>
<a href="{{route('contactanos')}}">Contactanos</a>

</nav>
</div>

</div>
    </header>
<main class="contenedor">
    <h1 class="fw-300 centrar-texto">conoce sobre nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <img src="img/nosotros.jpg" alt="imagen sobre nosotros">
</div>
<div class="texto-nosotros">
    <blockquote>15 años de esperiencia</blockquote>
    <p>Nuestro equipo de profesionales altamente capacitados combina su conocimiento técnico con la intuición adquirida a lo largo de los años. Esto nos permite ofrecer asesoramiento preciso y personalizado que se ajusta a las necesidades únicas de cada cliente.</p>
</div>
</div>
</main>
<section class="contenedor seccion">
  
  

     <h2 class="fw-300 centrar-texto">Mas sobre nosotros</h2>

     <div class="iconos-nosotros">
     <div class="icono">
     <img src="img/icono1.svg" alt="icono seguridad">
     <h3>Seguridad</h3>
     <p>Respetamos tu privacidad y protegemos tus datos personales de acuerdo con las leyes y regulaciones aplicables. Utilizamos medidas de seguridad avanzadas para proteger la información que nos proporcionas.</p>
</div>

<div class="icono">
     <img src="img/icono2.svg" alt="icono mejor precio ">
     <h3>Precios</h3>
     <p>Nuestros precios reflejan nuestro compromiso de brindarte opciones accesibles en el mercado inmobiliario sin sacrificar calidad ni comodidad. Creemos que todos merecen encontrar su lugar ideal para vivir, y trabajamos arduamente para ofrecerte alternativas atractivas que se ajusten a tu presupuesto.</p>
     </div>

     <div class="icono">
     <img src="img/icono3.svg" alt="icono a tiempo">
     <h3>A tiempo</h3>
     <p>Cumplimos con los plazos establecidos, garantizando que tus proyectos avancen sin demoras innecesarias.</p>
     </div>
</div>
</section>


<footer class="site-footer seccion">
  <div class="contenedor contenedor-footer">
     
<nav class="navegacion">

<a href="{{route('nosotros')}}">Nosotros</a>
<a href="{{route('anuncio_dos')}}">Anuncios</a>
<a href="{{route('blog')}}">Blog</a>
<a href="{{route('contactanos')}}">Contactanos</a>

</nav>


     <p class="copyright">Todos los derechos reservados</p>
     </footer>

</div>

</body>
</html>