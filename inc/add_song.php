<?php
#incluimos las clases a utilizar
include("database.php");
#iniciamos la variable imagen en null
$titulo = null;
$album = null;
$genero = null;
$duracion = null;
$artista = null;
$anio = null;
#verificamos si el post no esta vacio
if(!empty($_POST))
{
#validamos el formulario
#declaramos las variables a utilizar
$titulo = $_POST["titulo"];
$album = $_POST["album"];
$genero = $_POST["genero"];
$duracion = $_POST["duracion"];
$artista = $_POST["artista"];
$anio = $_POST["año"];
try
{

    $query = "INSERT INTO cancion (titulo,album,genero,duracion,artista,año) VALUES (?,?,?,?,?,?) ";
    $params = array($titulo,$album,$genero,$duracion,$artista,$anio);
    if(Database::executeRow($query,$params))
    {
        $mensaje = "Operacion exitosa";
        echo $mensaje;
    }
    else
    {
        throw new Exception(Database::$error[1]);
    }
}                        
catch(Exception $error)
{
    echo ($error->getMessage());
}
}else
{
    echo "Error";
}
?>