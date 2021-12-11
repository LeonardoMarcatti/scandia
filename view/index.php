<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="assets/img/sw.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Products List</title>
    </head>
    <body class="container-fluid">
        <nav class="navbar navbar-dark bg-dark navbar-expand" id="top">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://scandiweb.com/" target="_blank">
                    <img src="assets/img/sw.png" alt="" width="30" height="25" class="d-inline-block align-text-top">ScandiWeb
                </a>
                <div id="title">
                    <h1>Products List</h1>
                </div>
                <div class="float-end">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"href="add.php"><button type="button" class="btn btn-success">Add Product</button></button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button class="btn btn-danger" id="delete-product-btn">Mass Delete</button></a>
                        </li>
                    </ul>
              </div>
            </div>
        </nav>
        <div class="row g-5" id="itens_area"></div>   
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous"></script>
        <script src="assets/js/index.js" defer></script>
    </body>
</html>