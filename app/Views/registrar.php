<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registro</title>
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
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

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
                            
                            <h3>Registro</h3>
                        </div>
                        <form action="<?php echo base_url().'guardar'; ?>" method="post">
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Nombre" name="na" 
                            required="required" data-validation-required-message="Por favor ingresa tu nombre">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Apellido" name="ap"
                            required="required" data-validation-required-message="Por favor ingresa tu apellido">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingText" placeholder="Identificacion" name="iden"
                            required="required" data-validation-required-message="Por favor ingresa tu cedula">
                            <p class="help-block text-danger"></p>
                            <?php if(session('error')):?>
                        <h8 class="text-danger">Esta identificacion ya existe.</h8>
                        <?php endif;?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Usuario" name="usu"
                            required="required" data-validation-required-message="Por favor ingresa tu usuario">
                            <p class="help-block text-danger"></p>
                            <?php if(session('error1')):?>
                        <h8 class="text-danger">Este usuario ya existe.</h8>
                        <?php endif;?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Correo" name="co"
                            required="required" data-validation-required-message="Por favor ingresa tu correo">
                            <p class="help-block text-danger"></p>
                            <?php if(session('error2')):?>
                        <h8 class="text-danger">Este correo ya existe.</h8>
                        <?php endif;?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="pa"
                            required="required" data-validation-required-message="Por favor ingresa tu contraseña">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Confirmar contraseña" name="cpa"
                            required="required" data-validation-required-message="Por favor confirme su contraseña">
                            <p class="help-block text-danger"></p>
                            <?php if(session('error4')):?>
                        <h8 class="text-danger">Las contraseñas no coinciden.</h8>
                        <?php endif;?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingText" placeholder="Telefono" name="tel"
                            required="required" data-validation-required-message="Por favor ingresa tu telefono">
                            <p class="help-block text-danger"></p>
                            <?php if(session('error3')):?>
                        <h8 class="text-danger">Este telefono ya existe.</h8>
                        <?php endif;?>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Echame un vistazo</label>
                            </div>
                            
                        </div>  

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Registrarse</button>
                        </form>
                        <p class="text-center mb-0">ya tienes una cuenta?<a href="<?php echo base_url().'login'; ?>">Ingresar</a></p>
                        
                        
                       
                    
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

    <script src="js/main.js"></script>
</body>

</html>