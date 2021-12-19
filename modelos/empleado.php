<?php

class Empleado{

    public $id;
    public $nombre;
    public $correo;
    public $estado;
    public function __construct($id,$nombre,$correo,$estado){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
        $this->estado=$estado;

    }

    public static function consultar(){
        $listaEmpleados=[];
        $conexionDB=DB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM empleados WHERE estado_empleado=1");

        foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[] = new Empleado($empleado['id_empleado'],$empleado['nombre_empleado'],$empleado['correo_empleado'],$empleado['estado_empleado']);
        }

        return $listaEmpleados;
    }

    public static function consultarInactivos(){
        $listaEmpleados=[];
        $conexionDB=DB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM empleados WHERE estado_empleado=0");

        foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[] = new Empleado($empleado['id_empleado'],$empleado['nombre_empleado'],$empleado['correo_empleado'],$empleado['estado_empleado']);
        }

        return $listaEmpleados;
    }

    public static function crear($nombre, $correo){
        $conexionDB = DB::crearInstancia();
        $sql = $conexionDB->prepare("INSERT INTO empleados(nombre_empleado,correo_empleado) VALUES(?,?)");
        $sql->execute(array($nombre,$correo));
    }

    public static function borrar($id){
        $conexionDB = DB::crearInstancia();
        $sql = $conexionDB->prepare("UPDATE empleados SET estado_empleado=0 WHERE id_empleado=?");
        $sql->execute(array($id));
    }

    public static function activar($id){
        $conexionDB = DB::crearInstancia();
        $sql = $conexionDB->prepare("UPDATE empleados SET estado_empleado=1 WHERE id_empleado=?");
        $sql->execute(array($id));
    }

    public static function buscar($id){
        $conexionDB = DB::crearInstancia();
        $sql = $conexionDB->prepare("SELECT * FROM empleados WHERE id_empleado=?");
        $sql->execute(array($id));
        $empleado = $sql->fetch();
        return new Empleado($empleado['id_empleado'],$empleado['nombre_empleado'],$empleado['correo_empleado'],$empleado['estado_empleado']);
    }

    Public static function editar($id,$nombre,$correo,$estado){
        $conexionDB = DB::crearInstancia();
        $sql = $conexionDB->prepare("UPDATE empleados SET nombre_empleado=?, correo_empleado=?, estado_empleado=? WHERE id_empleado=?");
        $sql->execute(array($nombre,$correo,$estado,$id));
    }
}