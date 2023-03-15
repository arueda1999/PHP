<?php
$edad = $_GET[''];

if($edad >= 0 && $edad <12)
{
    echo 'Eres un niño';
}
elseif ($edad<18) {
    echo 'Eres un adolescente';
}
elseif ($edad < 30) {
    echo 'Eres joven adulto';
}
elseif ($edad < 55) {
    echo 'Eres un adulto';
}
else {
    echo 'Eres un adulto mayor';
}