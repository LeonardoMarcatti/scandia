<?php
    namespace scandiweb\view;

    if(!isset($_POST['val'])){
        \header('Location: ../view/index.php');
    };

    require_once '../model/DAO.php';
    require_once '../config/Database.php';

    use \scandiweb\model\ProductDAO;
    use scandiweb\config\Database;

    $db = new Database();
    $conn = $db->getConnection();
    $dao = new ProductDAO($conn);

    switch ($_POST['val']) {
        case 'dvd':
            echo json_encode($dao->getDVD());
            break;
        case 'furniture':
            echo json_encode($dao->getFurniture());
            break;
        case 'book':
            echo json_encode($dao->getBook());
            break;
        default:
            echo json_encode($dao->getAllProducts());
            break;
    };

?>