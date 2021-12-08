<?php
    namespace scandiweb\controller;

    include_once '../model/DAO.php';
    include_once '../model/Product.php';
    include_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\Book;
    use scandiweb\model\BookDAO;

    $sku = \filter_input(\INPUT_POST, 'sku', \FILTER_SANITIZE_STRING); 
    $name = \filter_input(\INPUT_POST, 'name', \FILTER_SANITIZE_STRING);
    $type = \filter_input(\INPUT_POST, 'type', \FILTER_SANITIZE_STRING);
    $price = \filter_input(\INPUT_POST, 'price', \FILTER_VALIDATE_FLOAT);
    $weight = \filter_input(\INPUT_POST, 'weight', \FILTER_VALIDATE_FLOAT);
    
    $db  = new Database();
    $conn = $db->getConnection();

    $book = new Book;
    $book->setSKU($sku);
    $book->setName($name);
    $book->setPrice($price);
    $book->setWeight($weight);
    $book->setType($type);

    $dao = new BookDAO($conn);
    $dao->save($book);   

    header('Location: ../view/index.php');
?>