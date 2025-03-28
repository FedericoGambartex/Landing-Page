
<?php
include("cabecera.php");
?>

<h1>Agregar Nuevo Artículo</h1>
    <form id="form_art" action="procesar_articulo.php" method="POST" enctype="multipart/form-data">

    <label for="fecha">Fecha:</label><br>
    <input type="date" id="fecha" name="fecha" required><br><br>


        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="extracto">Extracto:</label><br>
        <textarea id="extracto" name="extracto" required></textarea><br><br>

        <label for="contenido">Contenido:</label><br>
        <textarea id="contenido" name="contenido" required></textarea><br><br>


        <label for="categoria">Categoría:</label><br>
        <input type="text" id="categoria" name="categoria" required><br><br>

        <label for="keywords">Palabras Clave:</label><br>
        <input type="text" id="keywords" name="keywords" required><br><br>

        <label for="club">Club:</label><br>
        <select id="club" name="club" required>
            <option value="" disabled selected>Seleccione un club</option>
            <option value="1">Boca</option>
            <option value="2">River</option>
            <option value="3">San Lorenzo</option>
            <option value="4">Racing</option>
            <option value="5">Independiente</option>
        </select><br><br>

        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*"> <br>               
        <label for="sumbit">Articulo:</label>
        <input type="submit" value="Agregar Artículo">
    </form>