<?php

class LinksPages{

	public function linksPagesModel($linksModel){

		if($linksModel == "perfil" ||
		   $linksModel == "historial" ||
			 $linksModel == "cuenta" ||
			 $linksModel == "pagos" ||
			 $linksModel == "retirar" ||
		   $linksModel == "comisionista"){

			$module = "views/modules/".$linksModel.".php";

		}

		else if($linksModel == "index" ){

			$module = "views/modules/home.php";

		}

		else{

			$module = "views/modules/home.php";

		}

		return $module;

	}

}


?>
