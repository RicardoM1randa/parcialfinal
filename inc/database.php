<?php
class Database
{
    private static $connection;
    private static $statement;
    public static $id;
    public static $error;

    private static function connect()
    {
        $server = "localhost";
        $database = "epiz_24837694_parcialweb";
        $username = "epiz_24837694_parcialweb";
        $password = "bxqm5Gbnx5H";
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8");
        self::$connection = null;
        try
        {
            self::$connection = new PDO("mysql:host=".$server."; dbname=".$database, $username, $password, $options);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $exception)
        {
            die($exception->getCode());
        }
    }

    private static function desconnect()
    {
        //self::$error = self::$statement->errorInfo();
        self::$connection = null;
    }

    public static function executeRow($query, $values)
    {
        self::connect();
        $statement = self::$connection->prepare($query);
        if($statement->execute($values))
        {
             self::desconnect();
             return true;       
        }
        else
        {
             self::desconnect();
             return false;     
        }        
    }

    public function getRow($query, $values)
    {
        self::connect();
        $statement = self::$connection->prepare($query);
        $statement->execute($values);
        $datos=  $statement->fetch(PDO::FETCH_ASSOC);
        self::desconnect();
        return json_encode($datos);
    }

    public static function getRows($query, $values)
    {
        self::connect();
        $statement = self::$connection->prepare($query);
        $statement->execute($values);
        self::desconnect();
        return $statement->fetchAll(PDO::FETCH_BOTH);
    }
     public function ObtenerFila($query, $values)
    {
        self::connect();
        $statement = self::$connection->prepare($query);
        $statement->execute($values);
        $datos=  $statement->fetch(PDO::FETCH_ASSOC);
        self::desconnect();
        return ($datos);
    }
}
?>
