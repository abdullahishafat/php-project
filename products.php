<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
        <a class="float-right" href="login.php"><button> LOG OUT </button></a>
        <h1 class="text-info text-center">Products Complete System</h1>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="products_handler.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="w" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="x" placeholder="Enter quantity">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="y" placeholder="Enter size">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="z" placeholder="Enter price">
                    </div>
                    <input type="submit" value="Add product" class="btn btn-outline-info btn-block" name="btn_reg">
                    <a href="Company.php" class="btn btn-outline-success btn-block">View product</a>
                </form>
            </div>
            <div class="col-3"></div>

        </div>
</body>
</html>
