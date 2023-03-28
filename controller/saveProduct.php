<?php
    namespace scandiweb\controller;

    spl_autoload_register(
        function ($class)
        {
            $pathToClass = explode('\\', $class);
            $class = end($pathToClass);

            if (file_exists(str_replace('controller', 'model/', __DIR__) . $class . '.php')) {
                require_once str_replace('controller', 'model/', __DIR__) . $class . '.php';
            } else {
                require_once str_replace('controller', 'config/', __DIR__) . $class . '.php';
            };
        }
    );

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
    $product = new Product($sku, $name, $type, $price, $height, $width, $length, $weight, $size);
    $dao = new ProductDAO($conn);
    $dao->save($product);

    header('Location: ../view/index.php');
?>