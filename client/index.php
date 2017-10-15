<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mobius Designs - Architecture Firm</title>
    <meta name="description" content="An artichture firm based out of Dallas, TX with years of experience creating stunning buildings and structures.">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/ico" href="static/images/architecture_favicon.ico">

    <!-- STYLESHEETS BELOW -->
    <link rel="stylesheet" href="static/css/home_section.css">
    <link rel="stylesheet" href="static/css/project_section.css">
    <link rel="stylesheet" href="static/css/contact_section.css">
    <link rel="stylesheet" href="static/css/fontello.css">

    <!-- JQUERY SCRIPTS BELOW -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="static/js/jquery_scripts.min.js"></script>
    <script type="text/javascript" src="static/js/navbar_jquery.min.js"></script>

  </head>



  <body id="top">
    <!-- START OF LOGO AND NAVBAR SECTION -->
    <header>
      <div class="background"></div>
      <div class="header-container default">
        <div class="navbar">
          <img class="logo" src="static/images/logo-min.png" alt="Logo_here">
          <nav class="nav-default">
            <ul>
              <li><a href="#top" class="active home_nav">Home</a></li>
              <li><a href="#projects" class="project_nav">Projects</a></li>
              <li><a href="#contact" class="contact_nav">Contact</a></li>
            </ul>
          </nav>
          <div class="hamburger">
            <button type="button" name="button"><img class="hamburger-icon" src="static/images/hamburger-min.png" alt="Hamburger Icon"></button>
          </div>
        </div>
        <div class="hamburger-list">
          <ul class="">
            <li><a href="#top"  class="active home_nav">Home</a></li>
            <li><a href="#projects" class="project_nav">Projects</a></li>
            <li><a href="#contact" class="contact_nav">Contact</a></li>
          </ul>
        </div>
      </div>
    </header>
    <!-- END OF LOGO AND NAVBAR SECTION -->


    <main>
      <!-- Start of the HOME section or the top of the page -->
      <div class="title-row">
        <h1 class="title">World Class Architecture Firm</h1>
        <p class="title-description">Based out of Dallas, TX, Mosbius Designs is an architecture firm with over 10 years of experience designing groundbreaking buildings. From commercial, business, to personal, we pride ourselves on creating state if the art buildings and exceeding expectations. If you are a business or individual in need of architectural services, you can get in touch with our company <a href="#contact"><b>here</b></a>.</p>
        <h3 class="looking-to-hire title-links"><a href="#contact">I'm Looking to Hire </a><span class="chevron"> > </span> </h3>
        <button  class="need-building title-links" type="button"> I Need a Building<span class="chevron"> > </span> </button>
        <p class="note"><small>*This website is merely an example, Mosbius Designs, all building names and locations are fictional. Any resemblence to real life locations or organizations is merely coincidence </small></p>

        <form class="building-form" action="process_building_form.php" method="post">
          <div class="building-form-inputs">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
          </div>
          <textarea name="message" rows="8" placeholder="General Idea of Building or Message to Architecture Firm" required></textarea>
          <input type="submit" name="" value="Submit">
        </form>
      </div>
      <!-- END of the HOME section or the top of the page -->







      <!-- START OF THE PROJECT SECTION/MIDDLE OF THE PAGE -->
      <div class="project-container">
        <ul class="project_list" id="projects">

          <li>
            <img class="tall_image" src="static/images/project_1_with_screen-min.jpg" alt="">
            <div class="project_description">
              <h1><b>Commerce Towers</b></h1>
              <p class="description">Sydney's premier center of commerce</p>
              <p class="place_of_project">Sydney, Australia</p>
            </div>
          </li>


          <li>
            <img class="tall_image" src="static/images/project_3_with_screen-min.jpg" alt="">
            <div class="project_description">
              <h1><b>The Downtown Plaza</b></h1>
              <p class="description">A major hub of commerce and business in downtown New York City</p>
              <p class="place_of_project">New York City, US</p>
            </div>
          </li>


          <li>
            <img class="tall_image" src="static/images/project_4_with_screen-min.jpg" alt="">
            <div class="project_description">
              <h1><b>Energy Plaza</b></h1>
              <p class="description">Headquarters for a major energy company in Washington DC</p>
              <p class="place_of_project">Washington DC, US</p>
            </div>
          </li>


          <li>
            <img class="wide_image" src="static/images/project_2_with_screen-min.jpg" alt="">
            <div class="project_description_wide">
              <h1><b>Speyer Museum</b></h1>
              <p class="wide-image-description">A museum in Berlin filled with centuries worth of relics from around the world.</p>
              <p class="place_of_project">Berlin, Germany</p>
            </div>
          </li>


          <li>
            <img class="wide_image" src="static/images/project_5_with_screen-min.jpg" alt="">
            <div class="project_description_wide">
              <h1><b>Axe Cafe</b></h1>
              <p class="wide-image-description">A major cafe in Paris, a popular place for both business and pleasure.</p>
              <p class="place_of_project">Paris, France</p>
            </div>
          </li>


          <li>
            <img class="wide_image" src="static/images/project_6_with_screen-min.jpg" alt="">
            <div class="project_description_wide">
              <h1><b>Magnolia Building</b></h1>
              <p class="wide-image-description">Detroit's Premier sci-fi and gaming convention.</p>
              <p class="place_of_project">Detroit, US</p>
            </div>
          </li>

        </ul>
      </div>
    </main>
      <!-- END OF THE PROJECT SECTION/MIDDLE OF THE PAGE -->

    <footer>
      <!-- START OF THE CONTACT/FOOTER SECTION -->
      <div class="contact-section">
        <div id="map"> </div> <!-- Google map here -->

        <div class="contact-container" id="contact">
          <!-- START OF CONTACT INFO-->
          <div class="contact-left-half">
            <img class="profile" src="static/images/profile-min.jpg" alt="Profile Pic Here">
            <p class="number"><a href="tel:4326380512">+1 (432) 638-0512</a></p>
            <ul class="contact-list">
              <li>
                <a href="https://github.com/jerrodq2">
                  <span class="icon-github icon" ></span>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/jerrodquintana/">
                  <span class="icon-linkedin icon" ></span>
                </a>
              </li>
              <li>
                <a href="mailto:jerrodq2@yahoo.com">
                  <span class="icon-mail icon" ></span>
                </a>
              </li>
            </ul>
          </div>
          <!-- END OF CONTACT INFO-->

          <!-- START OF CONTACT FORM -->
          <div class="contact-right-half">
            <form class="contact-form" action="process_contact_form.php" method="post">
              <div class="text-fields">
                <input type="text" name="name" value="" placeholder="Name" required id="name">
                <input type="email" name="email" value="" placeholder="Email">
                <input type="text" name="phone" value="" placeholder="Phone">
              </div>
              <textarea name="message" placeholder="Message" rows="6" required></textarea>
              <input type="submit" class="button" name="submit" value="Submit">
            </form>
          </div>
          <!-- START OF CONTACT FORM -->

          <p class="copyright">© 2017 Jerrod Quintana </p>
          <p class="copyright see-code">See code on my Github <a href="https://github.com/jerrodq2/architecture_advertising_site">here.</a></p>
        </div>

      </div>
      <!-- END OF THE CONTACT/FOOTER SECTION -->
    </footer>

    <!-- Google Map Code and Link Below -->
    <script type="text/javascript" src="static/js/map.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3zdVaEEyyZeHId9mYoK2pBQBbsVypMSE&callback=myMap"></script>

  </body>
</html>
