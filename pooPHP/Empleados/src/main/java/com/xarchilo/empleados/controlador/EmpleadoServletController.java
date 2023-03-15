/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package com.xarchilo.empleados.controlador;

import com.xarchilo.empleados.modelo.Empleado;
import com.xarchilo.empleados.negocio.EmpleadoImp;
import com.xarchilo.empleados.utilities.Utilidad;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author luzam
 */
public class EmpleadoServletController extends HttpServlet {
Empleado empleado = new Empleado();
String listar="Empleados/listEmpleados.jsp";
String add="Empleados/addEmpleados.jsp";
String edit="Empleados/editEmpleados.jsp";

private List <Empleado> listEmpleado = new ArrayList<>();



@Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
           this.doProccess(request,response);
    }
        
     

  
    

    
@Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        this.doProccess(request,response);
    }

 
protected void doProccess(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
 EmpleadoImp empleaImp= new EmpleadoImp();
        
        if (request.getParameter("action")!=null) {
        String action=request.getParameter("action");
            if (action.equalsIgnoreCase("edit")) {
                System.out.println("Editar");
                long id =Long.parseLong(request.getParameter("id"));
                Empleado empleado =empleaImp.listEmpleados(id);
                request.setAttribute("empleado", empleado);
                request.getRequestDispatcher("Empleados/editar.jsp").forward(request, response);
                
            }
            else if (action.equalsIgnoreCase("actualizar")) {
                try{
                Empleado empleado = new Empleado();
                empleado.setId(Long.parseLong(request.getParameter("id")));
                empleado.setTipo_documento(request.getParameter("tipo_documento"));
                empleado.setNumero_documento(Long.parseLong("numero_documento"));
                empleado.setNombres(request.getParameter("nombres"));
                empleado.setApellidos(request.getParameter("apellidos"));
                empleado.setDepartamento_id(Long.parseLong(request.getParameter("departamento_id")));
                empleado.setDireccion(request.getParameter("direccion"));
                empleado.setCorreo_electronico(request.getParameter("correo_electronico"));
                empleado.setTelefono(Long.parseLong(request.getParameter("telefono")));
                empleado.setFecha_hora_crea(Utilidad.convertirFecha(request.getParameter("fecha_hora_crea")));
                empleado.setFecha_hora_modifica(new Date());
                empleaImp.actualizarEmpleado(empleado);
                }catch(Exception e){}
        this.listEmpleado=empleaImp.findAll();
        System.out.println("list"+ this.listEmpleado);
        request.setAttribute("listEmp", this.listEmpleado);
        request.getRequestDispatcher("Empleados/listEmpleados.jsp").forward(request, response);
            }
            else if (action.equalsIgnoreCase("add")) {
                request.getRequestDispatcher("Empleados/agregar.jsp").forward(request, response);
                
            }
            else if (action.equalsIgnoreCase("agregar")) {
                 try{
                Empleado empleado = new Empleado();
                empleado.setTipo_documento(request.getParameter("tipo_documento"));
                empleado.setNumero_documento(Long.parseLong("numero_documento"));
                empleado.setNombres(request.getParameter("nombres"));
                empleado.setApellidos(request.getParameter("apellidos"));
                empleado.setDepartamento_id(Long.parseLong(request.getParameter("departamento_id")));
                empleado.setDireccion(request.getParameter("direccion"));
                empleado.setCorreo_electronico(request.getParameter("correo_electronico"));
                empleado.setTelefono(Long.parseLong(request.getParameter("telefono")));
                empleaImp.add(empleado);
                }catch(Exception e){}
        System.out.println("list"+ this.listEmpleado);
        request.setAttribute("listEmp", this.listEmpleado);
        request.getRequestDispatcher("Empleados/listEmpleados.jsp").forward(request, response);
            }
            else if (action.equalsIgnoreCase("eliminar")) {
                long id =Long.parseLong(request.getParameter("id"));
                empleaImp.eliminar(id);
                this.listEmpleado=empleaImp.findAll();
        request.setAttribute("listEmp", this.listEmpleado);
        request.getRequestDispatcher("Empleados/listEmpleados.jsp").forward(request, response);
            }
            else if (action.equalsIgnoreCase("regresar")) {
        this.listEmpleado=empleaImp.findAll();
        request.setAttribute("listEmp", this.listEmpleado);
        request.getRequestDispatcher("Empleados/listEmpleados.jsp").forward(request, response);

            }
    }
        
        this.listEmpleado=empleaImp.findAll();
        request.setAttribute("listEmp", this.listEmpleado);
        request.getRequestDispatcher("Empleados/listEmpleados.jsp").forward(request, response);
       
}
}
