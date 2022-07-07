<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";
 
Class marca
{
    //Implementamos nuestro constructor
    public function __construct()
    {
 
    }
 
    //Implementamos un método para insertar registros
    public function insertar($idmarca,$nombre,$descripcion,$condicion)
    {
        $sql="INSERT INTO marca (idmarca,nombre,descripcion,condicion)
        VALUES ('$idmarca','$nombre','$descripcion','$condicion')";
        return ejecutarConsulta($sql);
    }
 
    //Implementamos un método para editar registros
    public function editar($idmarca,$nombre,$descripcion,$condicion)
    {
        $sql="UPDATE marca SET idmarca='$idmarca',nombre='$nombre',descripcion='$descripcion',condicion='$condicion' WHERE idmarca='$idmarca'";
        return ejecutarConsulta($sql);
    }
 
    //Implementamos un método para desactivar registros
    public function desactivar($idmarca)
    {
        $sql="UPDATE marca SET condicion='0' WHERE idmarca='$idmarca'";
        return ejecutarConsulta($sql);
    }
 
    //Implementamos un método para activar registros
    public function activar($idmarca)
    {
        $sql="UPDATE marca SET condicion='1' WHERE idmarca='$idmarca'";
        return ejecutarConsulta($sql);
    }
 
    //Implementar un método para mostrar los datos de un registro a modificar
    public function mostrar($idmarca)
    {
        $sql="SELECT * FROM marca WHERE idmarca='$idmarca'";
        return ejecutarConsultaSimpleFila($sql);
    }
 
    //Implementar un método para listar los registros
    public function listar()
    {
        $sql="SELECT a.idmarca,a.idmarca,c.nombre as marca,a.a.nombre,a.a.descripcion,a.a.condicion FROM marca a INNER JOIN marca c ON a.idmarca=c.idmarca";
        return ejecutarConsulta($sql);   



    }
 
    //Implementar un método para listar los registros activos
    public function listarActivos()
    {
        $sql="SELECT a.idmarca,a.idmarca,c.nombre as marca,a.a.nombre,a.a.descripcion,a.a.condicion FROM marca a INNER JOIN marca c ON a.idmarca=c.idmarca WHERE a.condicion='1'";
        return ejecutarConsulta($sql);      
    }
 
    //Implementar un método para listar los registros activos, su último precio y el stock (vamos a unir con el último registro de la tabla detalle_ingreso)
    public function listarActivosVenta()
    {
        $sql="SELECT a.idmarca,a.idmarca,c.nombre as marca,a.a.nombre,a.(SELECT precio_venta FROM detalle_ingreso WHERE idmarca=a.idmarca order by iddetalle_ingreso desc limit 0,1) as precio_venta,a.descripcion,a.a.condicion FROM marca a INNER JOIN marca c ON a.idmarca=c.idmarca WHERE a.condicion='1'";
        return ejecutarConsulta($sql);      
    }
}
 
?>