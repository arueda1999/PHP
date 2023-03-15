<?php
include_once "Conexion.php";
class Data{

    private $con;

    public function __construct()
    {
        $this->con = new Conexion("localhost","root","","empresa");
     
    }

    public function getEmpleado()
    {
        $empleado = array();
        $consulta = "select * from empleado";
        $resultado = $this->con->ejecutar($consulta);
        
        while($reg = mysqli_fetch_array($resultado))
            $emp = new Empleado();
            $emp->id = $empleado[0];
            $emp->tipoDocumento = $empleado[1];
            $emp->numeroIdentificacion = $empleado[2];
            $emp->nombreEmpleado = $empleado[3];
            $emp->apellidoEmpleado = $empleado[4];
            $emp->FechaNacimiento = $empleado[5];
            $emp->cargo = $empleado[6];
            $emp->sueldo = $empleado[7];
            $emp->fechaIngreso = $empleado[8];

            array_push($empleado, $emp);
            
            
        return $empleado;

    }

}
?>