<?php
session_start();

?>
<!doctype html>
<html0 xmlns:fb="//ogp.me/ns/fb#">
<link rel="icon" href="img/logo.ico">
  <head>
  
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//ssa.datafactory.la" />
    <link rel="dns-prefetch" href="//platform.twitter.com" />
    <link rel="dns-prefetch" href="//connect.facebook.net" />
    <link rel="dns-prefetch" href="//www.google-analytics.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//1287719000.rsc.cdn77.org" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">



    <style type="text/css">
      .generalBody {
        padding: 0;
        margin: 0;
      }
    </style>
    <title>Solo Fuchi</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
  </head>

    <div class="container-fluid">
     <body class="generalBody">
    <nav class="navbar navbar-dark bg-dark">
       <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo.png" alt="">Solo Fuchi</a>
        <?php
        if (isset($_SESSION['sesion']) && $_SESSION['sesion'] == true) {
          echo '<a class="nav-link" href="cerrar_sesion.php">Cerrar Sesión</a>';
          echo '<a class="nav-link">Usuario: ' . $_SESSION['user'] . '</a>';
          echo '<img src="' . $_SESSION['foto'] . '" alt="Foto de Perfil" class="profile-pic">';
        }
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iniciodesesion.php">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="comentarios.php">Comentarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nuevoarticulo.php">Subir Articulo</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>