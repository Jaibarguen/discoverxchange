<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
</head>

<body>
    
    <div class="container-xxl position-relative bg-white d-flex p-0"></div>
        

        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3" style="border: solid; border-color: black;">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="<?php echo base_url(); ?>">
                                <h3 class="text-primary">DXC</h3>
                            </a>
                            <h3>Login</h3>
                        </div>
                        <form action="<?php echo base_url().'inicio'; ?>" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="usuario" name="usu"
                            required="required" data-validation-required-message="Por favor ingresa tu usuario">
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="contraseña" name="pa"
                            required="required" data-validation-required-message="Por favor ingresa tu contraseña">
                            <?php if(session('errorlogin')):?>
                        <h8 class="text-danger">El usuario o la contraseña son incorrectas.</h8>
                        <?php endif;?>
                        <?php if(session('nocompra')):?>
                        <h8 class="text-danger">Debes iniciar session o registrarse para poder comprar.</h8>
                        <?php endif;?>
                        <?php if(session('nosoporte')):?>
                        <h8 class="text-danger">Debes iniciar session o registrarse para poder solicitar soporte.</h8>
                        <?php endif;?>
                        <?php if(session('noproducto')):?>
                        <h8 class="text-danger">Debes iniciar session o registrarse para poder crear un producto.</h8>
                        <?php endif;?>
                        <?php if(session('nocart')):?>
                        <h8 class="text-danger">Debes iniciar session o registrarse para usar el carrito.</h8>
                        <?php endif;?>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Echame un vistazo</label>
                            </div>
                            <a href="">Olvide la contraseña</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" id="Enviar">Ingresar</button>
                        </form>
                        <p class="text-center mb-0">no tienes una cuenta?<a href="<?php echo base_url().'registro'; ?>"> Registrarse</a></p>
                     
                    </div>
                </div>
            </div>
        </div>
 
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>

</html>