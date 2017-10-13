<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mobius Designs - Architecture Firm</title>
    <meta name="description" content="An artichture firm based out of Dallas, TX with years of experience creating stunning buildings and structures.">

    <!-- STYLESHEETS BELOW -->
    <link rel="stylesheet" href="static/css/home_section.css">
    <link rel="stylesheet" href="static/css/project_section.css">
    <link rel="stylesheet" href="static/css/contact_section.css">
    <link rel="stylesheet" href="static/css/fontello.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("a").click(function(){
          $("html, body").stop().animate({scrollTop:$($.attr(this,"href")).offset().top},750);
          var e=$(this).attr("href");return e.indexOf("#contact")>=0&&$("#name").focus(),!1
        })

      // END OF JQUERY SECTION
      });
    </script>
  </head>



  <body>
    <!-- START OF LOGO AND NAVBAR SECTION -->
    <header>
      <div class="background" id="top"></div>
      <div class="header-container">
        <img class="logo" src="static/images/logo.png" alt="Logo_here">
        <nav class="nav-default">
          <ul>
            <li><a href="#top" class="active">Home</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- END OF LOGO AND NAVBAR SECTION -->


    <main>
      <!-- Start of the HOME section or the top of the page -->
      <div class="title-row">
        <h1 class="title">World Class Architecture Firm</h1>
        <p class="title-description">Based out of Dallas, TX, Mosbius Designs is an architecture firm with over 10 years of experience designing groundbreaking buildings. From commercial, business, to personal, we pride ourselves on creating state if the art buildings and exceeding expectations. If you are a business or individual in need of architectural services, you can get in touch with our company <a href="#"><b>here</b></a>.</p>
      </div>
      <!-- END of the HOME section or the top of the page -->







      <!-- START OF THE PROJECT SECTION/MIDDLE OF THE PAGE -->
      <div class="project-container">
        <ul class="project_list" id="projects">

          <li>
            <img class="tall_image" src="static/images/project_1_with_screen.jpg" alt="">
            <div class="project_description">
              <h1><b>Commerce Towers</b></h1>
              <p class="description">Sydney's premier center of commerce</p>
              <p class="place_of_project">Sydney, Australia</p>
            </div>
          </li>


          <li>
            <img class="tall_image" src="static/images/project_3_with_screen.jpg" alt="">
            <div class="project_description">
              <h1><b>The Downtown Plaza</b></h1>
              <p class="description">A major hub of commerce and business in downtown New York City</p>
              <p class="place_of_project">New York City, US</p>
            </div>
          </li>


          <li>
            <img class="tall_image" src="static/images/project_4_with_screen.jpg" alt="">
            <div class="project_description">
              <h1><b>Energy Plaza</b></h1>
              <p class="description">Headquarters for a major energy company in Washington DC</p>
              <p class="place_of_project">Washington DC, US</p>
            </div>
          </li>


          <li>
            <img class="wide_image" src="static/images/project_2_with_screen.jpg" alt="">
            <div class="project_description_wide">
              <h1><b>Speyer Museum</b></h1>
              <p class="wide-image-description">A museum in Berlin filled with centuries worth of relics from around the world.</p>
              <p class="place_of_project">Berlin, Germany</p>
            </div>
          </li>


          <li>
            <img class="wide_image" src="static/images/project_5_with_screen.jpg" alt="">
            <div class="project_description_wide">
              <h1><b>Axe Cafe</b></h1>
              <p class="wide-image-description">A major cafe in Paris, a popular place for both business and pleasure.</p>
              <p class="place_of_project">Paris, France</p>
            </div>
          </li>


          <li>
            <img class="wide_image" src="static/images/project_6_with_screen.jpg" alt="">
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
            <form class="contact-form" action="process_email.php" method="post">
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


        </div>


        <small>Hexagon graphic by <a href="https://thenounproject.com/abdulla_31">tnp_abdulla_31</a> from <a href="https://thenounproject.com/">TheNounProject</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Check out the new logo that I created on <a href="http://logomakr.com" title="Logo Maker">LogoMaker.com</a> https://logomakr.com/8bJcZs8bJcZs</small>
      </div>
      <!-- END OF THE CONTACT/FOOTER SECTION -->
    </footer>

    <!-- Google Map Code and Link Below -->
    <script type="text/javascript" src="static/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3zdVaEEyyZeHId9mYoK2pBQBbsVypMSE&callback=myMap"></script>

  </body>
</html>
