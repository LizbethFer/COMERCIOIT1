<?php
/* primera forma de hacer la tabla con base de datos
    <h1>Listado de productos</h1>
    <table>
    <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Marca</th>
    <th>Categoria</th>
    <th>Presentación</th>
    <th>Stock</th>
    <th>Actualizar</th>
    <th>Eliminar</th>
    </tr>
    <?php
    $sql='SELECT*FROM productos';
    foreach ($conexion->query($sql)as $row) {
       // echo $row['Nombre']."<br>";
    
    ?>
    <tr>
    <td><?php echo $row['Nombre']?> </td>
    <td><?php echo $row['Precio']?> </td>
    <td><?php echo $row['Marca']?> </td>
    <td><?php echo $row['Categoria']?> </td>
    <td><?php echo $row['Presentacion']?> </td>
    <td><?php echo $row['Stock']?> </td>
    <td></td>
    <td></td>
    </tr>
    <?php
    }
    ?>
    </table>*/
    /*segunda forma de hacer
    $sql='SELECT *FROM productos  INNER JOIN marcas ON productos.Marca=marcas.idMarca INNER JOIN categorias ON productos.Categoria=categorias.idCategoria';
$rows=$conexion->prepare($sql);
$rows->execute();
while($row=$rows->fetch(PDO::FETCH_ASSOC)){*/
    /*tarea
    CREAR UNA CARPETA DE PRACTICA CON UN ARCHIVO DE CONEXIÓN A UNA BASE DE DATOS CON DOS TABLAS CON FOREIGN Y PRIMARY KEYS Y POR LOS MENOS DOS REGISTROS, HACER UN ARCHIVO PHP PARA MOSTRAR EL LISTADO DE ESAS TABLAS*/
?>