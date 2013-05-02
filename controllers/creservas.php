<?php 
	session_start();
	require_once "../models/model.php";

	if ($_SESSION['id_usuari']!=0){


		if (isset($_SESSION['carrito'])){
			$cont=0;
			$len = count($_SESSION['carrito']);

			$carrito=$_SESSION['carrito'];
			
			$insert = new Model;
			$ultim=$insert->generar_reserva($id,$_SESSION['id_usuari']);


			while($cont<$len){

				$id= $carrito[$cont]['id'];
				$tipo= $carrito[$cont]['tipo'];
				$cantidad= $carrito[$cont]['cantidad'];
				$precio= $carrito[$cont]['precio'];


			
				//$oferta = new Model;
				$resultado = $oferta->validarStock_reserva("ofertes", $id);
				$stock = $resultado['n_places'];
				
					if ($stock > $cantidad) {
						//$oferta->generar_reserva($id,$_SESSION['id_usuari']);
						$stock = $stock - $cantidad;
						$insert->guardar_reserva($id,$cantidad,$precio,$tipo);
						$insert->actualizarStock_reserva($tipo, $id, $stock);

						$_SESSION['info']  = "Reserva Completada.";

					} else {
						$_SESSION['msg']  = "No hay plazas suficientes";
					}


			$cont++;
			}//while
			
		} else {
			$_SESSION['msg']  = "No tienes nada reservado.";
			 header("location:../index.php");
		}//if no exs carrito

} else {
		$_SESSION['msg']  = "Logueate para reservar.";
		 header("location:../index.php");
}//si no estas logueado

/*
		if (isset($_GET['oferta'])){

			$oferta = new Model;
			$resultado = $oferta->validarStock_reserva("ofertes", $_GET['oferta']);
			$stock = $resultado['n_places'];
			
			if ($stock > 0) {
				$oferta->guardar_reserva($_GET['user'],"ofertes",$_GET['oferta']);
				$stock = $stock -1;
				$oferta->actualizarStock_reserva("ofertes", $_GET['oferta'], $stock);
				$_SESSION['info']  = "Reserva Completada.";
			} else {
				$_SESSION['msg']  = "No hay plazas";
			}
    
		}//si es oferta

		if (isset($_GET['vuelo'])){
			$vuelo = new Model;
			$resultado = $vuelo->validarStock_reserva("vols", $_GET['vuelo']);
			$stock = $resultado['n_places'];
			
			if ($stock > 0) {
				$vuelo->guardar_reserva($_GET['user'],"vols",$_GET['vuelo']);
				$stock = $stock -1;
				$vuelo->actualizarStock_reserva("vols", $_GET['vuelo'], $stock);
				$_SESSION['info']  = "Reserva completada";
			} else {
				$_SESSION['msg']  = "No hay plazas";
			}
		}

		if (isset($_GET['hotel'])){
			$hotel = new Model;
			$resultado = $hotel->validarStock_reserva("hotels", $_GET['hotel']);
			$stock = $resultado['n_places'];
			
			if ($stock > 0) {
				$hotel->guardar_reserva($_GET['user'],"hotels",$_GET['hotel']);
				$stock = $stock -1;
				$hotel->actualizarStock_reserva("hotels", $_GET['hotel'], $stock);
				$_SESSION['info']  = "Reserva Completada";
			} else {
				$_SESSION['msg']  = "No hay plazas.";
			}
		}

	} else {
		$_SESSION['msg']  = "Logueate para reservar.";
	}

	*/
	
	header("Location: ../");
?>