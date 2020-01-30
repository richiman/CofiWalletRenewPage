<?php
class MvcController{
	public function template(){
		include "views/template.php";
	}
	public function linksPagesController(){
		if(isset($_GET["action"])){
		$linksController = $_GET["action"];
		}
		else{
		$linksController = "cuenta";
		}
		$response = LinksPages::linksPagesModel($linksController);
		include $response;
	}
}
?>
