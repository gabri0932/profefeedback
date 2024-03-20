<?php
    session_start();
    include("../resource/controller.php");
    noset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../icons/icon.jpg">
    <link rel="stylesheet" href="appcss/style.css">
    <title>Foro-Maestro</title>
</head>
<body>
    <?php 
        include("../data/header.php");
        include("../data/menu_lateral.php");
    ?>
    <div class="informacion">
        <div class="bienvenido">
            <p>¡Bienvenidos a nuestra plataforma de puntuación de profesores y 
                escuelas! En nuestra comunidad, podrás evaluar y compartir tus 
                experiencias sobre diferentes instituciones educativas. Entre las 
                escuelas disponibles para puntuar se encuentran:</p>
        </div>
            
                    <ul class="lista">
                        <li><a href="school/jp.php">Politecnico Francisco Jose Peynado</a></li>
                        <li><a href="school/Loyola.php">Politecnico Loyola</a></li>
                        <li><a href="school/Alfarero.php">Alfarero</a></li>
                        <li><a href="school/rafael.php">San Rafael</a></li>
                        <li><a href="school/bautista.php">Colegio Baustita</a></li>
                        <li><a href="school/liceo.php">Liceo Americo Lugo</a></li>
                        <li><a href="school/moscu.php">Moscu</a></li>
                    </ul>
                    <img src="../icons/icon.jpg" alt="" class="logo">
                    </div>
                    <div class="linea5"></div>
                </body>
</html>