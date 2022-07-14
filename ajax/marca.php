<?php 
require_once "../modelos/Marca.php";
 
$marca=new marca();
 
$idmarca=isset($_POST["idmarca"])? limpiarCadena($_POST["idmarca"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$condicion=isset($_POST["condicion"])? limpiarCadena($_POST["condicion"]):"";
 
switch ($_GET["op"]){
    case 'guardaryeditar':
 
        if (!file_exists($_FILES['condicion']['tmp_name']) || !is_uploaded_file($_FILES['condicion']['tmp_name']))
        {
            $condicion=$_POST["condicionactual"];
        }
        else
        {
            $ext = explode(".", $_FILES["condicion"]["name"]);
            if ($_FILES['condicion']['type'] == "image/jpg" || $_FILES['condicion']['type'] == "image/jpeg" || $_FILES['condicion']['type'] == "image/png")
            {
                $condicion = round(microtime(true)) . '.' . end($ext);
                move_uploaded_file($_FILES["condicion"]["tmp_name"], "../files/marcas/" . $condicion);
            }
        }
        if (empty($idmarca)){
            $rspta=$marca->insertar($idmarca,$nombre,$descripcion,$condicion);
            echo $rspta ? "Marca registrado" : "Marca no se pudo registrar";
        }
        else {
            $rspta=$marca->editar($idmarca,$nombre,$descripcion,$condicion);
            echo $rspta ? "Marca actualizado" : "Marca no se pudo actualizar";
        }
    break;
 
    case 'desactivar':
        $rspta=$marca->desactivar($idmarca);
        echo $rspta ? "Marca Desactivado" : "Marca no se puede desactivar";
    break;
 
    case 'activar':
        $rspta=$marca->activar($idmarca);
        echo $rspta ? "Marca activado" : "Marca no se puede activar";
    break;
 
    case 'mostrar':
        $rspta=$marca->mostrar($idmarca);
        //Codificar el resultado utilizando json
        echo json_encode($rspta);
    break;
 
    case 'listar':
        $rspta=$marca->listar();
        //Vamos a declarar un array
        $data= Array();
 
        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idmarca.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idmarca.')"><i class="fa fa-close"></i></button>':
                    ' <button class="btn btn-warning" onclick="mostrar('.$reg->idmarca.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idmarca.')"><i class="fa fa-check"></i></button>',
                "1"=>$reg->nombre,
                "2"=>$reg->descripcion,
                "3"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
                '<span class="label bg-red">Desactivado</span>'
                );
        }
        $results = array(
            "sEcho"=>1, //Información para el datatables
            "iTotalRecords"=>count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
            "aaData"=>$data);
        echo json_encode($results);
 
    break;
 
    case "selectmarca":
        require_once "../modelos/marca.php";
        $marca = new marca();
 
        $rspta = $marca->select();
 
        while ($reg = $rspta->fetch_object())
                {
                    echo '<option value=' . $reg->idmarca . '>' . $reg->nombre . '</option>';
                }
    break;
}
?>