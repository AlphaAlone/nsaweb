<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Willy Wonkas - Personal Portfolio Website Template" />
 <meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
 <meta name="author" content="willy wonka" />
   <title>Willy Wonkas - Personal Portfolio Website Template</title>
 <!--favicon-img-->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <!--favicon-img-->
  <!--main css file should not be removed -->
   <link rel="stylesheet" href="css/index.css">
   <!--main css file-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
      <!--contains all the div-->
  <div id="all">
  <!--mouse  follower-->
      <div class="cursor"></div>
  <!--mouse  follower-->
  <!--loader-->
      <div id="loader">
          <span class="color">Arlo</span>Brown
      </div>
  <!--loader-end-->
  <!--link-screen-->
      <div id="breaker">
      </div>
      <div id="breaker-two">
      </div>
  <!--link-screen-->
      <!--Main-Section-->
      <!--Navigator-fullscreen-->
      <div id="navigation-content">
          <div class="logo">
              <img src="images/willy wonka logo.png" alt="logo">
          </div>
          <div class="navigation-close">
              <span class="close-first"></span>
              <span class="close-second"></span>
          </div>
          <div class="navigation-links">
              <a href="#" data-text="HOME" id="home-link" >HOME</a>
              <a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
              <a href="#" data-text="BLOG" id="blog-link" >BLOG</a>
              <a href="#" data-text="PORTFOLIO" id="portfolio-link" >PORTFOLIO</a>
              <a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
          </div>
      </div>
      <!--Navigator-Fullscreen END-->
        <!--Home Page-->
      <!--Menubar-->
      <div id="navigation-bar">
          <img src="images/willy wonka logo.png" alt="logo">
          <div class="menubar">
              <span class="first-span"></span>
              <span class="second-span"></span>
              <span class="third-span"></span>
          </div>
      </div>
      <!--Menubar End-->
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
      <!--Main-Section End-->
      <!--about-->
      <div id="about">
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
                  About <span class="color">Me</span>
                  <span class ="header-caption">Get to Know <span class="color"> me.</span></span>
              </div>
              <div class="about-main">
          <div class="about-first-paragraph wow">
          <!--about description-->
             <span class="about-first-line">
                  I'm creative
                  <span class="color">web developer</span>
                   based in New York , USA </span>
                   <br>
             <span class="about-second-line"> With 20 years of experience as a professional Web developer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step while working.</span>
             <div class="cv">
              <a href="#"><button>Download <span class="colors">CV</span></button></a>
          </div>
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
                      <span class="color">My</span> Services
                  </div>
          <!--services header end-->
          <!--services content-->
                  <div class="services-content">
                         <div class="service-one service wow">
                             <div class="service-img">
                             <img src="images/coding.png" alt="service-one">
                             </div>
                             <div class="service-description">
                              <h2>Web Designing</h2>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                             </div>
                         </div>
                         <div class="service-two service wow">
                             <div class="service-img">
                             <img src="images/instagram.png" alt="service-two">
                             </div>
                             <div class="service-description">
                              <h2>Social Media</h2>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                             </div>
                         </div>
                         <div class="service-three service wow">
                          <div class="service-img">
                             <img src="images/bulb.png" alt="service-three">
                          </div>
                          <div class="service-description">
                              <h2>Creative Design</h2>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                          </div>
                      </div>
                  </div>
          </div>
          <!--services content end-->
          <!--services end-->
          <div id="skills">
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
          </div>
  <!--copyright-section You Can Remove After Downloading-->
          <div class="footer">
           <div class="footer-text">
               <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Willy Wonkas
           </div>
          </div>
  <!--copyright-section-->
      </div>
      <!--about end-->
      <!--portfolio-->
      <div id="portfolio">
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
          <div class="portfolio-header"> <span class="color"> My </span> Portfolio
          <span class ="header-caption"> Some Of My <span class="color"> Works</span></span></div>
           <div id="portfolio-content">
               <div class="portfolio portfolio-first">
                   <div class="portfolio-image">
                      <img src="images/portfolio-first.jpg" alt="portfolio-first">
                   </div>
                   <div class="portfolio-text">
                       <h2>App Idea</h2>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                           expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                       <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                   </div>
               </div>
               <div class="portfolio portfolio-second">
                  <div class="portfolio-image">
                      <img src="images/portfolio-second.jpg" alt="portfolio-second">
                  </div>
                  <div class="portfolio-text">
                      <h2>Web Designing</h2>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id cumque placeat minima ad laudantium suscipit
                           voluptatem ducimus. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                      <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                  </div>
              </div>

              <div class="portfolio portfolio-third">
                  <div class="portfolio-image">
                      <img src="images/portfolio-third.jpg" alt="portfolio-third">
                  </div>
                  <div class="portfolio-text">
                      <h2>UI Designing</h2>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate expedita eius dignissimos
                          .. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                      <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                  </div>
              </div>
              <div class="portfolio portfolio-fourth">
                  <div class=" portfolio-image">
                      <img src="images/portfolio-fourth.jpg" alt="portfolio-fourth">
                  </div>
                  <div class="portfolio-text">
                      <h2>Wow Graphics</h2>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                           expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                      <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                  </div>
              </div>
               </div>
                  <!--copyright-section You Can Remove After Downloading-->
          <div class="footer">
              <div class="footer-text">
                  <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Willy Wonkas
              </div>
             </div>
     <!--copyright-section-->
           </div>
      <!--portfolio end-->
      <!--blog-->
      <div id="blog">
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
      <div class="blog-header"> Blogs</span>
          <span class ="header-caption"> My Latest <span class="color"> blog posts.</span></span></div>
          <div class="blog-content">
               <div class="blogs">
                   <a href="#">
                   <div class="img">
                      <img src="images/post-one.jpg" alt="blog-one">
                      <div class="blog-date">8 May,20</div>
                   </div>
                   <div class="blog-text">
                       <h3>Harleys In Hawaai</h3>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus alias dolore recusandae illum, corrupti quo
                           veniam saepe aliquid! Quis voluptates ratione consequuntur vel, perferendis cum provident? Magnam fugiat voluptas
                            libero.</p>
                   </div></a>
               </div>
               <div class="blogs">
                  <a href="#">
                  <div class="img">
                      <img src="images/post-two.jpg" alt="blog-two">
                      <div class="blog-date">16 Jan,20</div>
                  </div>
                  <div class="blog-text">
                      <h3>Key To Be Productive</h3>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt maiores,
                          recusandae cupiditate ducimus a non tempora, architecto obcaecati eaque ipsum assumenda harum dolorum iusto tenetur
                           eius eligendi dolor magnam sit!</p>
                  </div></a>
              </div>
              <div class="blogs">
                  <a href="#">
                  <div class="img">
                      <img src="images/post-three.jpg" alt="blog-three">
                      <div class="blog-date">30 Nov,19</div>
                  </div>
                  <div class="blog-text">
                      <h3>Caffeine Addict</h3>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo nostrum impedit
                          ipsam perspiciatis ratione sapiente quasi optio reprehenderit, labore consequuntur suscipit cum quas.
                           Officiis dolorem asperiores, ut necessitatibus quas doloremque?</p>
                  </div></a>
              </div>
              <div class="blogs">
                  <a href="#">
                  <div class="img">
                      <img src="images/post-four.jpg" alt="blog-four">
                      <div class="blog-date">6 Jul,19</div>
                  </div>
                  <div class="blog-text">
                      <h3>Web Development</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, veniam ratione quam vitae,
                           quibusdam explicabo rem debitis velit ipsa repellat, impedit nulla fuga? Amet corporis praesentium quae.
                            Sed, quibusdam necessitatibus.</p>
                  </div></a>
              </div>
              <div class="blogs">
                  <a href="#">
                  <div class="img">
                      <img src="images/post-five.jpg" alt="blog-five">
                      <div class="blog-date">1 Jun,19</div>
                  </div>
                  <div class="blog-text">
                      <h3>Work From Home</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sunt eum necessitatibus rem
                          dignissimos nulla mollitia cumque, provident officiis non vitae? Animi aut doloremque illum, soluta hic minus
                          sint explicabo..</p>
                  </div></a>
              </div>
              <div class="blogs">
                  <a href="#">
                  <div class="img">
                      <img src="images/post-six.jpg" alt="blog-six">
                      <div class="blog-date">28 Feb,19</div>
                  </div>
                  <div class="blog-text">
                      <h3>Business Trip</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempora dolorum fuga ratione, unde,
                          ex quaerat iste numquam nemo nihil nobis rem sint quia recusandae dignissimos quos ut rerum nam.</p>
                  </div></a>
              </div>
          </div>
             <!--copyright-section You Can Remove After Downloading-->
             <div class="footer">
              <div class="footer-text">
                  <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Willy Wonkas
              </div>
             </div>
     <!--copyright-section-->
      </div>
      <!--blog end-->
      <!--contact-->
   <div id="contact">
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
               <form id="myForm" action="#">
                  <div class="input-line">
                      <input  id="name" type="text" placeholder="Name" class="input-name">
                      <input id="email" type="email" placeholder="Email"  class="input-name">
                  </div>
                  <input type="text" id="subject" placeholder="subject" class="input-subject">
                  <textarea id ="body" class="input-textarea" placeholder="message"></textarea>
                  <button type="button" id ="submit" value="send">Submit</button>
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
                  <!--copyright-section You Can Remove After Downloading-->
                  <div class="footer">
                      <div class="footer-text">
                          <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Willy Wonkas
                      </div>
                     </div>
             <!--copyright-section-->
   </div>
      <!--contact end-->
  </div>
  <!--all the divisions-->
  <script src="js/jquery.min.js"></script>
  <script src="js/particles.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/index.js"></script>
  <!--particles script-->
<script>
  particlesJS("particles", {"particles":{"number":{"value":60,"density":{"enable":true,"value_area":800}},"color":{"value":"#fff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":7,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":500,"color":"#ffffff","opacity":0.4,"width":2},"move":{"enable":true,"speed":3,"direction":"bottom","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":0.5}},"bubble":{"distance":400,"size":4,"duration":0.3,"opacity":1,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>
    </body>
</html>
