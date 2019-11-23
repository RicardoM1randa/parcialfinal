<?php
   include("database.php");
   if($_POST['id'])
   {
        $id = $_POST['id'];

        $query = "SELECT * FROM cancion WHERE id = ?";
        $pa = array($id);
        $data= new Database();
        $datosObtenidos=$data->getRow($query,$pa);
        if($datosObtenidos != null)
        {
            echo $datosObtenidos;
        }
        else
        {
            echo "No hay registros disponibles";
        }
   }
?>