<?php include "./cabecera.inc"?>

<form action="result_libros.php" method="post">
        <label for="busqueda">Texto de busqueda:</label>
        <input type="search" name="busqueda" id="busqueda" size="20"><br>
        <label for="opciones">Buscar en: </label>
        <input type="radio" name="opciones" id="opciones" value="Título del libro">Título del libro
        <input type="radio" name="opciones" id="opciones" value="Nombre del autor">Nombre del autor
        <input type="radio" name="opciones" id="opciones" value="Editorial">Editorial<br>
        <label for="lista">Tipo de libro:</label>
        <select id="lista" name="lista">
            <option value="Narrativa">Narrativa</option>
            <option value="librLibros de textoos">Libros de texto</option>
            <option value="Guías">Guías</option>
            <option value="Mapas">Mapas</option>
        </select>
        <br>
        <input type="submit" value="Buscar">
        <br>
</form>


<?php include "./pie.inc"?>