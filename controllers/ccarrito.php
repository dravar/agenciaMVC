<?php 
	session_start();
	require_once "../models/model.php";

	if ($_SESSION['id_usuari']!=0){
		
		if (isset($_SESSION['carrito'])==false){
			$cont=0;
		} else {
			$cont = count($_SESSION['carrito']); //si array tiene 9 posiciones , de vuelve 9 ya que no cuenta desde 0 por ello no cal incrementr cont xke no lo machaca	
		}//if no exs carrito

				$id=$_POST['id'];
				$tipo=$_POST['tipo'];
				$cantidad=$_POST['cantidad'];
				$precio=$_POST['precio'];

				/* IMPORTANTE */
				
				//modificar cdetalle para que mande aqui con estos parametros
				//id oferta,tipo(hotel,oferta,vuelo),cantidad,precio


			$carrito[$cont]=array('id'=>$id,'tipo'=>$tipo,'cantidad'=>$cantidad,'precio'=>$precio); 
			$_SESSION['carrito']=$carrito;

			/*
				id= id del vuelo/oferta/hotel
				tipo =  si es vuelo/oferta/hotel
				producto = name o desc de vuelo/oferta/hotel
				cantidad = cantidad
				precio = precio cmab si es turista o normal
			*/

			
	} else {
		$_SESSION['msg']  = "Logueate para reservar.";
		 header("location:../index.php");
	}//si esta logueado

	
	
	header("Location: ../");
?>