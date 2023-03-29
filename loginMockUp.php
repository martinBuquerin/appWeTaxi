<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-LjB5g/K1Cjq0L8fyV4+IweoJ7pCUc0KlUKbxTynT+9kaTJpdX9tTFDkVvAzhu1M+" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png">

</head>
<style>
    #bg {
        background-image: url('img/background.jpg');
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter: blur(5px);
    }

    body {
        font-family: 'Lato', sans-serif;
        color: #4A4A4A;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    form {
        width: 350px;
        position: relative;
    }

    form .form-field::before {
        font-size: 20px;
        position: absolute;
        left: 15px;
        top: 17px;
        color: #888888;
        content: " ";
        display: block;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .form-field {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .form-field i {
        margin-right: 10px;
    }




    form .form-field {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 1rem;
        position: relative;
    }

    form input {
        font-family: inherit;
        width: 100%;
        outline: none;
        background-color: #fff;
        border-radius: 4px;
        border: none;
        display: block;
        padding: 0.9rem 0.7rem;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
        font-size: 17px;
        color: #4A4A4A;
        text-indent: 40px;
    }

    form .btn {
        outline: none;
        border: none;
        cursor: pointer;
        display: inline-block;
        margin: 0 auto;
        padding: 0.9rem 2.5rem;
        text-align: center;
        background-color: bisque;
        color: black;
        border-radius: 4px;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
        font-size: 17px;
    }

    body {
        background: linear-gradient(#e65c00, #F9D423);
    }
</style>

<body>


    <!--formulario de login-->
    <div class="cont text-center">
        <div>
            <img src="img/logo.png">
        </div>
        <form class="formulario" method="post" action="login.php">

            <div class="text-center mb-4">
                <h3>Bienvenido de nuevo</h3>
            </div>
            <div class="form-group ">
                
                <input type="text" name="usuario" placeholder="Usuario">
            </div>
            <div class="form-group mb-3">
                <label></label>
                <input type="password" name="contrasena" placeholder="Contraseña">
            </div>


            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
        <!--Fin formulario-->
    </div>
</body>

</html>