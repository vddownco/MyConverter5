<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function manejarResultado(resultado) {
        var valor = resultado;
        window.opener.postMessage(valor, '*');
        setTimeout(function() {
            window.close();
        }, 1000);

        }
        <?php
            $parametro = $_GET['parametro'];
            $resultado = shell_exec('python C:\xampp\htdocs\ejerciciosparcial3\downloader.py ' . escapeshellarg($parametro) . ' "1"');
            echo "manejarResultado(". json_encode($resultado) .");";
        ?>
    </script>
</body>
</html>
