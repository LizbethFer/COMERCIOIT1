<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
if (empty($nombre)) {//para que verifique si esta vacio
    header("location:./?page=contacto&rta=0x001");
}
elseif(is_numeric($nombre)){
    header("location:./?page=contacto&rta=0x001");

}
elseif (strlen($nombre)<3) {
    header("location:./?page=contacto&rta=0x001");
}
elseif (is_numeric(substr($nombre,0,1))) {
    header("location:./?page=contacto&rta=0x001");
}
elseif (empty($email)) {//para que verifique si esta vacio
    header("location:./?page=contacto&rta=0x002");
}elseif (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {//para validar si tiene formato de mail
    header("location:./?page=contacto&rta=0x002");
}
elseif (empty($mensaje)) {//para que verifique si esta vacio
    header("location:./?page=contacto&rta=0x003");
}
elseif (strlen($mensaje)>400) {
    header("location:./?page=contacto&rta=0x003");}
else{
    $para="fernandez.lizbeth93@gmail.com";
    $asunto="contacto sistema inventario sitio web";
    $cuerpo="<h1>Comercioit - Datos de contacto</h1>
    <b>Nombre: </b>".$nombre."<br>
    <b>Nombre: </b>".$email."<br>
    <b>Nombre: </b>".$mensaje."<br>";
    $cabecera = "From:" . $email . "\r\n";
	$cabecera.= "MIME-Version: 1.0\r\n";
    $cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";
    /*mail(para,asunto,cuerpo,header);
    echo "correo enviado";*/
    if (!mail($para,$asunto,$cuerpo,$cabecera)){
        header("location:./?page=contacto&rta=0x004");
    }else{
        header("location:./?page=contacto&rta=0x005");    }

}
/*elseif(!ctype_alpha($nombre)){
    echo "ERROR! no puede colocar números";
}funcion para que verifique que no ponga numeros*/
?>