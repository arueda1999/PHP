/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.xarchilo.empleados.negocio;


import com.xarchilo.empleados.data.Conexion;
import com.xarchilo.empleados.modelo.Departamento;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author luzam
 */
public class DepartamentoImp extends Conexion{
    Conexion cnx = new Conexion();
     Connection conex;
     PreparedStatement pstDepartamentos;
     ResultSet rsDepartamentos;
     Departamento departamento = new Departamento();
     String query="";

    public List findAll() {
         ArrayList<Departamento>listDepartamento=new ArrayList<>();
     this.query="SELECT * FROM Departamentos";
     try{
     this.conex=cnx.getConnection();
     pstDepartamentos=conex.prepareStatement(query);
     rsDepartamentos=pstDepartamentos.executeQuery();
     while(rsDepartamentos.next()){
     Departamento departamento= new Departamento();
            departamento.setId(this.rsDepartamentos.getLong("id"));
            departamento.setDepartamento_codigo(this.rsDepartamentos.getLong("departamento_codigo"));
            departamento.setNombre_departamento(this.rsDepartamentos.getString("nombre_departamento"));
            departamento.setFecha_hora_crea(this.rsDepartamentos.getDate("fecha_hora_crea"));
            departamento.setFecha_hora_modifica(this.rsDepartamentos.getDate("fecha_hora_modifica"));
            listDepartamento.add(departamento);
     }
     }catch(Exception e){}
        return listDepartamento;
    }

    
}
