<?php
include "admin/conexion.php";

function cargarPagina($pagina){
    $modulo=$pagina.".php";
    if (file_exists($modulo)) {
        include($modulo);
    }else{
        include("404.php");
    }

}
function MostrarMensaje($rta){
    $mensaje="";
    switch ($rta) {
        case '0x001':
            $mensaje="<span style=color:red> Datos de nombre invalido</span>";
            break;
        case '0x002':
            $mensaje="<span style=color:orange>Datos de email invalidos</span>";
            break;
        case '0x003':
            $mensaje="<span style=color:red>Datos de mensaje invalidos</span>";
            break;    
        case '0x004':
            $mensaje="<span style=color:green>Consulta enviada correctamente</span>";
            break;
        case '0x005':
            $mensaje="<span style=color:red>Consulta no enviada</span>";
            break;
        case '0x006':
            $mensaje="<span style=color:red>Nombre y correo no pueden quedar en blanco</span>";
            break; 
        case '0x007':
            $mensaje="<span style=color:green>Producto borrado corectamente</span>";
            break; 
        case '0x008':
            $mensaje="<span style=color:red>ERROR producto no borrado</span>";
            break;   
    }
    return $mensaje;
}
function mostrarProductos(){
    $archivo="listadoProductos.csv";
    if ($gestor=@fopen($archivo,r)) {
        while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
            echo '<div class="product-grid">
			<div class="content_box">
				<a href="./?page=productos">
                    <div class="
                    left-grid-view grid-view-left">
						<img src="images/productos/'.$datos[0].'.jpg" class="img-responsive watch-right" alt=""/>
					</div>
				</a>
				<h4><a href="#">'.$datos[1].'</a></h4>
				<p>'.$datos[4].'-'.$datos[5].'</p>
				<span>$'.$datos[2].'</span>
			</div>
		</div>';
        }

    
    }
    else{
        echo "no puedo abrir el archivo";
    }
}
function borrarProducto($idProducto){
    global $conexion;
    $sql='DELETE FROM productos WHERE idProducto=?';
        $producto=$conexion->prepare($sql);
        $producto->bindParam(1,$idProducto,PDO::PARAM_INT);
        if($producto->execute()){
            $mensaje="0x007"; 
        }else{
            $mensaje="0x008"; 
        }
        return $mensaje;  
}

?>