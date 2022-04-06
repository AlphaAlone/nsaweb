@extends('layouts.app')

@section('content')
<!-- <div id="contact"> -->
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
    <div class="contact-header">Contact <span class="color"> Me</span>
   <div class="contact-header-caption"> <span class="color"> Get</span> In Touch.</div></div>
   <div class="contact-content">
       <!--Contact form-->
        <div class="contact-form">
            <div class="form-header">
                Message Me
            </div>
            <form id="myForm" action="{{ route('send.email') }}" method="POST">
                @csrf
               <div class="input-line">
                   <input  id="name" type="text" placeholder="Name" name="name" class="input-name">
                   <input id="email" type="email" placeholder="Email" name="email" class="input-name">
               </div>
               <input type="text" id="subject" placeholder="subject" name="text" class="input-subject">
               <textarea id ="body" name="body" class="input-textarea" placeholder="message"></textarea>
               <button input type="submit" value="send">Submit</button>
               <!-- <input type="submit" value="Mandar Mensaje" class="btn btn-primary"> -->

            </form>

        </div>
       <!--Contact form-->
       <!--Contact information-->
        <div class="contact-info">
           <div class="contact-info-header">
               Contact Info
           </div>
           <div class="contact-info-content">
           <div class="contect-info-content-line">
               <img src="./images/icon-name.png" class="icon" alt="name-icon">
               <div class="contact-info-icon-text">
                   <h6>Name</h6>
                   <p>Arlo Brown</p>
             </div>
           </div>
           <div class="contect-info-content-line">
             <img src="./images/icon-location.png" class="icon" alt="location-icon">
             <div class="contact-info-icon-text">
                 <h6>Location</h6>
                 <p>New York, USA</p>
           </div>
         </div>
         <div class="contect-info-content-line">
             <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
             <div class="contact-info-icon-text">
                 <h6>Call</h6>
                 <p>+9865376531</p>
           </div>
         </div>

         <div class="contect-info-content-line">
             <img src="./images/icon-email.png" class="icon" alt="email-icon">
             <div class="contact-info-icon-text">
                 <h6>Email</h6>
                 <p>Info@example.com</p>
           </div>
         </div>
           </div>
       <!--Contact information end-->
      </div>
   </div>
<!-- </div> -->
   <!--contact end-->
@endsection
