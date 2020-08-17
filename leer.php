<?php
$archivo="archivo.txt";
$file=@fopen($archivo,r);
while($linea=fgets($file)){
    echo $linea."<br>";
}
fclose($file);

?>