<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conecta con la base de datos
    $servername = "192.168.1.237"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "wetaxi"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

   
    $nombreUsuario = $_POST['txtUsuario'];
    $contrasena = $_POST['txtContra'];

    
    $sql = "SELECT idstaff FROM staff WHERE usuario = '$nombreUsuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        session_start();
        $_SESSION['usuario'] = $nombreUsuario;
        header("Location: index.php");
        exit();
    } else {
       
        echo "Usuario o contraseña incorrectos.";
        
        
        
    }

    // Cierra la conexión con la base de datos
    $conn->close();
}

?>
