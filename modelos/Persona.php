<?php
require "../config/Conexion.php";

class Persona
{
    //Implementamos nuestro constructor
    public function __construct()
    {

    }

    public function insertar($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email)
    {
        $sql = "INSERT INTO categoria (tipo_persona,nombre,tipo_documento,num_documento,direccion,telefono,email)
		VALUES ($tipo_persona','$nombre','$tipo_documento','$num_documento','$direccion', '$telefono','$email')";
        return ejecutarConsulta($sql);
    }

    //Implementamos un método para editar registros
    public function editar($idpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email)
    {
        $sql = "UPDATE persona SET tipo_persona='$tipo_persona',nombre='$nombre',tipo_documento='$tipo_documento',num_documento='$num_documento',direccion='$direccion', telefono='$telefono',email='$email' WHERE idpersona='$idpersona'";
        return ejecutarConsulta($sql);
    }

    public function eliminar($idpersona){
        $sql="DELETE FROM persona WHERE idpersona='$idpersona'";
        return ejecutarConsulta($sql);
    }

    //Implementar un método para mostrar los datos de un registro a modificar
    public function mostrar($idpersona)
    {
        $sql = "SELECT * FROM persona WHERE idcategoria='$idpersona'";
        return ejecutarConsultaSimpleFila($sql);
    }

    //Implementar un método para listar los registros de personas proveedor
    public function listarP()
    {
        $sql = "SELECT * FROM persona WHERE tipo_persona='Proveedor'";
        return ejecutarConsulta($sql);
    }

    //Implementar un método para listar los registros de personas cliente
    public function listarC()
    {
        $sql = "SELECT * FROM persona WHERE tipo_persona='Cliente'";
        return ejecutarConsulta($sql);
    }
}