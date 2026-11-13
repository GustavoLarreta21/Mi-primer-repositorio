<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Numeros</title>
</head>
<body>

<h2>REGISTRO DE NUMEROS</h2>

<!-- Formulario de captura -->
<form method="POST" action="">

<?php
// Ciclo para mostrar tres renglones de captura
for ($i = 0; $i < 3; $i++) {
echo "Numero 1:";
echo "<input type='number' name='numero1[]' min='51' max='99'>" . " ";

echo "Numero 2:";
echo "<input type='number' name='numero2[]' min='-50' max='-1'>" . " ";
echo "<br><br>";
}

?>

<!-- Botón para guardar y calcular -->
<button type="submit" name="guardar" value="guardar">
Guardar y calcular </button>

<?php
// Verificar si se presionó el botón Guardar
if (isset($_POST['guardar'])) {

// Guardar los datos en tres arreglos
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

// Declarar los arreglos de resultados
$suma = array();
$resta = array();
$multiplicacion = array();
$division = array();

// Ciclo para realizar los cálculos
for ($i = 0; $i < 3; $i++) {

// Calcular suma
$suma[$i] = $num1[$i] + $num2[$i];

// Calcular la resta
$resta[$i] = $num1[$i] - $num2[$i];

// Calcular multiplicacion
$multiplicacion[$i] = $num1[$i] * $num2[$i];

// Calcular division
$division[$i] = $num1[$i] / $num2[$i];
}
// Imprimir el arreglo de productos
echo "<h3>ARREGLO DEl NUMERO 1</h3>";

for ($i = 0; $i < 3; $i++) {
echo "#" . number_format($num1[$i], 2) . "<br>";
}

// Imprimir el arreglo de precios
echo "<h3>ARREGLO DEL NUMERO 2</h3>";

for ($i = 0; $i < 3; $i++) {
echo "#" . number_format($num2[$i], 2) . "<br>";
}

// Imprimir el arreglo de cantidad
echo "<h3>ARREGLO DE SUMA</h3>";

for ($i = 0; $i < 3; $i++) {
echo "#" . number_format($suma[$i], 2) . "<br>";
}

// Imprimir el arreglo de subtotales
echo "<h3>ARREGLO DE RESTA</h3>";

for ($i = 0; $i < 3; $i++) {

echo "#" . number_format($resta[$i], 2) . "<br>";
}

// Imprimir el arreglo de IVA
echo "<h3>ARREGLO DE MULTIPLICACION</h3>";

for ($i = 0; $i < 3; $i++) {
echo "#" . number_format($multiplicacion[$i], 2) . "<br>";
}

// Imprimir el arreglo de totales
echo "<h3>ARREGLO DE DIVISION</h3>";

for ($i = 0; $i < 3; $i++) {
echo "#" . number_format($division[$i], 2) . "<br>";
}

}

?>

</body>
</html>