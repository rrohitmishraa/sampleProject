<?php
class dbConnection {
    private $servername;
    private $username;
    private $password;
    private $dbname;    

    function connect(){
        $this-> servername = "localhost";
        $this-> username = "root";
        $this-> password = "";
        $this-> dbname = "Sample";

        $conn = new mysqli(
            $this-> servername, 
            $this-> username,
            $this->password,
            $this->dbname
        );

        return $conn;
    }
}
?>
