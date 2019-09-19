<?php

    header('Content-type: application/json');

    /* DEFINIAMO I PARAMETRI DI CONNESSIONE AL DATABASE */
    $servername= 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname= 'puBool';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {
        echo 'errore connessione server' . '<br>';
        var_dump($conn);
        die();
    }

    $id = $_GET['id'];
  
    $query = "
             DELETE from menu_prodotti
             WHERE id = " . $id . "   
    ";

   
    $res = $conn -> query($query);
    $conn -> close();

    echo json_encode($res);
?>