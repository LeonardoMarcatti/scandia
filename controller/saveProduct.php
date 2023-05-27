<?php
    namespace scandiweb\controller;
    require_once '../model/Product.php';
    require_once '../model/ProductDAO.php';
    require_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\Product;
    use scandiweb\model\ProductDAO;

    $sku = filter_input(INPUT_POST, 'sku', FILTER_UNSAFE_RAW); 
    $name = filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW);
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    $size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_NUMBER_INT);
    $type = filter_input(INPUT_POST, 'type', FILTER_UNSAFE_RAW);
    $height = filter_input(INPUT_POST, 'height', FILTER_UNSAFE_RAW); 
    $width = filter_input(INPUT_POST, 'width', FILTER_UNSAFE_RAW);
    $length = filter_input(INPUT_POST, 'length', FILTER_VALIDATE_FLOAT);
    $weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT);

    $db  = new Database();
    $conn = $db->getConnection();
    $product = new Product($sku, $name, $type, $price, $size, $height, $length, $width, $weight);
    $dao = new ProductDAO($conn);

    $dao->save($product);
    header('Location: ../view/index.php');
?>