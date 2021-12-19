<?php

include_once("modelos/empleado.php");
include_once("conexion.php");

DB::crearInstancia();

class ControladorEmpleados{
    public function inicio(){

        $empleados = Empleado::consultar();

        include_once("vistas/empleados/inicio.php");
    }

    public function crear(){
        include_once("vistas/empleados/crear.php");

        if($_POST){
            print_r($_POST);
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            Empleado::crear($nombre,$correo);
            header("Location:./controlador=empleados&accion=inicio");
        }
    }

    public function editar(){
        include_once("vistas/empleados/editar.php");
    }

    public function borrar(){
        $id=$_GET['id'];
        Empleado::borrar($id);
        header("Location:./controlador=empleados&accion=inicio");
    }

}

?>