<?php
$host='localhost';
$usuario="root";
$clave="";
$bd="comercioit";
try{
   $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$clave);
  // echo "Nos conectamos";
}catch(PDOException $e) {
    print 'ERROR ALERTA'.$e->getmessage();

}
?>