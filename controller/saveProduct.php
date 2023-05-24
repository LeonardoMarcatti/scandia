<?php
    namespace scandiweb\controller;
    require_once '../model/Product.php';
    require_once '../model/ProductDAO.php';
    require_once '../config/Database.php';

    use scandiweb\config\Database;
    use scandiweb\model\BookDAO;
    use scandiweb\model\DVD;
    use scandiweb\model\Book;
    use scandiweb\model\DVDDAO;
    use scandiweb\model\Furniture;
    use scandiweb\model\FurnitureDAO;

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
    $product = null;
    $dao = null;

    switch ($type) {
        case 'dvd':
            $product = new DVD($sku, $name, $type, $price, $size);
            $dao = new DVDDAO($conn);
            break;
        case 'furniture':
            $product = new Furniture($sku, $name, $type, $price, $height, $length, $width);
            $dao = new FurnitureDAO($conn);
            break;
        default:
            $product = new Book($sku, $name, $type, $price, $weight);
            $dao = new BookDAO($conn);
            break;
    }

    $dao->save($product);
    header('Location: ../view/index.php');
?>