<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
    <input type="text" name="texto">
    <input type="submit" value="enviar">
    </form>
    <?php
    if (isset($_GET['texto'])) {
        $texto="\n".$_GET['texto'];
        $archivo="archivo.txt";
        $file=@fopen($archivo,a);
        fwrite($file,$texto);
        fclose($file);
        echo "escribiendo";
    }
    
    ?>
</body>
</html>