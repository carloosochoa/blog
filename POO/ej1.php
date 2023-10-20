<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include "./persona.php";
        include "./estudiante.php";

    $e1 = new Estudiante("Carlos","03400345034","cvarlos@gmailñ.com","vergre",20);
    $e1->mostrar();
    echo $e1->mayorEdad() ? "<p>Es mayor de edad</p>" : "<p>Es menor de edad</p>";
    ?>
</body>
</html>