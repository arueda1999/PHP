<?php
class MySQL {

    public $conexion;

    public function conec() {
        $this->conexion = mysqli_connect("localhost","root","","empresa");
        if (!$conexion) {
           die("Error al conectar la BD" . mysqli-error());
        }
        
        
        return $this->conexion;
    }

    public function ejecutar($consulta)
    {
        return mysqli_query($conexion, $consulta);
    }


}
?>

