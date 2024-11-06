<?php 
//Errores PHP
ini_set( 'display_errors', 'ON' );
error_reporting( E_ALL );


// Extraemos el array POST y creamos las variables con el nombre del campo y el prefijo $_
extract($_POST, EXTR_PREFIX_ALL, "");

// Incluimos el formulario
require_once 'index.php';

// Mostramos las clave enviada desde el formulario
echo "<hr>";
echo $_cla;
echo "<hr>";


// Encriptamos la clave
echo $_hash = password_hash($_cla, PASSWORD_DEFAULT,['cost' => 9]);
echo "<hr>";


// Hacemos la comparación de la clave con la clave encriptada
if (password_verify($_cla, $_hash)) {
	echo "Clave coincide";
}else{
	echo "Clave incorrecta";
}

