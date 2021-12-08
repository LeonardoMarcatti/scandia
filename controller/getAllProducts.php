<?php
    namespace scandiweb\view;

    require_once '../model/DAO.php';
    require_once '../model/Product.php';
    require_once '../config/Database.php';

    use \scandiweb\model\All;
    use scandiweb\config\Database;

    $db = new Database;
    $conn = $db->getConnection();
    $dao = new All($conn);
    $all = $dao->getAllProducts();
    echo \json_encode($all);
?>