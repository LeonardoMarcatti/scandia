<?php
    namespace scandiweb\view;

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
    use scandiweb\model\ProductDAO;

    $db = new Database;
    $conn = $db->getConnection();
    $dao = new ProductDAO($conn);
    $all = $dao->getAllProducts();
    echo \json_encode($all);
?>