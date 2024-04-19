<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    if (!empty($correo) && !empty($contrasena)) {
        $con = retornarConexion();

        // Preparamos la consulta SQL
        $stmt = mysqli_prepare($con, "SELECT contrasena FROM usuarios WHERE correo = ?");
        mysqli_stmt_bind_param($stmt, 's', $correo);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($fila = mysqli_fetch_assoc($resultado)) {
            
            $contrasenaAlmacenada = $fila['contrasena'];

            
            $hash = hash('sha256', $contrasena);

           
            if ($hash === $contrasenaAlmacenada) {
                
                header('Location: cotiza.php');
                exit;
            } else {
                echo "<script>alert('Usuario o contraseña incorrecta.');</script>";
                header("refresh:0; url=index.php");
            }
        } else {
            echo "<script>alert('Usuario o contraseña incorrecta.');</script>";
                header("refresh:0; url=index.php");
        }
        mysqli_close($con);
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>

