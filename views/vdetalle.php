 <?php


   require_once('header.php');


		if (isset($_GET['oferta'])){			

			echo "
			<div id='contenedor_det'>
			 <form  action='../controllers/ccarrito.php' method='post'>

			 		<ul>
				       <li>
				            <h2>Ofertas</h2>
				             <input type='text'   NAME='tipo' id='tipo' value='ofertes' style='display:none' />
				       </li>
				       <li>
				           <label for='user'>Referencia:</label>
				           <input type='text'   NAME='id' id='id' value='".$resultado['id']."' readonly />
				       </li>
				       <li>
				           <label for='fechas'>Fechas:</label>
				           <input type='text'   NAME='fechas' id='fechas' value=' De ".$resultado['dataIni']." a ".$resultado['dataFin']."' readonly />
				       </li>
				       <li>
				         <label for='precio'>Precio :</label>
				           <input type='text'   NAME='precio' id='precio' value='0' readonly/>
				       </li>
				       <li>
				         <label for='cantidad'>Cantidad:</label>
				           <input type='text'   NAME='cantidad' id='cantidad' />
				       </li>


				       <li>
				         <label for='desc'>Descripción:</label>
				         <textarea rows='2' cols='50'>
				         	".$resultado['desc_oferta']."
				         </textarea>
				       </li>
				       
				       <li>
				          <button class='submit' type='submit'>Enviar</button>
				        </li>
					</ul>
						
					</form>
			</div>
			";

			
		}//si es oferta


		if (isset($_GET['vuelo'])){	

			echo "
			<div id='contenedor_det'>
			 <form  action='../controllers/ccarrito.php' method='post'>

			 		<ul>
				       <li>
				            <h2>Vuelo</h2>
				             <input type='text'   NAME='tipo' id='tipo' value='vuelos' style='display:none' />
				       </li>
				       <li>
				           <label for='user'>Referencia:</label>
				           <input type='text'   NAME='id' id='id' value='".$resultado['id']."' readonly />
				       </li>
				       <li>
				         <label for='desc'>Destino:</label>
				          <input type='text'   NAME='desc' id='desc' value='".$resultado['destino']."' readonly />				       
				       </li>
				       <li>
				           <label for='fechas'>Fechas:</label>
				           <input type='text'   NAME='fechas' id='fechas' value=' De ".$resultado['data_vol']."' readonly />
				       </li>
				       <li>
				         <label for='precio'>Precio :</label>

				           <select NAME='precio' id='precio'>
							  <option value='".$resultado['precio_base']."'>Basico</option>
							  <option value='".$resultado['precio_premium']."'>Premium</option>
							</select>
				       </li>
				       <li>
				         <label for='cantidad'>Cantidad:</label>
				           <input type='text'   NAME='cantidad' id='cantidad' />
				       </li>				       
				       
				       <li>
				          <button class='submit' type='submit'>Enviar</button>
				        </li>
					</ul>
						
					</form>
			</div>
			";

			
		}//si es oferta


if (isset($_GET['hotel'])){	

			echo "

			<div id='contenedor_det'>
			 <form  action='../controllers/ccarrito.php' method='post'>

			 		<ul>
				       <li>
				            <h2>Hotel</h2>
				             <input type='text'   NAME='tipo' id='tipo' value='hoteles' style='display:none' />
				       </li>
				       <li>
				           <label for='user'>Referencia:</label>
				           <input type='text'   NAME='id' id='id' value='".$resultado['id']."' readonly />
				       </li>
				       <li>
				         <label for='desc'>Nombre:</label>
				          <input type='text'   NAME='desc' id='desc' value='".$resultado['nom']."' readonly />				       
				       </li>
				       <li>
				           <label for='fechas'>Fechas:</label>
				           <input type='text'   NAME='fechas' id='fechas' value='N/A' readonly />
				       </li>
				       <li>
				         <label for='precio'>Precio :</label>

				           <select NAME='precio' id='precio'>
							  <option value='".$resultado['precio_base']."'>Basico</option>
							  <option value='".$resultado['precio_premium']."'>Premium</option>
							</select>
				       </li>
				       <li>
				         <label for='cantidad'>Cantidad:</label>
				           <input type='text'   NAME='cantidad' id='cantidad' />
				       </li>				       
				       
				       <li>
				          <button class='submit' type='submit'>Enviar</button>
				        </li>
					</ul>
						
					</form>

				<script src='http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false'></script>
				<script  type='text/javascript'>

					function iniciar(){
						var x=document.getElementById(\'x\').value;
						var y=document.getElementById(\'y\').value;
						var posicion=new google.maps.LatLng(x,y);
						var mapProp = {
						center:posicion,
						zoom:50,
						mapTypeId:google.maps.MapTypeId.ROADMAP
					};


			</div>
			";

				echo '

				<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
				<script  type="text/javascript">

				function iniciar(){
				var x=document.getElementById(\'x\').value;
				var y=document.getElementById(\'y\').value;
				var posicion=new google.maps.LatLng(x,y);
				var mapProp = {
				center:posicion,
				zoom:50,
				mapTypeId:google.maps.MapTypeId.ROADMAP
				};

				var map=new google.maps.Map(document.getElementById("googleMap")
				,mapProp);
				var marker = new google.maps.Marker({
				position: posicion,
				map: map

				});
				}google.maps.event.addDomListener(window, \'load\', iniciar);

				</script>

				<input  type="text" name="x" id="x" style="visibility:hidden" value="'.$resultado['x'].'">
				<input  type="text" name="y" id="y" style="visibility:hidden" value="'.$resultado['y'].'">
				<div id="googleMap" style="width:700px;height:320px;"></div>	

				';
			
		}//si es hotel

   require_once('footer.php');

?>