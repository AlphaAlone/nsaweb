@extends('layouts.app')

@section('content')

<!--Header-->
<div id="header">
  <div id="particles"></div>
    <!--Social Media Links-->
  <div class="social-media-links">
     <a href="#"><img src="images/instagram logo.png" class="social-media" alt="instagram-logo"></a><!--Your instagram homepage link inser in place of "#"-->
      <a href="#"><img src="images/facebook logo.png" class="social-media" alt="facebook-logo"></a>
      <a href="#"><img src="images/linkedin logo.png" class="social-media" alt="linkedin-logo"></a>
      <a href="#"><img src="images/twitter logo.png" class="social-media" alt="twitter-logo"></a>

  </div>
  <!--Social Media Links end-->
  <div class="header-content">
      <div class="header-content-box">
      <div class="firstline"><span class="color">Arlo </span>Brown</div>
      <div class="secondline">
      I'm a
  <span class="txt-rotate color" data-period="1200"data-rotate='[ " Designer.", " Blogger.", " Freelancer." ]'></span>
  <span class="slash">|</span>
</div>
          <div class="contact">
      <a href="Mailto:#"><img src="images/mail.png" alt="email-pic" class="contactpic"></a><!--Your email Id write in place of "#"-->
      <a href="Tel:#"><img src="images/call.png" alt="phone-pic" class="contactpic"></a><!--Your telephone number Id write in place of "#"-->
          </div>
  </div>
  </div>
  <!--header image-->
  <div class="header-image">
  <img src="images/man.jpg" alt="logo">
  </div>
  <!--header image end-->
</div>
 <!--Header End-->
<!--HomePage End-->


@endsection
