<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar parámetros GET</title>
</head>
<body>
    <h1>Parámetros GET:</h1>
    <?php
    // Mostrar todos los parámetros GET
    foreach ($_GET as $key => $value) {
        echo "<p><strong>$key:</strong> $value</p>";
    }
    ?>
</body>
</html>
