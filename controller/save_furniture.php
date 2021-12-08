<?php
    namespace scandiweb\controller;

    include_once '../model/DAO.php';
    include_once '../model/Product.php';
    include_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\Furniture;
    use scandiweb\model\FurnitureDAO;

    $sku = \filter_input(\INPUT_POST, 'sku', \FILTER_SANITIZE_STRING); 
    $name = \filter_input(\INPUT_POST, 'name', \FILTER_SANITIZE_STRING);
    $price = \filter_input(\INPUT_POST, 'price', \FILTER_VALIDATE_FLOAT);
    $height = \filter_input(\INPUT_POST, 'height', \FILTER_VALIDATE_FLOAT);
    $width = \filter_input(\INPUT_POST, 'width', \FILTER_VALIDATE_FLOAT);
    $length= \filter_input(\INPUT_POST, 'length', \FILTER_VALIDATE_FLOAT);
    $type = \filter_input(\INPUT_POST, 'type', \FILTER_SANITIZE_STRING);

    $db  = new Database();
    $conn = $db->getConnection();

    $furniture = new Furniture;
    $furniture->setSKU($sku);
    $furniture->setName($name);
    $furniture->setPrice($price);
    $furniture->setWidth($width);
    $furniture->setHeight($height);
    $furniture->setLength($length);
    $furniture->setType($type);

    $dao = new FurnitureDAO($conn);
    $dao->save($furniture);   

    header('Location: ../view/index.php');
?>