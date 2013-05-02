



<div id="ofertas">
            <table id="tabla_of">
                <tr>
                     <td id="lugar_of_cab">Lugar</td>
                      <td id="descripcion_of_cab">Oferta</td>
                       <td id="comprar_of_cab"> </td>
                        </tr >

                      <tr> 
                      <td colspan=3> <hr id="oferta_hr"></td>
                   </tr >
				   
	<?php 			   
	
	
				   
        foreach ($oferta_query as $oferta) {
		
		 echo "<tr>
                   <td id='lugar_of' >".$oferta['lugar']."</td>
                   <td id='descripcion_of' >".$oferta['desc_oferta']."</td>
                   <td id='comprar_of'><A HREF='controllers/cdetalle.php?oferta=".$oferta['id']."'>Ver +</A> </td></td>
               </tr>";
		
			//
		}
     ?>  
				   
   
 </table>  </div>

 
 
<div id="vuelos">
            <table id="tabla_vu">
                <tr>
                     <td id="fecha_vu_cab">Fecha</td>
                     <td id="lugar_vu_cab">Destino</td>
                      <td id="precio_vu_cab">Desde</td>
                       <td id="comprar_vu_cab"> </td>
                 </tr>  
                    <tr> 
                      <td colspan=3> <hr id="oferta_hr"></td>
                   </tr >
<?php 			   
				   
		//$filas =count($vuelo_query);
		$i=0;
		
		//die(var_dump($vuelo_query));
	foreach ($vuelo_query as $vuelo) {			
		 echo " <tr>
					<td id='fecha_vu'>".$vuelo['data_vol']."</td>
					<td id='lugar_vu' >".$vuelo['destino']."</td>
					<td id='precio_vu' >".$vuelo['precio_base']."€</td>
					<td id='comprar_vu'> <a href='controllers/cdetalle.php?vuelo=".$vuelo['id']."'>Ver +</a></td>
				</tr>";
		
		
		}
     ?>   
			</table> 
                </div>

 
 


<div id="hoteles">
            <table id="tabla_ho">
                <tr>
                     <td id="nombre_ho_cab">Hotel</td>
                     <td id="plazas_ho_cab">Plazas</td>
                      <td id="precio_ho_cab">Precio</td>
                       <td id="comprar_ho_cab"> </td>
                 </tr>  
                    <tr> 
                      <td colspan=3> <hr id="oferta_hr"></td>
                   </tr >
<?php 			   
				   
				   
				   
        foreach ($hotel_query as $hotel) {			
		 echo " <tr>
					<td id='fecha_ho'>".$hotel['nom']."</td>
					<td id='lugar_ho' >".$hotel['n_places']."</td>
					<td id='precio_ho' >".$hotel['precio_base']."€</td>
					<td id='comprar_ho'><a href='controllers/cdetalle.php?hotel=".$hotel['id']."'>Ver +</a></td>
				</tr>";
		
		
		}
     ?>   
			</table> 
                </div>





