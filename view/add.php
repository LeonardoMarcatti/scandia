<!DOCTYPE html>
<html lang="en_US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
        <link rel="icon" href="assets/img/sw.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Add Product</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
        <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous" defer></script>
        <script src="assets/js/add.js" defer></script>
    </head>
    <body>
        <header>
            <nav id="top" class="navbar bg-dark">
                <div id="nav_content">
                    <a class="navbar-brand" href="https://scandiweb.com/" target="_blank">
                        <img src="assets/img/sw.png" alt="" width="30" height="25" class="d-inline-block align-text-top">
                    </a>
                    <div id="title">
                        <h1>Product Add</h1>
                    </div>
                    <div id="btns">
                        <input type="button" value="Save" class="btn btn-light" id="save" disabled>
                        <a href="index.php"><input type="button" value="Cancel" class="btn btn-danger" id="cancel"></a>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <form action="../controller/saveProduct.php" method="post" id="product_form" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col">
                            <label for="sku" class="form-label">SKU:</label>
                            <input type="text" class="form-control" placeholder="SKU Code" name="sku" id="sku" required>
                            <div class="invalid-feedback">
                                Please, submit required data.
                            </div>
                        </div>
                        <div class="col">
                            <label for="sku" class="form-label">Name:</label>
                            <input type="text" class="form-control" placeholder="Product name" name="name" id="name" required>
                            <div class="invalid-feedback">
                                Please, submit required data.
                            </div>
                        </div>
                        <div class="col">
                            <label for="sku" class="form-label">Price:</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend">$</span>
                                <input type="number" step=0.01 class="form-control" placeholder="0" name="price" id="price" required>
                                <div class="invalid-feedback">
                                    Please, submit required data.
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col-3">
                            <label for="type">Type Switcher</label>
                            <select name="type" id="productType" class="form-select">
                                <option value="0" selected>Select one</option>
                                <option value="dvd" id="dvd">DVD</option>
                                <option value="furniture" id="furniture">Furniture</option>
                                <option value="book" id="book">Book</option>
                            </select>
                        </div>
                    </div>
                    <div id="product_area">
                    </div>
                    <button type="submit" id="hidden_send" hidden></button>
                </form>
            </div>
        </main>
       <footer>
        <small>Scandiweb Test Assignment</small>
       </footer>
        
    </body>
</html>