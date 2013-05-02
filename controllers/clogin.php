<?php 
	session_start();
	require_once('../models/model.php');

	if (isset($_GET['accion'])){
		if ($_GET['accion']=="logout"){
			session_destroy();
		}

	} else {
		if (isset($_GET['user']) && isset($_GET['pass'])){
			$usuario = new Model;
    		$usuariolog = $usuario->login($_GET['user'], $_GET['pass']);

    		if(isset($usuariolog)){
    			$_SESSION['id_usuari'] = $usuariolog['id'];
	            $_SESSION['usuari'] = $usuariolog['nom'];
    		} else {
    			$_SESSION['msg'] = "Nombre de usuario o pass incorrectos.";
    		}

		}
	}
	
	header("Location: ../");
	

 ?>