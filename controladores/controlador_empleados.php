<?php

include_once("modelos/empleado.php");
include_once("conexion.php");

DB::crearInstancia();

class ControladorEmpleados{
    public function inicio(){

        $empleados = Empleado::consultar();

        include_once("vistas/empleados/inicio.php");

    }

    public function inactivos(){

        $empleados = Empleado::consultarInactivos();

        include_once("vistas/empleados/inactivos.php");

    }

    public function crear(){
        include_once("vistas/empleados/crear.php");

        if($_POST){
            print_r($_POST);
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            Empleado::crear($nombre,$correo);
            header("Location:./?controlador=empleados&accion=inicio");
        }
    }

    public function editar(){

        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            $estado=$_POST['estado'];

            Empleado::editar($id,$nombre,$correo,$estado);
            header("Location:./?controlador=empleados&accion=inicio");
        }
        $id=$_GET['id'];
        $empleado = Empleado::buscar($id);
        include_once("vistas/empleados/editar.php");
        
    }

    public function borrar(){
        $id=$_GET['id'];
        Empleado::borrar($id);
        header("Location:./?controlador=empleados&accion=inicio");
    }

    public function activar(){
        $id=$_GET['id'];
        Empleado::activar($id);
        header("Location:./?controlador=empleados&accion=inicio");
    }

}

?>