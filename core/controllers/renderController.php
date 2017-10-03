<?php 
	function RenderView($_key){
		$file = "layout/".$_key.".php";
		if (file_exists($file)) {
			include($file);
		}else{
			echo "No existe el archivo aún.";
		}
	}


 ?>