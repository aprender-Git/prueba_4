<?php

	require_once('conexion.php');

	$validator = array('success' => false, 'messages' => array());

	$img = "";
	if (isset($_POST["foto"]) && $_POST["foto"] != "") {
	$img = base64_decode($_POST["foto"]);
	}

	$comentario = $_POST["comentario"];
	$fecha = date("Y-m-d");
	if (isset($_POST["fecha"]) && $_POST["fecha"] != "") {
		$fecha = $_POST["fecha"];
	}

	$url = "";
	$img = "img/".$url.".jpg";
 	

	if(!empty($_FILES["imagen"]["name"])){

		$fileName = basename($_FILES["imagen"]["name"]);
		$targetFilePath = 'img/Original Images/'.$fileName;
		$url = $targetFilePath;
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

		$allowTypes = array('jpg', 'png', 'jpeg');
		if (in_array($fileType, $allowTypes)) {
			//if(copy($_FILES["imagen"]["tmp_name"], $targetFilePath)){
				//echo $uploadedFile = $fileName;



		$sql = 'INSERT INTO url (url, comentario, fecha) VALUES (:url, :comentario, :fecha)';
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':url', $url, PDO::PARAM_STR);
		$stmt->bindValue(':comentario', $comentario, PDO::PARAM_STR);
		$stmt->bindValue(':fecha', $fecha, PDO::PARAM_STR);
		
		
		if ($stmt->execute()) {
			$validator['success'] = true;
			$validator['messages'] = "DATOS GUARDADOS";
		} else {
			$validator['messages'] = "ERROR AL GUARDAR DATOS";
		}
		
	} else {
		$validator['messages'] = "ERROR AL GUARDAR LA FOTO";
	}

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($validator);
	exit();
			//}
		}
	
?>