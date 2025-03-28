<?php
require_once 'conexion.php';
session_start();

$nombre = $_POST['fname'];
$apellido = $_POST['lname'];
$user = $_POST['usuario'];
$status = "1";
$email = $_POST['email'];
$fecha_alta = date("c");
$password = $_POST['password'];

// Manejo de la subida de la imagen
$target_dir = "img/"; // Asegúrate de que esta carpeta exista
$original_file_name = basename($_FILES["avatar"]["name"]); // Nombre original del archivo
$imageFileType = strtolower(pathinfo($original_file_name, PATHINFO_EXTENSION));
$new_file_name = "foto_perfil_" . $user . "." . $imageFileType; // Nuevo nombre del archivo
$target_file = $target_dir . $new_file_name; // Ruta completa del nuevo archivo
$uploadOk = 1;

// Verifica si la imagen es un archivo real o un falso
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }
}

// Verifica si el archivo ya existe
if (file_exists($target_file)) {
    echo "Lo siento, el archivo ya existe.";
    $uploadOk = 0;
}

// Verifica el tamaño del archivo
if ($_FILES["avatar"]["size"] > 500000) { // Ejemplo: límite de 500KB
    echo "Lo siento, el archivo es demasiado grande.";
    $uploadOk = 0;
}

// Permite ciertos formatos de archivo
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
    $uploadOk = 0;
}

// Verifica si $uploadOk es 0 por un error
if ($uploadOk == 0) {
    echo "Lo siento, tu archivo no fue subido.";
} else {
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
        // Guardar la ruta en la base de datos
        $avatar = $target_file; // Ruta de la imagen
        $consulta = "SELECT usuario FROM usuarios WHERE usuario LIKE ?";
        $stmt = $conn->prepare($consulta);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if (mysqli_num_rows($resultado) > 0) {
            echo 'El usuario ya existe';
            sleep(10);
            header("Location: registrarse.php");
        } else {
            $sql = "INSERT INTO usuarios VALUES('" . "" . "','" . $user . "','" . $password . "','" . $nombre . "','" . $apellido . "','" . $email . "','" . $status . "','" . $avatar . "','" . $fecha_alta . "')";
            if ($conn->query($sql) === TRUE) {
                echo 'El usuario se creó con éxito';
                sleep(10);
                header("Location: iniciodesesion.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Lo siento, hubo un error al subir tu archivo.";
    }
}
?>
