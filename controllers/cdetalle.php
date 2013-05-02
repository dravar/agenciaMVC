<?php 
	session_start();
	require_once "../models/model.php";

		if (isset($_GET['oferta'])){

			$oferta = new Model;
			$resultado = $oferta->get_oferta_detalle($_GET['oferta']);
			
		}

		if (isset($_GET['vuelo'])){
			$vuelo = new Model;
			$resultado = $vuelo->get_vuelo_detalle($_GET['vuelo']);
			
		}

		if (isset($_GET['hotel'])){
			$hotel = new Model;
			$resultado = $hotel->get_hotel_detalle($_GET['hotel']);
	
		}

	

	
	
	  require_once('../views/vdetalle.php');
?>