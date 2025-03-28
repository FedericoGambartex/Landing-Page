<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar que se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener y sanitizar los datos del formulario
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $extracto = mysqli_real_escape_string($conn, $_POST['extracto']);
    $fecha = mysqli_real_escape_string($conn, $_POST['fecha']);
    $contenido = mysqli_real_escape_string($conn, $_POST['contenido']);
    $categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
    $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);
    $club = mysqli_real_escape_string($conn, $_POST['club']);

    // Manejo de la imagen
    $imagen = '';
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen = 'img/' . basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen);
    }

    // Insertar los datos en la base de datos
    $query = "INSERT INTO articulos (titulo, extracto, fecha, contenido, imagen, categoria, keywords, id_club) 
              VALUES ('$titulo', '$extracto', '$fecha', '$contenido', '$imagen', '$categoria', '$keywords', '$club')";

    if (mysqli_query($conn, $query)) {
        echo "Artículo agregado exitosamente.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
} else {
    echo "Método no permitido.";
}
?>