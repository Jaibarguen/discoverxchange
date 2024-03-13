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
        <h5 class="m-0">+57 311486276</h5>
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
                <span class="h1 text-uppercase text-dark bg-light px-2">Discover</span>
                <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Xchange</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?php echo base_url(); ?>" class="nav-item nav-link">Inicio</a>
                    <a href="<?php echo base_url().'tienda'; ?>" class="nav-item nav-link active">Productos</a>
                    <a href="<?php echo base_url().'detalles'; ?>" class="nav-item nav-link">Detalles de productos</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Carrito<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="<?php echo base_url().'carrito'; ?>" class="dropdown-item">Compras</a>
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
                        <a href="<?php echo base_url().'carrito'; ?>" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
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
                    <a class="breadcrumb-item text-dark" href="<?php echo base_url().'tienda'; ?>">Productos</a>
                    <span class="breadcrumb-item active">crea tu producto</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Crea tu producto</span></h2>
        <div class="row px-xl-5 align-items-center justify-content-center">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <form action="<?php echo base_url().'nueva-venta'; ?>" enctype="multipart/form-data" method="post">
                        <div class="control-group">
                        <h4 class="mb-3">Nombre del producto</h4>
                            <input type="text" class="form-control" id="name" placeholder="Nombre del producto" name="na"
                                required="required" data-validation-required-message="Por favor ingresa tu nombre">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <div class="form-floating mb-3">
                        <strong class="text-dark mr-3">Tipo de producto:</strong>
                        <select name="tipo" required="required">
                            <option value="0">Seleccionar...</option>
                            <option value="1">Electronico</option>
                            <option value="2">Hogar</option>
                            <option value="3">Ropa</option>
                            <option value="4">Aseo</option>
                        </select>
                        <?php if(session('venta') == false):?>
                        <h8 class="text-danger">Debe seleccionar el tipo de producto</h8>
                        <?php endif;?>
                        </div>
                        </div>
                        <div class="form-floating mb-3">
                        <h4 class="mb-3">Precio del producto</h4>
                            <input type="number" class="form-control" id="floatingText" placeholder="Precio del producto" name="pre"
                            required="required" data-validation-required-message="Por favor ingresa el precio de tu producto">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Siguiente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
                <img class="img-fluid" src="../DiscoverXchange/img/payments.png" alt="">
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