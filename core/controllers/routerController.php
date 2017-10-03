<?php 
	//Functions that routes all the views and controllers.
	function GetRoute(){
		if (isset($_GET['url'])) {
			$view = $_GET['url'];
		}else{
			$view = "home";
		}

		Router($view);
	}


	function Router($_view){
		require 'core/controllers/renderController.php';
		switch ($_view) {
			case 'home':
				RenderView("home");
				break;

			//Case alumnos.
			case 'alumnos':
				RenderView("alumnos");
				break;

			//Case maestros.
			case 'maestros':
				RenderView("maestros");
				break;

			//Case administrador.
			case 'administrador':
				RenderView("administrador");
				break;		

			//Case error 404.
			default:
				RenderView("404
					");
				break;
		}
	}
 ?>