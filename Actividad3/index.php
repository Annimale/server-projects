<title>Ivan Torres Marcos</title>
<link rel="stylesheet" href="styles.css">
<img src="IMG_20230114_145106.jpg" alt="yo">
<br>
<br>



<?php
echo ('<table border="1">');
echo ('<tr style="background-color: blue;">'); // Primera fila en azul
echo ('<td style="background-color: red;">X</td>'); // Primera celda en rojo

for ($i = 1; $i <= 10; $i++) { // Esto es para la primera fila
    echo ('<td>' . $i . '</td>');
}
echo ('</tr>');

for ($rows = 1; $rows <= 10; $rows++) {
    echo ('<tr');
    if ($rows % 2 == 0) {
        echo (' style="background-color: yellow;"'); // Filas pares en amarillo
    } else {
        echo (' style="background-color: green;"'); // Filas impares en verde
    }
    echo ('>'); //Aqui cerramos el tr
    echo ('<td style="background-color: blue;">' . $rows . '</td>'); // Primera columna en azul
    for ($col = 1; $col <= 10; $col++) {
        echo ('<td>' . $rows * $col . '</td>');
    }
    echo ('</tr>'); // Cerramos filas
}
echo ('</table>');
?>




/** Haz un programa para que el usuario juegue a adivinar un número.
* Obtén un número al azar (busca por internet cómo se hace o simplemente guarda el número que quieras en una variable)
* y ve pidiendo al usuario que introduzca un número.
* Si es el que busca le dices que lo ha encontrado y si no le mostrarás si el número que busca el mayor o menor que el introducido.
* El juego acaba cuando el usuario encuentra el número o cuando pulsa en 'Cancelar' (en ese caso le mostraremos un mensaje de que ha cancelado el juego).
*/

function adivinarNumero(){
let generatedNumber = Math.floor(Math.random()*5) + 1;
console.log(generatedNumber);
let guessedNumber = 0;
guessedNumber = prompt('Introduce un numero');
console.log(guessedNumber);

if (guessedNumber != generatedNumber) {
if (guessedNumber < generatedNumber) { guessedNumber=prompt('El numero es mayor que el que has introducido! vuelve a intentarlo'); } else { guessedNumber=prompt('El numero es menor que el que has introducido! vuelve a intentarlo'); } } else { alert('Correcto! el numero era '+generatedNumber);
    }
    
    alert(' Correcto! el numero era '+generatedNumber);
}

adivinarNumero();