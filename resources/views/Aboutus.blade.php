@extends('layouts.app')

@section('title', 'Sobre nosotros')

@section('content')
<div class="color-changer">
<div class="color-panel">
    <img src="images/gear.png" alt="">
</div>
<div class="color-selector">
    <div class="heading">Custom Colors</div>
    <div class="colors">
        <ul >
        <li>
            <a href="#0" class="color-red " title="color-red"></a>
        </li>
        <li>
            <a href="#0" class="color-purple" title="color-purple"></a>
        </li>
        <li>
            <a href="#0" class="color-malt" title="color-malt"></a>
        </li>
        <li>
            <a href="#0" class="color-green" title="color-green"></a>
        </li>
        <li>
            <a href="#0" class="color-blue" title="color-blue"></a>
        </li>
        <li>
            <a href="#0" class="color-orange" title="color-orange"></a>
        </li>
        </ul>
    </div>
</div>
</div>
<!--about content-->
<div id="about-content">
    <div class="about-header">
        Sobre <span class="color">Nosotros</span>
        <span class ="header-caption">Conoce nuestra <span class="color"> Historia.</span></span>
    </div>
    <div class="about-main">
<div class="about-first-paragraph wow">
<!--about description-->
   <span class="about-first-line">
        NASA
        <span class="color">History</span>
         </span>
         <br>
   <span class="about-second-line">La Ley Nacional de Aeronáutica y del Espacio de 1958 (Pub.L. 85-568) creó la Administración Nacional de Aeronáutica y del Espacio (NASA). La sección 20112 (a)(3) de la Ley ordena a la NASA "que proporcione la difusión más amplia posible y adecuada de información sobre las actividades de la NASA y los resultados de las mismas". El intercambio de información y nuestra historia siempre ha sido y sigue siendo una prioridad.</span>

</div>
<!--about picture-->
<div class="about-img">
    <img src="images/about.jpg" alt="Your Image">
</div>
</div>

</div>
<!--services start-->
<div id="services">
    <div class="color-changer">
        <div class="color-panel">
            <img src="images/gear.png" alt="">
        </div>
        <div class="color-selector">
            <div class="heading">Custom Colors</div>
            <div class="colors">
                <ul >
                <li>
                    <a href="#0" class="color-red " title="color-red"></a>
                </li>
                <li>
                    <a href="#0" class="color-purple" title="color-purple"></a>
                </li>
                <li>
                    <a href="#0" class="color-malt" title="color-malt"></a>
                </li>
                <li>
                    <a href="#0" class="color-green" title="color-green"></a>
                </li>
                <li>
                    <a href="#0" class="color-blue" title="color-blue"></a>
                </li>
                <li>
                    <a href="#0" class="color-orange" title="color-orange"></a>
                </li>
                </ul>
            </div>
        </div>
        </div>
<!--services header-->
        <div class="services-heading wow">
            <span class="color">FILO</span>SOFIA
        </div>
<!--services header end-->
<!--services content-->
        <div class="services-content">
               <div class="service-one service wow">
                   <div class="service-img">
                   <img src="images/coding.png" alt="service-one">
                   </div>
                   <div class="service-description">
                    <h2>Mision</h2>
                    <p>Liderar un programa de exploración innovador y sostenible con socios comerciales e internacionales para permitir la expansión humana en todo el sistema solar y traer nuevos conocimientos y oportunidades a la Tierra.</p>
                   </div>
               </div>
               <div class="service-two service wow">
                   <div class="service-img">
                   <img src="images/instagram.png" alt="service-two">
                   </div>
                   <div class="service-description">
                    <h2>Valores</h2>
                    <p>Compartimos un conjunto de valores fundamentales: seguridad, integridad, trabajo en equipo, excelencia, inclusión, y son evidentes en todo lo que hacemos.</p>
                   </div>
               </div>
               <div class="service-three service wow">
                <div class="service-img">
                   <img src="images/bulb.png" alt="service-three">
                </div>
                <div class="service-description">
                    <h2>Valores</h2>
                    <p>Descubrir y expandir el conocimiento en beneficio de la humanidad.</p>
                </div>
            </div>
        </div>
</div>
<!--services content end-->
<!--services end-->
<!-- <div id="skills">
    <div class="skills-header">
         My <span class="color"> Skills</span>
    </div>
    <div class="skills-content " style="text-align: center;">
        <div class="skill-html skill">
            <div class="skill-text">
        <div class="html">
            HTML/CSS
        </div>
            </div>
        <div class="html-prog wow prog">
     <div class="html-progress wow">95%</div>
        </div>
        </div>
        <div class="skill-html skill">
            <div class="skill-text">
        <div class="html">
          Javascript
        </div>
            </div>
        <div class="html-prog wow prog">
     <div class="js-progress wow">90%</div>
        </div>
        </div>
        <div class="skill-html skill">
            <div class="skill-text">
        <div class="html">
            Adobe Ps
        </div>
            </div>
        <div class="html-prog wow prog">
     <div class="adobe-progress wow">83%</div>
        </div>
        </div>
        <div class="skill-html skill">
            <div class="skill-text">
        <div class="html">
            PHP
        </div>
            </div>
        <div class="html-prog wow prog">
     <div class="php-progress wow">87%</div>
        </div>
        </div>
        <div class="skill-html skill">
            <div class="skill-text">
        <div class="html">
            JQuery
        </div>
            </div>
        <div class="html-prog wow prog">
     <div class="jquery-progress wow">94%</div>
        </div>
        </div>
        <div class="skill-html skill">
            <div class="skill-text">
        <div class="html">
            SEO
        </div>
            </div>
        <div class="html-prog wow prog">
     <div class="seo-progress wow">84%</div>
        </div>
        </div>
    </div>
</div> -->

@endsection
