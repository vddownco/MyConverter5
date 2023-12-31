<?php require "./Logic/conexion.php";
?>

<?php 
    $consulta = "SELECT * FROM productos";
    $query = mysqli_query($conexion,$consulta);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            form{
                display: flex;
                flex-direction: column;
                width: 500px;
                margin: auto;

            }
            form *{
                margin-top: 5px;
            }
        </style>
    </head>
    <body>
        <h1>CRUD</h1>
<table>
<tr>
    <th>Id</th>
    <th>precio</th>
    <th>Nombre</th>
    <th>Activo</th>
    <th>Imagen</th>
</tr>

    <?php 
        while($row = mysqli_fetch_array($query)){
?>
            <tr>
            <th><?php echo $row['id']?></th>
    <th><?php echo $row['precio']?></th>
    <th><?php echo $row['nombre']?></th>
    <th><?php if($row['activo']) echo "si" ;else echo "no";?></th>
    <th><?php echo $row['imagen']?></th>           
    </tr>
    <?php
}
    ?>



</table>
<form action="./Logic/insertarproducto.php" method="POST">
<label for="">Id: </label><input type="number" name="id" id="id">
<label for="">Nombre: </label><input type="text" name="nombre" id="nombre">
<label for="">Precio: </label><input type="text" name="precio" id="precio">
<button type="submit">Insertar</button>
<?php 
if(isset($_GET['error'])){
    echo "<span>". $_GET['error'] . "</span>";
}
?>
</form>
    </body>
</html>