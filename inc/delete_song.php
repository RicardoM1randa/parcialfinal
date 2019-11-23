<?php
//verificamos que los datos esten seteados
//ncluimos la conexion a la base de datos
include("database.php");
if(!empty($_POST))
{
    try
    {
        // Obtenemos el id mediante el metodo POST
        $id = $_POST['id'];
        //Preparamos la conulta y los parametros a enviar 
        $query = "DELETE FROM cancion WHERE id = ?";
        $params = array($id);
        //Se ejecuta la consulta y si el valor devuelto es TRUE Borramos la imagen
        if (Database::executeRow($query, $params))
        {
            $mensaje = "Nice!";
            echo $mensaje;
        }
        else
        {
            //capturamos los errores de la base de datos
            throw new Exception(Database::$error[1]);
        }
         
     }
     catch (Exception $error) 
	{
        //imprimimos los errores
		echo ($error->getMessage());
	}
}