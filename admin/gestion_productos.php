<?php
	require("conexion.php");

            if(isset($_GET['idProducto'])){
            ?>
            <h1>Actualizacion de producto</h1>
            <?php
            }else{ 
            ?>
            <h1>Registro de nuevos productos</h1>
            <?php } ?>
            <br><br>
			<div class="contact-form">
				<form action="" method="post">
					<input type="text" class="textbox" placeholder="Nombre" name="nombre">
                    <input type="text" class="textbox" placeholder="Precio" name="precio">            
                    <select name="Marca" id="" class="form-control" style="width:70%">
                    <option>Marca</option>
                    <?php
                         $sql='SELECT * FROM marcas';
                         $conexion->prepare($sql);
                         foreach($conexion->query($sql) as $row){
                 
                    echo "<option value=".$row['idMarca'].">".$row['Nombre']."</option>";
                     }
                    ?>
                    </select><br>
                    
                    <select name="categoria" id="" class="form-control" style="width:70%">
                    <option>Categoria</option>
                    <?php
                         $sql='SELECT * FROM categorias';
                         $conexion->prepare($sql);
                         foreach($conexion->query($sql) as $row){
                 
                    echo "<option value=".$row['idCategoria'].">".$row['Nombre']."</option>";
                     }
                    ?>
                    </select>
                    <input type="text" class="textbox" placeholder="Presentacion" name="presentacio">
                    <input type="text" class="textbox" placeholder="Stock" name="stock">
                    <?php
                     
                    if(isset($_GET['idProducto'])){ 

                    ?>
					
					<input type="submit" value="Actualizar nuevo producto">
                    <?php
                     }else{

                    ?>
                    <input type="submit" value="Guardar nuevo producto">
                    <?php
                     }

                    ?>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>