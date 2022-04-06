@extends('layouts.app')

@section('title', 'Organisacion')

@section('content')
<!--portfolio-->
<!-- <div id="portfolio"> -->
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
    <div class="portfolio-header"> <span class="color"> Diagrama  </span> Organizacional
    <span class ="header-caption"> Oficina del  <span class="color"> Administrador </span></span></div>
     <div id="portfolio-content">
         <div class="portfolio portfolio-first">
             <div class="portfolio-image">
                <img src="images/bill.jpg" alt="portfolio-first">
             </div>
             <div class="portfolio-text">
                 <h2>Bill Nelson</h2>
                 <h2 style="color: white">Administrator</h2>
                 <div class="button"><a href="#"><button><span class="index"> View Carrer<i class="gg-arrow-right"></i></span></button></a></div>
             </div>
         </div>
         <div class="portfolio portfolio-second">
            <div class="portfolio-image">
                <img src="images/pam.jpg" alt="portfolio-second">
            </div>
            <div class="portfolio-text">
                <h2>Pam Melroy</h2>
                <h2 style="color: white">Deputy Administrator</h2>
                <div class="button"><a href="#"><button><span class="index"> View Carrer<i class="gg-arrow-right"></i></span></button></a></div>
            </div>
            </div>
        </div>

        <div class="portfolio portfolio-third">
            <div class="portfolio-image">
                <img src="images/robert.jpg" alt="portfolio-third">
            </div>
            <div class="portfolio-text">
                <h2>Robert Cabana</h2>
                <h2 style="color: white">Associate Administrator</h2>
                <div class="button"><a href="#"><button><span class="index"> View Carrer<i class="gg-arrow-right"></i></span></button></a></div>
            </div>
            </div>
        </div>
        <div class="portfolio portfolio-fourth">
            <div class=" portfolio-image">
                <img src="images/susi.jpg" alt="portfolio-fourth">
            </div>
            <div class="portfolio-text">
                <h2>Susie Perez Quinn</h2>
                <h2 style="color: white">Chief of Staff</h2>
                <div class="button"><a href="#"><button><span class="index"> View Carrer<i class="gg-arrow-right"></i></span></button></a></div>
            </div>
            </div>
        </div>
         </div>
            <!--copyright-section You Can Remove After Downloading-->

<!--copyright-section-->
     <!-- </div> -->
<!--portfolio end-->
@endsection
