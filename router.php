<?php

include_once("controladores/controlador_".$controlador.".php");
$objControlador = "Controlador".ucfirst($controlador);
$controlador = new $objControlador();
$controlador->$accion();


?>