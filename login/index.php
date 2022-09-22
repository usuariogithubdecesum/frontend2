<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <script src="js"></script>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
     
        <link rel="stylesheet" href="../bootstrap/css/estilos.css">



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body class="bg-dark">
   
 <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white ">
        <div class="container"><a class="navbar-brand logo " href="#"></a><img/assetsimg src="../dashboard/img/Logo Sam.png" style="width: 85px;"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-5">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="../index.html">Principal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../servicios.html">Servicios</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../about-us.html">Acerca de Nosotros</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../contactanos.html">Contactenos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./login/index.php">Inicio de Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>

 <div class="container-login">
    
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title`">Ingreso</span>
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">CONECTAR</button>
                    </div>
                </div>




   <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive rounded-circle" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>

 </body>
 <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>   
</html>