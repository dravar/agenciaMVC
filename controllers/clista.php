<?php 
	session_start();
	require_once "../models/model.php";

		if (isset($_GET['oferta'])){

			$oferta_object = new Model;
			$oferta_query = $oferta_object->get_oferta_lista();
			
		}

		if (isset($_GET['vuelo'])){
			$vuelo_object = new Model;
			$vuelo_query = $vuelo_object->get_vuelo_lista();
			
		}

		if (isset($_GET['hotel'])){
			$hotel_object = new Model;
			$hotel_query = $hotel_object->get_hotel_lista();
	
		}

	
	  require_once('../views/vlista.php');
?>