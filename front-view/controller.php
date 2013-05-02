<?php

 require_once('front-view/view.php');
  require_once('front-view/model.php');

  	function MostrarOfertas($principal_in,$principal_fin,$etiqueta_in,$etiqueta_fin){
     echo $principal_in;
     Mostrar::oferta($etiqueta_in,$etiqueta_fin);          
     echo $principal_fin;
	 }//MostrarOfertas


	 function MostrarHoteles($principal_in,$principal_fin,$etiqueta_in,$etiqueta_fin){
     echo $principal_in;
     Mostrar::hotel($etiqueta_in,$etiqueta_fin);          
     echo $principal_fin;
	 }//Mostrar


	 function MostrarVuelos($principal_in,$principal_fin,$etiqueta_in,$etiqueta_fin){
     echo $principal_in;
     Mostrar::vuelo($etiqueta_in,$etiqueta_fin);          
     echo $principal_fin;
	 }//Mostrar


     


?>