<?php 
ini_set('display_errors', "ON");

$timeTarget = 0.2; 

$coste = 9;
do {
    $coste++;
    $inicio = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, ["cost" => $coste]);
    $fin = microtime(true);
} while (($fin - $inicio) < $timeTarget);

echo "Coste conveniente encontrado: " . $coste . "\n";

// $hash = password_hash("123456", PASSWORD_DEFAULT,['cost' => 18]);
// if (password_verify('123456', $hash)) {
//     echo '¡La contraseña es válida!';
// } else {
//     echo 'La contraseña no es válida.';
// }







 ?>