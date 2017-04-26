<?php
class Stock
{
    public function conec()
    {
        $server = 'localhost';
        $database = 'ugma';
        $username = 'ugma';
        $password = 'ugma'; 
       return $conn = new PDO('mysql:host=' . $server . ';dbname='. $database, $username, $password);
    }
}
?>
