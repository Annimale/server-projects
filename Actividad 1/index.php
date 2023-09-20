<!DOCTYPE html>
<html lang="es">
/**
* Autor: Ivan Torres Marcos
* Versión: 2.0
* Descripción: Portfolio supremo.
*/


<head>
    <?php include_once(__DIR__ . '\INC PHPs\header.inc.php'); ?>
</head>

<body>
    <?php include_once(__DIR__ . '\INC PHPs\nav.inc.php'); ?>
    <header>
        <h1>Personal data</h1>
    </header>

    <div class="data">
        <ul>
            <li><b>Name:</b> Iván</li>
            <li><b>Surnames:</b> Torres Marcos</li>
            <li><b>Birth date:</b> 11th of May, 1998</li>
            <li><b>Bizum:</b> 640 22 42 26</li> <!--I'd have liked to add an icon of bizum but I couldn't find it -->
            <li><b>Place of birth:</b> Valencia</li>
            <li>
                <b>E-mail:</b>
                <a href="mailto:skrillexgamesdef@gmail.com">skrillexgamesdef@gmail.com</a>
            </li>
        </ul>
        <img src="MEDIA\IMG_20230114_145106.jpg" alt="IvanPhoto"> //Img added

    </div>

</body>
<?php include_once('INC PHPs\footer.inc.php'); ?>

</html>