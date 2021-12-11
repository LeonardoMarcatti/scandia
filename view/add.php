<!DOCTYPE html>
<html lang="en_US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="assets/img/sw.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Add Product</title>
    </head>
    <body class="container-fluid">
        <nav id="top" class="navbar navbar-dark bg-dark navbar-expand">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://scandiweb.com/" target="_blank">
                    <img src="assets/img/sw.png" alt="" width="30" height="25" class="d-inline-block align-text-top">
                        ScandiWeb
                </a>
                <div id="title">
                    <h1>Product Add</h1>
                </div>
                <div class="float-end">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <input type="button" value="Save" class="btn btn-light" id="save" disabled>
                        </li>
                        <li class="nav-item ms-3">
                            <a href="index.php"><input type="button" value="Cancel" class="btn btn-danger" id="cancel"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
        <div class="container-fluid">
            <form action="../controller/saveProduct.php" method="post" id="product_form" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col">
                        <label for="sku" class="form-label">SKU:</label>
                        <input type="text" class="form-control" placeholder="SKU Code" name="sku" id="sku" required>
                        <div class="invalid-feedback">
                            Please, provide the data of indicated type
                        </div>
                    </div>
                    <div class="col">
                        <label for="sku" class="form-label">Name:</label>
                        <input type="text" class="form-control" placeholder="Product name" name="name" id="name" required>
                        <div class="invalid-feedback">
                            Please, provide the data of indicated type
                        </div>
                    </div>
                    <div class="col">
                        <label for="sku" class="form-label">Price:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend">$</span>
                            <input type="number" step=0.01 class="form-control" placeholder="0" name="price" id="price" required>
                            <div class="invalid-feedback">
                                Please, provide the data of indicated type
                            </div>
                        </div>                        
                    </div>
                  </div>
                  <div class="mt-3">
                      <div class="col-3">
                        <label for="type">Type Switcher</label>
                        <select name="type" id="productType" class="form-select">
                            <option value="0" selected>Select one</option>
                            <option value="dvd">DVD</option>
                            <option value="furniture">Furniture</option>
                            <option value="book">Book</option>
                        </select>
                      </div>
                  </div>
                  <div id="product_area">
                  </div>
                  <button type="submit" id="hidden_send" hidden></button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous"></script>
        <script src="assets/js/add.js"></script>
    </body>
</html>