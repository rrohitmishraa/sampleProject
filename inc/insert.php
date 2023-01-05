<?php
    include("conn.php");
    $connect = new dbConnection;

    if(isset($_POST['ID']) && isset($_POST['NAME'])) {
        $id = $_POST['ID'];
        $name = $_POST['NAME'];
    }


    $SQL ="INSERT INTO data VALUES('$id', '$name')";
    $connect -> connect() -> query($SQL);
    
    header("Location: ../index.php")
?>
