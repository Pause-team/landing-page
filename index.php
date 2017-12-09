<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pause</title>

    <!--mine-->
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Pause</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>Pause</h1>
          <h6>Automatically track what you're watching.</h6>
          <hr class="intro-divider">
          <ul class="list-inline intro-social-buttons">
            <!--<li class="list-inline-item">
              <a href="#" class="btn btn-secondary btn-lg" onclick="signIn3();">
                <i class="fa fa-twitter fa-fw"></i>
                <span class="network-name">Twitter</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-secondary btn-lg" onclick="signIn2();" >
                <i class="fa fa-facebook fa-fw"></i>
                <span class="network-name">Facebook</span>
              </a>
            </li>-->
            <li class="list-inline-item">
              <a href="#" class="btn btn-secondary btn-lg" id="chromeSignIn">
                <i class="fa fa-google fa-fw"></i>
                <span class="network-name">Google</span>
              </a>
            </li>
          </ul>
          <h6>Download Our Extension</h6>
          <ul class="list-inline intro-social-buttons">
          <li class="list-inline-item">
              <a href="https://github.com/Pause-team/Pause/releases/download/1.0.0/chrome_extension.crx" class="btn btn-secondary btn-lg">
                <i class="fa fa-chrome fa-fw"></i>
                <span class="network-name">Chrome Extension</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <section  class="content-section-a">

      <div class="container">
        <div class="row">
          <div class="col-lg-5 ml-auto">
            <img style="width: 200pt" src="img/icon.png">
          </div>
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 id='about' class="section-heading">Pause</h2>
            <p class="lead">Keep track of all your TV shows and movies from one location. <b>Pause</b> uses a Google Chrome extension to track your movie data and seamlessly update your playlist.</p>
          </div>
        </div>

      </div>
      <!-- /.container -->
    </section>

    <aside class="banner">

      <div class="container">

        <div class="row">
          <div class="col-lg-6 my-auto">
            <h2 id='contact' style='font-size:30px' >
              Contact Us
            </h2>
            <h5>Help us serve you better</h5>
          </div>
          <div class="col-lg-6 my-auto">
            <p style='font-size:30px'>
                <a href="mailto:pauseentertainmentteam@gmail.com" class="btn btn-secondary btn-lg">
                  <i class="fa fa-envelope fa-fw"></i>
                  pauseentertainmentteam@gmail.com
                </a>
              </p>
          </div>
        </div>

      </div>
      <!-- /.container -->

    </aside>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a style ="color:#868e96" href="#">Home</a>
          </li>
         <!-- <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a style ="color:#868e96" href="#about">About</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#services">Services</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a style ="color:#868e96" href="#contact">Contact</a>
          </li>-->
        </ul>
        <p class="copyright text-muted small">Copyright &copy; Pause 2017. All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.6.0/firebase.js"></script>
        <script>
          // Initialize Firebase
          var config = {
            apiKey: "AIzaSyC3FpISPgUilSgSmpm-pjOUPlRp8nYwm5Q",
            authDomain: "pause-fb19e.firebaseapp.com",
            databaseURL: "https://pause-fb19e.firebaseio.com",
            projectId: "pause-fb19e",
            storageBucket: "pause-fb19e.appspot.com",
            messagingSenderId: "714359295912"
          };
          firebase.initializeApp(config);
        </script>
            <script>
        var provider = new firebase.auth.GoogleAuthProvider();
        $('#chromeSignIn').click(function() {

            firebase.auth().signInWithPopup(provider).then(function(result) {
            // This gives you a Google Access Token. You can use it to access the Google API.
            var token = result.credential.accessToken;
            // The signed-in user info.
            user = result.user;
            //alert(JSON.stringify(user));
            console.log(JSON.stringify(user));
            var data = { type: "FROM_PAGE", text: JSON.stringify(user) };
            window.postMessage(data, "*");
            // $("#bnlah").html();
            //   window.user = user;
            showWelcomeContainer();


            }).catch(function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // The email of the user's account used.
            var email = error.email;
            $("#bnlah").html(JSON.stringify(error));
            // The firebase.auth.AuthCredential type that was used.
            var credential = error.credential;
            // ...
            });
        });

    </script>


    <!-- facebook -->
    <script>
      var provider2 = new firebase.auth.FacebookAuthProvider();
      //firebase.auth().signInWithRedirect(provider2);
      function signIn2(){
            firebase.auth().signInWithPopup(provider2).then(function(result) {
            // This gives you a Facebook Access Token. You can use it to access the Facebook API.
            var token = result.credential.accessToken;
            // The signed-in user info.
            var user = result.user;
            // ...
          }).catch(function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // The email of the user's account used.
            var email = error.email;
            // The firebase.auth.AuthCredential type that was used.
            var credential = error.credential;
            // ...
          });
      }
    </script>


    <script>
      var provide3 = new firebase.auth.TwitterAuthProvider();
      function signIn3(){
          firebase.auth().signInWithPopup(provide3).then(function(result) {
          // This gives you a the Twitter OAuth 1.0 Access Token and Secret.
          // You can use these server side with your app's credentials to access the Twitter API.
          var token = result.credential.accessToken;
          var secret = result.credential.secret;
          // The signed-in user info.
          var user = result.user;
          // ...
        }).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // The email of the user's account used.
          var email = error.email;
          // The firebase.auth.AuthCredential type that was used.
          var credential = error.credential;
          // ...
        });
      }
    </script>
  </body>

</html>
