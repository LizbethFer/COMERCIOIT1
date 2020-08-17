<?php
$archivo="archivo.txt";
/*define("IVA",21);
echo IVA;se usa como variable pero que no se puede cambiar*/
if (@fopen($archivo,r)) {
    echo "si puedo abrir el archivo";

}
else{
    echo "no puedo abrir el archivo";
}
?>