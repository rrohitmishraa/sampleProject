<?php
    include("conn.php");
    $connect = new dbConnection;

    $SQL = "SELECT * FROM data ORDER BY position";
    $result= $connect -> connect()->query($SQL);
    $numbRows = $result->num_rows;

    if($numbRows > 0){
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }

        foreach($data as $d){
            echo("
                    <li id=".$d['position']." class='list-group-item'>".$d['id']." ".$d['name']."</li>
            ");
        }
    }  
?>