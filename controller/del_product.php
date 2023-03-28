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
    use scandiweb\model\ProductDAO;

    $id = \filter_input(\INPUT_POST, 'del', \FILTER_SANITIZE_NUMBER_INT);

    $db = new Database();
    $conn = $db->getConnection();

    $dao = new ProductDAO($conn);
    $dao->delete($id);

?>