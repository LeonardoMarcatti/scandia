<?php

    namespace scandiweb\controller;

    require_once '../model/DAO.php';
    require_once '../model/Product.php';
    require_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\ProductDAO;

    $id = \filter_input(\INPUT_POST, 'del', \FILTER_SANITIZE_NUMBER_INT);

    $db = new Database();
    $conn = $db->getConnection();

    $dao = new ProductDAO($conn);
    $dao->delete($id);

?>