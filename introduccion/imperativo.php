<?php

$color1 = (object)["remera"=>"roja", "gorra"=>"azul"];
$color2 = (object)["remera"=>"negra", "gorra"=>"blanca"];

function ropa($color) {

	echo"<p>Remera: $color->remera, Gorra: $color->gorra</p>";

}

ropa($color1);

ropa($color2);

?>