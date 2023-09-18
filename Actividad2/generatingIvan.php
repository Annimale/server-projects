<ul>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo ('<li><a href="#sec' . $i . '">Section '  . $i . '</li></a>');
    }

    ?>

</ul>


<?php
echo ('<h1>Negativo-Cero-Positivo</h1>');
$number = rand(-200, 200);
$result = $number <=> 0;
if ($result == -1) {
    echo ('El numero ' . $number . ' es negativo');
} else if ($result == 0) {
    echo ('El numero ' . $number . ' es cero');
} else {
    echo ('El numero ' . $number . ' es positivo');
}
?>

<?php
echo ('<h1>Nota media</h1>');
$finalmark = rand(0, 10);
switch ($finalmark) {
    case 0:
    case 1:
    case 2:
        $finalmark = 'Insuficiente';
        break;
    case 3:
        $finalmark = 'Necesita mejorar';
        break;
    case 4:
        $finalmark = 'Necesita mejorar';
        break;
    case 5:
        $finalmark = 'Aprobado justito';
        break;
    case 6:
        $finalmark = 'Aprobado';
        break;
    case 7:
        $finalmark = 'Notable bajo';
        break;
    case 8:
        $finalmark = 'Notable';
        break;
    case 9:
        $finalmark = 'Sobresaliente';
        break;
    case 10:
        $finalmark = 'Sobresaliente';
        break;
    default:
        echo ('Valor no valido');
        break;
}

?>
<p>Marina Fez tiene una nota media de <?= $finalmark ?></p>

<?php
$ntomultiply = rand(0, 100);

for ($i = 0; $i <= 20; $i++) {
}


?>
<h1>Tabla de multiplicar del <?= $ntomultiply ?></h1>