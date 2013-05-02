<?php
    require_once('models/model.php');

	
		$vuelo_object = new Model;
		$vuelo_query = $vuelo_object->get_vuelo();

		$hotel_object= new Model;
		$hotel_query = $hotel_object->get_hotel();

		$oferta_object = new Model;
		$oferta_query = $oferta_object->get_oferta();
	
    
    require_once('views/vportada.php');

?>
