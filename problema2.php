<?php
// Ejemplo de Orden de Precedencia
$resultado = 2 + 3 * 4; 
echo "Resultado sin paréntesis: " . $resultado . " | ";
// Primero se evalúa la multiplicación (3 * 4), y luego se suma 
// el resultado a 2 (2 + 12), lo que da como resultado $resultado = 14.

$resultado = (2 + 3) * 4;
echo "Resultado con paréntesis: " . $resultado;

// Con paréntesis, primero se suma (2 + 3 = 5) y luego se multiplica por 4.
// El resultado sería 20.

?>
