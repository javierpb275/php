<?php 

//Funciones sin parametros:
function bienvenida() {

	echo "Bienvenido a php!";
}

bienvenida();

echo '<br><br>';

//Funciones con parametros:
function saludar($hola) {

	echo $hola;
}

saludar("Hello everyone");

?>