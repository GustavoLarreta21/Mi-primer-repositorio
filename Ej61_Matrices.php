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

$vA=100;
$vB=500;

for ($i=0; $i < 3 ; $i++) { 
	for ($j=0; $j < 3; $j++) { 
		$matA[$i][$j] = $vA;
		$matB[$i][$j] = $vA;
		$matC[$i][$j] = $vA + $vB;

		$vA=$vA + 10;
		$vB=$vB + 20;
	}
	
}
echo $matA, "<br>";
echo $matB, "<br>";
echo $matC, "<br>";
?>

</body>
</html>