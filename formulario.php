<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
     
        <label for="asignatura">Asignatura</label>
        <select id="asignatura" name="asignatura[]" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matemátiva">Matemátiva</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>

        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">
            Manzana
        </label>

        <label for="opcion-2">
            <input type="checkbox" value="Fresa" id="opcion-2" name="frutas[]">
            Fresa
        </label>

        <label for="opcion-3">
            <input type="checkbox" value="Uva" id="opcion-3" name="frutas[]">
            Uva
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>


<?php




?>