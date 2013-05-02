

<?php

  require_once('header.php');


		if (isset($_GET['oferta'])){

			echo '
			<div id="contenedor_det">
				<table id="tabla_det">
					<tr>
						<td id="lugar_det_cab">Lugar</td>			 
						<td id="descripcion_det_cab">Oferta</td>
						<td id="comprar_det_cab"> </td>
					</tr >

					<tr> 
						<td colspan=5> <hr id="oferta_hr"></td>
					</tr > ';



			foreach ($oferta_query as $oferta) {
		
		 echo "<tr>
                   <td id='lugar_of' >".$oferta['lugar']."</td>
                   <td id='descripcion_of' >".$oferta['desc_oferta']."</td>
                   <td id='comprar_of'><A HREF='../controllers/cdetalle.php?oferta=".$oferta['id']."'>Ver +</A> </td></td>
               </tr>";
		
			//
		}
		echo "
				</table> 
			</div>
			";

			
		}

		if (isset($_GET['vuelo'])){
			echo '
			<div id="contenedor_det">
				<table id="tabla_det">
					<tr>
					<td id="fecha_det_cab">Fechas</td>		
						<td id="lugar_det_cab">Lugar</td>									 
						<td id="precio_det_cab">Precio Turista</td>
						<td id="comprar_det_cab"> </td>
					</tr >

					<tr> 
						<td colspan=4> <hr id="oferta_hr"></td>
					</tr > ';



	foreach ($vuelo_query as $vuelo) {			
		 echo " <tr>
					<td id='fecha_vu'>".$vuelo['data_vol']."</td>
					<td id='lugar_vu' >".$vuelo['destino']."</td>
					<td id='precio_vu' >".$vuelo['precio_base']."€</td>
					<td id='comprar_vu'> <a href='../controllers/cdetalle.php?vuelo=".$vuelo['id']."'>Ver +</a></td>
				</tr>";
				
				}
				
				echo "
				</table> 
			</div>
			";
			
		}

		if (isset($_GET['hotel'])){
			echo '
			<div id="contenedor_det">
				<table id="tabla_det">
					<tr>
						<td id="nom_det_cab">Nombre</td>
						<td id="plazas_det_cab">Plazas</td>
						<td id="precio_det_cab">Precio </td>
						
						<td id="comprar_det_cab"> </td>
					</tr >

					<tr> 
						<td colspan=4> <hr id="oferta_hr"></td>
					</tr > ';



			 foreach ($hotel_query as $hotel) {			
		 echo " <tr>
					<td id='fecha_ho'>".$hotel['nom']."</td>
					<td id='lugar_ho' >".$hotel['n_places']."</td>
					<td id='precio_ho' >".$hotel['precio_base']."€</td>
					<td id='comprar_ho'><a href='../controllers/cdetalle.php?hotel=".$hotel['id']."'>Ver +</a></td>
				</tr>";
		
		
		}
		
		echo "
				</table> 
			</div>
			";
	
		}

		 require_once('footer.php');
?>

				   
	
				   
   

 
 