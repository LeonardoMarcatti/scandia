<?php

    namespace scandiweb\controller;

    require_once '../model/DAO.php';
    require_once '../model/Products.php';
    require_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\Product;
    use scandiweb\model\ProductDAO;

    if (!empty($_POST['del'])) {
        $id = $_POST['del'];
        
        $db = new Database();
        $conn = $db->getConnection();

        $dao = new ProductDAO($conn);
        $dao->delProduct($id);

    } else{
        \header('Location: ../view/index.php');
    };


?>