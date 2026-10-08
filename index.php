<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoja de vid PHP</title>
</head>
<body>
    <?php
     $nombre= "Valeria Eraso";
     $profesion= "Ingeniera De Sistemas";
     $edad= 21;
     $Habilidades = [
        "Desarrollo web: HTML5, CSS3, JavaScript",
        "Control de versiones: Git y GitHub",
        "Resolución analítica de problemas"
     ]
    ?>
    <h1>
        <?php echo $nombre ?>
    </h1>
    <h2>
        <?php echo $profesion ?>
    </h2>

    <p>
        <?php echo "soy" , $nombre , "y soy", $profesion ?>
    </p>

        <?php if ($edad >=21): ?>
        <p>Disponible para trabajar</p>
        <?php else: ?>
        <p>Menor de edad - no puede trabajar</p>
        <?php endif; ?>
</body>
</html>