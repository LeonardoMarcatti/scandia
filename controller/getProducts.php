<?php
    namespace scandiweb\view;

    require_once '../model/DAO.php';
    require_once '../model/Product.php';
    require_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\ProductDAO;

    $db = new Database;
    $conn = $db->getConnection();
    $dao = new ProductDAO($conn);
    $all = $dao->getAllProducts();
    echo \json_encode($all);
?>