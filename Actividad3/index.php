<title>Ivan Torres Marcos</title>
<link rel="stylesheet" href="styles.css">
<img src="IMG_20230114_145106.jpg" alt="yo">
<br>
<br>

<!-- <?php
        echo ('<table border="1">');
        for ($i = 0; $i <= 10; $i++) {
            echo ('<td>' . $i . '</td>');
        }


        for ($rows = 1; $rows <= 10; $rows++) {
            echo ('<tr>');
            for ($col = 1; $col <= 10; $col++) {
                echo ('<td>' . $rows * $col . ' </td>');
            }
            echo ('</tr>');
        }
        echo ('</table>')
        ?>
 -->
<?php
echo ('<table border="1">');
echo ('<tr>'); //Empezamos las filas
echo ('<td>X</td>'); //Adimos la x

for ($i = 1; $i <= 10; $i++) { //Esto es para meter una primera fila al principio
    echo ('<td>' . $i . '</td>');
}


for ($rows = 1; $rows <= 10; $rows++) {
    echo ('<tr>');
    echo ('<td>' . $rows . '</td>'); // Agregamos la columna en la primera posición
    for ($col = 1; $col <= 10; $col++) {

        echo ('<td>' . $rows * $col . '</td>');
    }
    echo ('</tr>');
}
echo ('</table>')
?>