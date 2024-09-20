<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>molshop</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="/assets/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/assets/css/app.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">molshop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown"
                            aria-haspopup="true" aria aria-expanded="false">manage</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a href="/admin-category.html" class="dropdown-item">Kategori</a>
                            <a href="/admin-product.html" class="dropdown-item">Product</a>
                            <a href="/admin-order.html" class="dropdown-item">Order</a>
                            <a href="/admin-users.html" class="dropdown-item">Pengguna</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/cart.html" class="nav-link"><i class="fa-solid fa-cart-shopping"></i> cart (0)
                            </i></a>
                    </li>
                    <li class="nav-item">
                        <a href="/login.html" class="nav-link">login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register.html" class="nav-link">register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-toggle="dropdown"
                            aria-haspopup="true" aria aria-expanded="false">admin</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-2">
                            <a href="/profile.html" class="dropdown-item">Profile</a>
                            <a href="/orders.html" class="dropdown-item">Orders</a>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                </ul>
            </div>

        </div>
    </nav>
    <!-- Content -->
    <?php $this->load->view($page); ?>
    <!-- End Content -->
    <script src="/assets/libs/jquery/jquery-3.7.1.min.js"></script>
    <script src="/assets/libs/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>