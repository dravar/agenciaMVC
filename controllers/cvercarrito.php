<?php 
	session_start();
	require_once "../models/model.php";

	if (isset($_SESSION['carrito'])){

		if(isset($_POST['enviar'])) { 
    
			$enviar = new Model;
			$ultim = $enviar->generar_reserva($_SESSION['usuari']);//devielve el ultimo registro de reserva


					 $carrito =  $_SESSION['carrito'];
				       $len = count($_SESSION['carrito']);
				       $cont=0;
				       $precio=0;

				       while($cont<$len){
				       	
				    	   	$x = $enviar->guardar_reserva($ultim,$carrito[$cont]['id'],$carrito[$cont]['cantidad'],$carrito[$cont]['precio'],$carrito[$cont]['tipo']) ;

				       	$cont++;
				       }//while 

		} 



		require_once('../views/vcarrito.php');
		 header("location:../index.php");



		} else {
				$_SESSION['msg']  = "No tienes nada en el carrito";
		}//if no exs carrito


	//header("Location: ../");
?>