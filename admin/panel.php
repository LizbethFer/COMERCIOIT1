<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	require("conexion.php");

?>
    <h1>Listado de productos</h1>
    <a href="./?page=gestion_productos">** NUEVO PRODUCTO **</a><br><br>
    <?php
    if(isset($_GET['idProducto'])){
        $idProducto=$_GET['idProducto'];
        $mensaje=borrarProducto($idProducto);
        echo MostrarMensaje($mensaje);
    }
    ?>
    <br>
    <table>
    <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Marca</th>
    <th>Categoria</th>
    <th>Presentación</th>
    <th>Stock</th>
    <th colspan=2>Operaciones</th>
    </tr>
    <?php
    //metodos PDO=
    //query
    //execute
    //prepare
    //exec
    //fech
    //bindparam
    //bindvalue
    $sql='SELECT p.idProducto,p.Nombre,p.Precio,p.Presentacion,p.Stock,m.Nombre as marca,c.Nombre as categoria from productos p INNER JOIN marcas m ON P.Marca=m.idMarca INNER JOIN categorias c ON p.categoria=c.idCategoria';
    //$conexion->prepare($sql); para que la base de datos sea mas agil
    $rows=$conexion->prepare($sql);
    $rows->execute();
    while($row=$rows->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
    <td><?php echo $row['Nombre']?> </td>
    <td><?php echo $row['Precio']?> </td>
    <td><?php echo $row['marca']?> </td>
    <td><?php echo $row['categoria']?> </td>
    <td><?php echo $row['Presentacion']?> </td>
    <td><?php echo $row['Stock']?> </td>
    <td><a href="./?page=gestion_productos&idProducto=<?php echo $row['idProducto']?>">Actualizar</a></td>
    <td><a href="./?idProducto=<?php echo $row['idProducto']?>">Borrar</a></td>
    </tr>   
    <?php
    }
    ?>
    </table>
    <?php
    
    

        /*$sql='DELETE FROM productos WHERE idProducto=:idProducto';
        $producto=$conexion->prepare($sql);
        $producto->bindParam(':idProducto',$idProducto,PDO::PARAM_INT);*/
       /* $conexion->query('DELETE FROM productos WHERE idProducto='.$idProducto);*/
       /* if($producto->execute()){
            echo "producto borrado";
        }else{
            echo "producto no borrado";
        }*/
       /* $sql='DELETE FROM productos WHERE idProducto=?';
        $producto=$conexion->prepare($sql);
        $producto->bindParam(1,$idProducto,PDO::PARAM_INT);
        if($producto->execute()){
            echo "producto borrado";
        }else{
            echo "producto no borrado";
        }*/

    ?>
    
</body>
</html>