<?php
class dbConfig
{
    private $host ="localhost";
    private $name ="root";
    private $pass ="";
    private $db = "1951060718_dhtl";
    protected $conn = null;
    public function __construct()
    {
        try{
            $this->conn=new PDO(dsn:"mysql:host=$this->host;dbname=this->pd;charset=utf8",$this->name,$this->pass);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>