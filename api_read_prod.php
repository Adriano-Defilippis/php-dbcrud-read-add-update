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

    $query = "
                SELECT *
                FROM menu_prodotti
    ";

    $res = $conn -> query($query);

    $prod = [];

    if ($res && $res -> num_rows > 0) {
        
        while ($row = $res -> fetch_assoc()) {
            
            $prod[] = $row;
        }
    }

    $conn -> close();

    echo json_encode($prod);
?>