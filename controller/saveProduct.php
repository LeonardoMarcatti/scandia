<?php
    namespace scandiweb\controller;

    include_once '../model/DAO.php';
    include_once '../model/Product.php';
    include_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\Product;
    use scandiweb\model\ProductDAO;

    $sku = \filter_input(\INPUT_POST, 'sku', \FILTER_SANITIZE_STRING); 
    $name = \filter_input(\INPUT_POST, 'name', \FILTER_SANITIZE_STRING);
    $price = \filter_input(\INPUT_POST, 'price', \FILTER_VALIDATE_FLOAT);
    $size = \filter_input(\INPUT_POST, 'size', \FILTER_SANITIZE_NUMBER_INT);
    $type = \filter_input(\INPUT_POST, 'type', \FILTER_SANITIZE_STRING);
    $height = \filter_input(\INPUT_POST, 'height', \FILTER_SANITIZE_STRING); 
    $width = \filter_input(\INPUT_POST, 'width', \FILTER_SANITIZE_STRING);
    $length = \filter_input(\INPUT_POST, 'length', \FILTER_VALIDATE_FLOAT);
    $weight = \filter_input(\INPUT_POST, 'weight', \FILTER_VALIDATE_FLOAT);

    $db  = new Database();
    $conn = $db->getConnection();
    $product = new Product;
    $dao = new ProductDAO($conn);

    $product->setSKU($sku);
    $product->setName($name);
    $product->setPrice($price);
    $product->setSize($size);
    $product->setType($type);
    $product->setHeight($height);
    $product->setWidth($width);
    $product->setLength($length);
    $product->setWeight($weight);

    $dao->save($product);

    header('Location: ../view/index.php');
?>