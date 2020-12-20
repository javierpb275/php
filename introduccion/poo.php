<?php

class Color {

	public $remera;
	public $gorra;

	public function ropa() {

		echo "<p>Remera: $this->remera, Gorra: $this->gorra</p>";

	}

}

$a = new Color();

$a -> remera = "roja";
$a -> gorra = "azul";

$a -> ropa();


$b = new Color();

$b -> remera = "verde";
$b -> gorra = "amarilla";

$b -> ropa();

?>