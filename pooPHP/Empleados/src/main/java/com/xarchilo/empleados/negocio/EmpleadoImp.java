/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.xarchilo.empleados.negocio;

import com.xarchilo.empleados.data.Conexion;
import com.xarchilo.empleados.interfaces.interfazEmpleado;

import com.xarchilo.empleados.modelo.Empleado;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;




/**
 *
 * @author luzam
 */
public class EmpleadoImp extends Conexion implements interfazEmpleado{
     PreparedStatement pstEmpleados;
     ResultSet rsEmpleados;
     Empleado empleado = new Empleado();
     String query="";
     private List <Empleado> listEmpleado = new ArrayList<>();
    
    public List<Empleado> findAll() {
     this.query="SELECT * FROM Empleados";
     
     try{
         if (this.getConnection()!=null) {
     this.pstEmpleados=this.getConnection().prepareStatement(query);
     this.rsEmpleados=this.pstEmpleados.executeQuery();
     while(this.rsEmpleados.next()){
     Empleado empleado = new Empleado();
            empleado.setId(this.rsEmpleados.getLong("id"));
            empleado.setTipo_documento(this.rsEmpleados.getString("tipo_documento"));
            empleado.setNumero_documento(this.rsEmpleados.getLong("numero_documento"));
            empleado.setNombres(this.rsEmpleados.getString("nombres"));
            empleado.setApellidos(this.rsEmpleados.getString("apellidos"));
            empleado.setDepartamento_id(this.rsEmpleados.getLong("departamento_id"));
            empleado.setDireccion(this.rsEmpleados.getString("direccion"));
            empleado.setCorreo_electronico(this.rsEmpleados.getString("correo_electronico"));
            empleado.setTelefono(this.rsEmpleados.getLong("telefono"));
            empleado.setFecha_hora_crea(this.rsEmpleados.getDate("fecha_hora_crea"));
            empleado.setFecha_hora_modifica(this.rsEmpleados.getDate("fecha_hora_modifica"));
            this.listEmpleado.add(empleado);
     }
     }
    else {
             System.out.println("Fallo la conexion");
         }   
     }catch(Exception e){
     }
     return listEmpleado;
    }

    
    public Empleado listEmpleados(long id) {
     this.query="SELECT * FROM Empleados WHERE id=?";
      Empleado empleado = new Empleado();
     try{
if (this.getConnection()!=null) {
     this.pstEmpleados=this.getConnection().prepareStatement(query);
     this.pstEmpleados.setLong(1,id);
     this.rsEmpleados=this.pstEmpleados.executeQuery();
     rsEmpleados=pstEmpleados.executeQuery();
     while(rsEmpleados.next()){
            empleado.setId(this.rsEmpleados.getLong("id"));
            empleado.setTipo_documento(this.rsEmpleados.getString("tipo_documento"));
            empleado.setNumero_documento(this.rsEmpleados.getLong("numero_documento"));
            empleado.setNombres(this.rsEmpleados.getString("nombres"));
            empleado.setApellidos(this.rsEmpleados.getString("apellidos"));
            empleado.setDepartamento_id(this.rsEmpleados.getLong("departamento_id"));
            empleado.setDireccion(this.rsEmpleados.getString("direccion"));
            empleado.setCorreo_electronico(this.rsEmpleados.getString("correo_electronico"));
            empleado.setTelefono(this.rsEmpleados.getLong("telefono"));
            empleado.setFecha_hora_crea(this.rsEmpleados.getDate("fecha_hora_crea"));
            empleado.setFecha_hora_modifica(this.rsEmpleados.getDate("fecha_hora_modifica"));
         
     }
}
else   {
    System.out.println("Fallo la conexion");
}
     
     }catch(Exception e){
     }
     return empleado;
    }

    @Override
    public boolean add(Empleado emp) {
        
         this.query="INSERT INTO Empleados VALUES(?,?,?,?,?,?,?,?)";
    try{
if (this.getConnection()!=null) {
     this.pstEmpleados=this.getConnection().prepareStatement(query);
     this.pstEmpleados.setString(1, empleado.getTipo_documento());
     this.pstEmpleados.setLong(2, empleado.getNumero_documento());
     this.pstEmpleados.setString(3, empleado.getNombres());
     this.pstEmpleados.setString(4, empleado.getApellidos());
     this.pstEmpleados.setLong(5, empleado.getDepartamento_id());
     this.pstEmpleados.setString(6, empleado.getDireccion());
     this.pstEmpleados.setString(7, empleado.getCorreo_electronico());
     this.pstEmpleados.setLong(8, empleado.getTelefono());
     this.pstEmpleados.executeUpdate();
    
} else {System.out.println("Fallo la conexion");}
    }catch(Exception e){}
    return false;    
    }

     @Override
    public boolean actualizarEmpleado(Empleado empleado) {
      
    this.query="UPDATE  Empleados SET id=?,tipo_documento=?,numero_documento=?,nombres=?,apellidos=?,departamento_id=?,direccion=?,correo_electronico=?,telefono=?,fecha_hora_crea=?,fecha_hora_modifica=? where id=?";
    try{
if (this.getConnection()!=null) {
     this.pstEmpleados=this.getConnection().prepareStatement(query);
     this.pstEmpleados.setLong(1, empleado.getId());
     this.pstEmpleados.setString(2, empleado.getTipo_documento());
     this.pstEmpleados.setLong(3, empleado.getNumero_documento());
     this.pstEmpleados.setString(4, empleado.getNombres());
     this.pstEmpleados.setString(5, empleado.getApellidos());
     this.pstEmpleados.setLong(6, empleado.getDepartamento_id());
     this.pstEmpleados.setString(7, empleado.getDireccion());
     this.pstEmpleados.setString(8, empleado.getCorreo_electronico());
     this.pstEmpleados.setLong(9, empleado.getTelefono());
     this.pstEmpleados.setDate(10, (Date) empleado.getFecha_hora_crea());
     this.pstEmpleados.setDate(11, (Date) empleado.getFecha_hora_modifica());
     this.pstEmpleados.executeUpdate();
} else {System.out.println("Fallo la conexion");}
    }catch(Exception e){}
    return false;
    }

    @Override
    public boolean eliminar(long id) {
        this.query="DELETE FROM Empleados WHERE id=?";
        try{
if (this.getConnection()!=null) {
     this.pstEmpleados=this.getConnection().prepareStatement(query);
     this.pstEmpleados.setLong(1, empleado.getId());
     this.pstEmpleados.executeUpdate();
} else {System.out.println("Fallo la conexion");}
    }catch(Exception e){}
    return false;
    }
        
    

}
    


  

   