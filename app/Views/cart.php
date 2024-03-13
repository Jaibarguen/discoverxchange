
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DXC - Virtual shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="d-inline-flex align-items-center d-block d-lg-none">
    <a href="" class="btn px-0 ml-2">
        <i class="fas fa-heart text-dark"></i>
        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
    </a>
    <a href="" class="btn px-0 ml-2">
        <i class="fas fa-shopping-cart text-dark"></i>
        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
    </a>
</div>
<div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
<div class="col-lg-4">
<a href="" class="text-decoration-none">
<span class="h3 text-uppercase text-primary bg-dark px-2">Discover</span>
<span class="h3 text-uppercase text-dark bg-primary px-2 ml-n1">Xchange</span>
</a>
</div>
<div class="col-lg-4 col-6 text-left">
<form action="">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar producto">
        <div class="input-group-append">
            <span class="input-group-text bg-transparent text-primary">
                <i class="fa fa-search"></i>
            </span>
        </div>
    </div>
</form>
</div>
<div class="col-lg-4 col-6 text-right">
<p class="m-0">Atencion al cliente</p>
<h5 class="m-0">+57 311 4868276</h5>
</div>
</div>

<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
<div class="row px-xl-5">
<div class="col-lg-3 d-none d-lg-block">
<a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorias </h6>
    <i class="fa fa-angle-down text-dark"></i>
</a>
<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
    <div class="navbar-nav w-100">
        <div class="nav-item dropdown dropright">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Vestidos <i class="fa fa-angle-right float-right mt-1"></i></a>
            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                <a href="" class="dropdown-item">Hombres</a>
                <a href="" class="dropdown-item">Mujeres</a>
                <a href="" class="dropdown-item">Bebes</a>
            </div>
        </div>
        <a href="" class="nav-item nav-link">Camisas</a>
        <a href="" class="nav-item nav-link">Jeans</a>
        <a href="" class="nav-item nav-link">Bañadores</a>
        <a href="" class="nav-item nav-link">Pijamas</a>
        <a href="" class="nav-item nav-link">Ropa deportiva</a>
        <a href="" class="nav-item nav-link">Combinacion</a>
        <a href="" class="nav-item nav-link">Blazers</a>
        <a href="" class="nav-item nav-link">Chaquetas</a>
        <a href="" class="nav-item nav-link">Zapatoos</a>
    </div>
</nav>
</div>
<div class="col-lg-9">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
    <a href="" class="text-decoration-none d-block d-lg-none">
        <span class="h1 text-uppercase text-dark bg-light px-2">Los</span>
        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Ibarguen</span>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="<?php echo base_url(); ?>" class="nav-item nav-link">Inicio</a>
            <a href="<?php echo base_url().'tienda'; ?>" class="nav-item nav-link">Productos</a>
            <a href="<?php echo base_url().'detalles'; ?>" class="nav-item nav-link">Detalles de productos</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Carrito<i class="fa fa-angle-down mt-1"></i></a>
                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                    <a href="<?php echo base_url().'cart'; ?>" class="dropdown-item active">Compras</a>
                    <a href="<?php echo base_url().'pago'; ?>" class="dropdown-item">Metodo de pago</a>
                </div>
            </div>
            <a href="<?php echo base_url().'soporte'; ?>" class="nav-item nav-link">Contactos</a>
        </div>
        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
            <a href="" class="btn px-0">
                <i class="fas fa-heart text-primary"></i>
                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
            </a>
        </div>
        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['usuario']; ?></span>
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mi perfil</a>
                            <a href="#" class="dropdown-item">Ajustes</a>
                            <a href="<?php echo base_url().'salir'; ?>" class="dropdown-item">Salir</a>
                        </div>
                    </div>
    </div>
</nav>
</div>
</div>
</div>
<!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="<?php echo base_url(); ?>">Inicio</a>
                    <a class="breadcrumb-item text-dark" href="<?php echo base_url().'tienda'; ?>">Tienda</a>
                    <span class="breadcrumb-item active">Compras</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
            <?php if(session('cart') == true):?>
                <form method="post" action="<?= base_url('update')?>">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Productos</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td class="align-middle"><img src="img/<?php echo $item['imagen'] ?>" alt="" style="width: 50px;"><?php echo $item['nombre'] ?></td>
                            <td class="align-middle">$<?php echo $item['precio'] ?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                        </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" min="1" value="<?= $item['stock'] ?>" name="stock[]">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$<?php echo $item['precio'] * $item['stock']?></td>
                            <td class="align-middle"><a class="btn btn-sm btn-danger" href="<?= base_url('remove/'  .$item["idproducto"]) ?>"><i class="fa fa-times"></i></a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                </form>
                <a href="<?php echo base_url().'tienda'; ?>">
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3"><i class="fa fa-shopping-cart mr-2"></i>Seguir comprando</button>
                        </a>
                <?php endif;?>
                        <?php if(session('cart') == false):?>
                            <h1>NO HAY PRODUCTOS SELECCIONADOS.</h1>
                            <a href="<?php echo base_url().'tienda'; ?>">
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3"><i class="fa fa-shopping-cart mr-2"></i>Comprar productos</button>
                        </a>
                        <?php endif;?>
                        
            </div>
            <?php if(session('cart') == true):?>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Codigo del cupon">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Aplicar descuento</button>
                        </div>
                    </div>
                </form>
                
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Resumen de la compra</span></h5>
                <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                
                    <?php foreach ($items as $item): ?>
                    
                        <div class="d-flex justify-content-between mb-3">
                            <h6><?php echo $item['nombre'] ?> x <?php echo $item['stock']?></h6>
                            <h6>$<?php echo $item['precio'] * $item['stock']?></h6>
                        </div>
                    
                    <?php endforeach;?>
                    <?php endif;?>
                    </div>
                    <?php if(session('cart') == true):?>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$<?= $total?></h5>
                        </div>
                        
                        <a href="<?php echo base_url().'pago'; ?>">
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceder al pago</button>
                        </a>
                    </div>
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Ponerse en Contacto</h5>
                <p class="mb-4">Nuestra empresa te ofrecera todos los recursos necesarios para una mejor interaccion entre cliente y usuario, donde puedes vender tus propios articulos y puedes comprar</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Quibdó-Chocó,Colombia</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>DiscoverXchange@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+57 321 4482182</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Compra rapida</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestra tienda</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Detalle de la tienda</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Carrito de compra</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pagar</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>seguimiento</a>
							  <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>contactenos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Mi cuenta </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>venta</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Detalle de producto</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2">Carrito</i></a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Metodo de pago</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contactenos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">	Informacion</h5>
                        <p>Es muy importante registrarse antes de cualquier compra</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="correo electronico">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Inscribirse</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Siguenos</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="../multishop-1.0.0/img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>