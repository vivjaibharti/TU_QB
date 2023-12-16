<?php
class dbConnectionClass
{
    private $serverName="database-1.creuqsiegvba.ap-south-1.rds.amazonaws.com";
    private $port="3315";
    private $userName="admin";
    private $password="#Admin2023";
    private $dbName="tuqb_db";
    public $conn='';

    public function __construct()
    {
        try
        {
            $this->conn=new PDO("mysql:host=$this->serverName;port=$this->port;dbname=$this->dbName",$this->userName,$this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

$db=new dbConnectionClass();