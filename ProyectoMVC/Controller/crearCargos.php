<?php

require_once "../model/Data.php";

$cargo = new Cargo(null, $_POST["cargo"], $_POST["sueldo"]);

$cargo->adicionarCargo($cargo);


?>