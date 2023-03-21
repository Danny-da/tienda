<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/loginbootstrap.min.css">

    <title>Login</title>
</head>
<body>
    <main class=" main">
        <div class="container  bg-primary">
            <div class="user">
                <h1 class="titulo">Inicio de Sesión</h1>
            </div>

            <form action="../vista/Clientes.php" >
                <fieldset>
                    
                    <div class="form-group p-3">
                    <label for="exampleInputEmail1" class="form-label mt-4 fs-3">USUARIO</label>
                    <input type="text" class="form-control text-danger fw-bold"  name="usuario" placeholder="Ingrese un Usuario ">
                    </div>

                    <div class="form-group p-3">
                    <label for="exampleInputPassword1" class="form-label mt-1 fs-3">Contraseña</label>
                    <input type="password" class="form-control text-danger fw-bold"  name="password" placeholder="Ingrese una contraseña">
                    </div>

                    <div class="form-group boton p-3">
                    <input type="submit" class="btn btn-primary text-success" valeu="Iniciar sesión">
                    </div> 

                </fieldset>
            </form>

        </div>
        <!-- <br> -->
        <p></p>
        <div class="volver">
            <a href="../index.html"><img src="../img/flecha-hacia-atras.png" alt="Volver"></a>
        </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>