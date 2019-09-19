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
    $name = $_GET['nome'];
    $brand = $_GET['marca'];
    $price = $_GET['prezzo'];
    $date = $_GET['data_scadenza'];
    $category = $_GET['category_prod'];

    $query = "
                UPDATE menu_prodotti
                SET prezzo = " . $price . ",
                    nome = '" . $name . "',
                    marca = '" . $brand . "',
                    category_prod = '" . $category . "',
                    data_scadenza = '" . $date . "'
                WHERE id = " . $id . "
    ";

   
    $res = $conn -> query($query);
    $conn -> close();

    echo json_encode($res);
?>