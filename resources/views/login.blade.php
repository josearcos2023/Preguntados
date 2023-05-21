<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>  
    <div class="container d-flex align-items-center justify-content-center bg-black" style="height: 100vh;"> 
        <div class="row">
            <div class="bg-secondary col-md-12 my-custom-div rounded-5">
                <form action="funciones.php" method="post">
                    <!-- Login -->
                    <div class="text-center fs-1 fw-bold mt-5 text-info">LOGIN</div>
                    <!-- Creación de espacios para poner el Username con su ícono -->
                        <div class="col-md-8 mx-auto">
                        <div class="borde input-group mt-5">
                           <div class="input-group-text bg-white">
                              <img src="icono_user.jpg" alt="icon-username" style="height: 3rem;">
                           </div>
                              <input class="form-control bg-white" type="text" placeholder="Username">
                        </div>
                        </div>
                        <!-- Creación de espacios para poner la Contraseña con su ícono-->
                        <div class="col-md-8 mx-auto">
                        <div class="borde input-group mt-4">
                           <div class="input-group-text bg-white px-4">
                              <img src="icon-password.png" alt="icon-username" style="height: 3rem;">
                           </div>
                              <input class="form-control bg-white" type="password" placeholder="Password">
                        </div>
                        </div>
                        <!-- Creación de la Recuerdame -->
                        <div class="col-md-6 mx-auto d-flex justify-content-around mt-1">
                           <div class="d-flex align-items-center gap-1">
                             <input class="form-check-input borde bg-black" type="checkbox">
                             <div class="pt-1 text-white fw-semibold" style="font-size: 0.9rem;">Remember me</div>
                           </div>  
                        </div>
                        <!-- Creación de la Opción si olvida contraseña 
                        <div class="pt-1">
                           <a href="#" class="text-decoration-none text-info fw-semibold fst-italic" style="font-size: 0.9rem;">
                              Forgot your password?</a>
                        </div>-->
                        <!-- Creación de botón Login -->
                        <div class="col-md-4 mx-auto" >
                           <div class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm text-center" >Login</div>
                           <div class="d-flex gap-1 justify-content-center mt-1">
                        </div>
                            <!-- Creación de Opción "No tienes una cuenta?" con opción para registrarse-->
                        <div class="col-md-9 mx-auto text-white fw-semibold">
                            <div>Don't have an account?
                            <a href="registro.html" class="text-decoration-none text-info fw-semibold">Register</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <label for="user">USUARIO :</label><br> 
    <input type="text" name="user" id="user"><br>
    <label for="password">CONTRASEÑA :</label><br>
    <input type="text" name="password" id="password"><br>
    <label>Remember me</label><br>
    <label>Forget your password?</label><br>
    <input type="button" value="LOG IN">-->
   
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>