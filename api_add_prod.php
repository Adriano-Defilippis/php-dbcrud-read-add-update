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

    $name = $_GET['nome'];
    $brand = $_GET['marca'];
    $price = $_GET['prezzo'];
    $date = $_GET['data_scadenza'];
    $category = $_GET['category_prod'];

    $query = "
                INSERT INTO menu_prodotti (nome, marca, prezzo, data_scadenza, category_prod)
                VALUES ('" . $name  . "', 
                        '" . $brand  . "', 
                        " . $price  . ", 
                        '" .  $date . "',
                        '" . $category . "'
                        )
    ";

   
    $res = $conn -> query($query);
    $conn -> close();

    echo json_encode($res);
?>