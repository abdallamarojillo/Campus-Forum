<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/icons/MaterialIcons.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/icons/style.css"  media="screen,projection"/>
      <link rel="stylesheet" href="assets/animate/animate.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" type="image/png" href="assets/img/jclogo.png"/>
      <script>
        function login() {
            Materialize.toast('Please login first', 100000);
        }
      </script>
      <title>Jooust Connect</title>
    </head>

    <body>
        <!--Start Header Navigation-->
        <nav class="teal">
          <div class="nav-wrapper">
            <a id="logo_container" href="" class="brand-logo"><img class="logo" src="assets/img/jconnect.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="app/login/" ><i class="material-icons left">lock_open</i>Login</a></li>
              <li><a href="app/register/"><i class="material-icons left">assignment</i>Register</a></li>
              <li><a href="app/forum/" id="forum" onclick="login()"><i class="material-icons left">forum</i>Forum</a></li>
              <li><a href="#"><i class="material-icons left">info</i>Enquiry</a></li>
             
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="app/login/" >Login</a></li>
              <li><a href="app/register/">Register</a></li>
              <li><a href="app/forum/">Forum</a></li>
              <li><a href="#">Enquiry</a></li>
            </ul>
          </div>
        </nav>
        
        <!--End Header Naavigation-->
        <!--Start Image Banner Message--->
        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
              <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2" >Welcome Jooust Connect</h1>
                <div class="row center">
                  <h5 class="header col s12 light blue-text text-darken-2 animated infinite fadeInDown">
                    Connecting and Sharing
                  </h5>
                </div>
                <div class="row center">
                  <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons left">cloud</i>Connect</a>
                </div>
                <br><br>
        
              </div>
            </div>
            <div class="parallax"><img src="assets/img/jimg20.png" alt="All Working Image"></div>
        </div>
        <div class="row teal-text text-darken-2 ">
        <h1 class="tlt center">
          <ul class="texts">
             <li data-out-effect="fadeOut" data-out-shuffle="true">Experience the power of information exchange</li>   
             <li data-in-effect="fadeIn">Information is power</li>
          </ul>
        </h1>
      </div>
  
        
        <!--- End Image Banner Message--->
        
        <!--Start Center Message--->
          <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">chat</i></h2>
            <h5 class="center">Information Exchange</h5>

            <p class="light">Engage in information exchange through forums and expand your knowledge power.
            Information is power.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Brotherhood</h5>

            <p class="light">Learn cultures of different people via Jooust Connect, get to be worldly and have
            concern about others</p>
          </div>
        </div>

        <div class="col s12 m4">
          <h2 class="center brown-text"><i class="material-icons">group</i></h2>
          <h5 class="center">Briefly Explore in Images</h5>
         <!--Carousel-->
          
          <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="assets/img/jimg5.png"></a>
            <a class="carousel-item" href="#two!"><img src="assets/img/jimg6.png"></a>
            <a class="carousel-item" href="#three!"><img src="assets/img/jimg7.png"></a>
            <a class="carousel-item" href="#four!"><img src="assets/img/jimg8.png"></a>
            <a class="carousel-item" href="#five!"><img src="assets/img/jimg9.png"></a>
          </div>
              
          <!--End Carousel-->
        </div>
      </div>

    </div>
  </div>
        <!---End Center Message-->
        
        
        
        <!--Images-->
         <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot ">
      <div class="container ">
        <div class="row center">
          <h5 class="header col s12 light italic">
           It's not just another online forum, but as well as academic and social platform.
          </h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/img/jimg10.png" alt="Unsplashed background img 2"></div>
  </div>

  
        <!--Images-->
        <!--Footer-->
        <footer class="page-footer teal darken-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m4">
                <h5 class="white-text">Our Philosophy</h5>
                <p class="grey-text text-lighten-4">
                  We at Jooust Connect enjoy a philosophy that satisfies both the modern and ancient practising of true Campus life.
                  "Wisdom is knowing we are all one. Love is what it feels like. and compasion is what it acts like. 
                </p>
              </div>
              <div class="col s12 m4">
                <h5 class="white-text"><i class="prefix material-icons">location_on</i>Locate us</h5>
                <ul>
                  <div class="google-maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16603.441738567377!2d34.258742376483625!3d-0.09103843124567364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ssw!2ske!4v1468859221465" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </ul>
              </div>
              <div class="col s12 m4">
                <h5 class="white-text">Our Contacts</h5>
                <ul>
                  <li><i class="tiny material-icons">email</i><a class="grey-text text-lighten-3" href="#!">jooustconnect@gmail.com</a></li>
                  <li><i class="tiny material-icons">phone</i><a class="grey-text text-lighten-3" href="#!">0727014069</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright teal">
            <div class="container center">
            Copyrights © Jooust Connect 2016. All Rights Resered
           
            </div>
          </div>
        </footer>
        <!--End Footer-->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="assets/js/jquery-3.1.0.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="assets/js/sidenav.js"></script>
      <script type="text/javascript" src="assets/js/carousel.js"></script>
      <script type="text/javascript" src="assets/js/jquery.lettering.js"></script>
      <script type="text/javascript" src="assets/js/jquery.textillate.js"></script>
      <script type="text/javascript" src="assets/js/textillateMod.js"></script>
    </body>
  </html>