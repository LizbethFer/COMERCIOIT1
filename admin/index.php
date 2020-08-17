	<?php
	require_once("../functions.php");
	if(isset($_GET["page"])){
		$page= $_GET["page"];
	}
	else{
		$page="panel";
	}
	 
	include "header.php";
	?>
			<section id="page">
			<?php
			CargarPagina($page);
			
			
			?>
			</section>
	