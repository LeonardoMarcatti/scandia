<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="icon" href="assets/img/sw.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
        <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous" defer></script>
        <script src="assets/js/index.js" defer></script>
        <title>Products List</title>
    </head>
    <body>
        <header>
            <nav class="navbar bg-dark" id="top">
                <div id="nav_content">
                    <a class="navbar-brand" href="https://scandiweb.com/" target="_blank">
                        <img src="assets/img/sw.png" alt="" width="30" height="25" class="d-inline-block align-text-top">
                    </a>
                    <div id="title">
                        <h1>Products List</h1>
                    </div>
                    <div id="btns">
                        <a class="nav-link"href="add.php"><button type="button" class="btn btn-success">Add Product</button></button></a>
                        <a class="nav-link" href="#"><button class="btn btn-danger" id="delete-product-btn">Mass Delete</button></a>
                    </div>
                </div>
            </nav>
        </header>        
        <main>
            <div class="row g-5" id="itens_area"></div>
        </main>
        <footer>
            <small>Made by <a href="https://www.linkedin.com/in/leonardomarcattidasilva/" target="_blank">Leonardo Marcatti</a> with <a href="https://getbootstrap.com/" target="_blank" rel="noopener noreferrer">Bootstrap 5</a>, <a href="https://www.w3schools.com/css/css_grid.asp">CSS Grid</a>, <a href="https://www.w3schools.com/css/css3_flexbox.asp">FlexBox</a>, <a href="https://jquery.com/">JQuery</a>, <a href="https://developer.mozilla.org/">JavaScript</a> and <a href="https://www.php.net/">PHP</a></small>
        </footer>
    </body>
</html>