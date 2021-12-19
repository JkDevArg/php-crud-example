<?php

class Empleado{

    public $id;
    public $nombre;
    public $correo;
    public function __construct($id,$nombre,$correo){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;

    }

    public static function consultar(){
        $listaEmpleados=[];
        $conexionDB=DB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM empleados");

        foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[] = new Empleado($empleado['id_empleado'],$empleado['nombre_empleado'],$empleado['correo_empleado']);
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
        $sql = $conexionDB->prepare("DELETE FROM empleados WHERE id=?");
        $sql->execute(array($id));
    }
}