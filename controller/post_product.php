<?php
    namespace scandiweb\controller;

    include_once '../model/DAO.php';
    include_once '../model/Products.php';
    include_once '../config/Database.php';

    use scandiweb\model\ProductDAO;
    use scandiweb\model\DVD;
    use scandiweb\model\Furniture;
    use scandiweb\model\Book;
    use scandiweb\config\Database;

    $sku = \filter_input(\INPUT_POST, 'sku', \FILTER_SANITIZE_STRING); 
    $name = \filter_input(\INPUT_POST, 'name', \FILTER_SANITIZE_STRING);
    $price = \filter_input(\INPUT_POST, 'price', \FILTER_VALIDATE_FLOAT);
    $size = \filter_input(\INPUT_POST, 'size', \FILTER_VALIDATE_FLOAT);
    $height = \filter_input(\INPUT_POST, 'height', \FILTER_VALIDATE_FLOAT);
    $width = \filter_input(\INPUT_POST, 'width', \FILTER_VALIDATE_FLOAT);
    $length = \filter_input(\INPUT_POST, 'length', \FILTER_VALIDATE_FLOAT);
    $weight = \filter_input(\INPUT_POST, 'weight', \FILTER_VALIDATE_FLOAT);
    $type = \filter_input(\INPUT_POST, 'type', \FILTER_SANITIZE_STRING);

    $db  = new Database();
    $conn = $db->getConnection();       
    $dao = new ProductDAO($conn);

    switch ($type) {
        case 'dvd':
            $dvd = new DVD(); 
            $dvd->setSKU($sku);
            $dvd->setName($name);
            $dvd->setPrice($price);
            $dvd->setSize($size);
            $dvd->setType($type);
            $dao->saveDVD($dvd);
            break;
        case 'furniture':
            $furniture = new Furniture();
            $furniture->setSKU($sku);
            $furniture->setName($name);
            $furniture->setPrice($price);
            $furniture->setHeight($height);
            $furniture->setWidth($width);
            $furniture->setLength($length);
            $furniture->setType($type);
            $dao->saveFurniture($furniture);
            break;
        default:
            $book = new Book();
            $book->setSKU($sku);
            $book->setName($name);
            $book->setPrice($price);
            $book->setWeight($weight);
            $book->setType($type);
            $dao->saveBook($book);
            break;
    };

    header('Location: ../view/index.php');
?>