<?php
    namespace scandiweb\controller;

    include_once '../model/DAO.php';
    include_once '../model/Product.php';
    include_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\DVDDAO;
    use scandiweb\model\DVD;

    $sku = \filter_input(\INPUT_POST, 'sku', \FILTER_SANITIZE_STRING); 
    $name = \filter_input(\INPUT_POST, 'name', \FILTER_SANITIZE_STRING);
    $price = \filter_input(\INPUT_POST, 'price', \FILTER_VALIDATE_FLOAT);
    $size = \filter_input(\INPUT_POST, 'size', \FILTER_VALIDATE_FLOAT);
    $type = \filter_input(\INPUT_POST, 'type', \FILTER_SANITIZE_STRING);

    $db  = new Database();
    $conn = $db->getConnection();

    $dvd = new DVD;
    $dvd->setSKU($sku);
    $dvd->setName($name);
    $dvd->setPrice($price);
    $dvd->setSize($size);
    $dvd->setType($type);

    $dao = new DVDDAO($conn);
    $dao->save($dvd);   

    header('Location: ../view/index.php');
?>