<?php
if (!defined('STDIN')) {
    define('STDIN');
  }
echo "Digite su nombre <br/>";
fscanf(STDIN, "%d", $nombre);
echo "Hola ". $nombre;
?>