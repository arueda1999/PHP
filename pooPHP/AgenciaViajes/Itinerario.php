<?php
require_once("Cliente.php");
require_once("Vuelo.php");

$vuelo =  array();

for ($i=0; $i < 5 ; $i++) { 
    $vuelo[$i] = new Vuelo($_POST['origen'],$_POST['destino'],$_POST['hora'],$_POST['minutos']);
    //$vuelo[$i] = $vuelo->setOrigen($_POST['origen']);
    //$vuelo[$i] = $vuelo->setDestino($_POST['destino']);
    //$vuelo[$i] = $vuelo->setHora($_POST['hora']);
    //$vuelo[$i] = $vuelo->setMinuto($_POST['minutos']);
}

var_dump($vuelo);

/*$vuelo = [["origen"=>"BOG", "destino"=>"PEI", "hora"=>14, "minuto"=>30, "precio"=> 15000], 
["origen"=>"BOG", "destino"=>"PEI", "hora"=>8, "minuto"=>20],
["origen"=>"BOG", "destino"=>"PEI", "hora"=>20, "minuto"=>15],
];*/
echo "<hr>";
echo "El vuelo es :" . $vuelo->buscarVuelo($vuelo, $_POST["origen"],$_POST["destino"], $_POST["horaI"], $_POST["horaF"] )
?>