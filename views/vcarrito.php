
<?php
  require_once('header.php');
		if (isset($_SESSION['carrito'])){


			echo "
			<div id='contenedor_carr'>

			 		<ul>
				       <li>
				            <h2>Carrito de la compra</h2>
				       </li>";

				       $carrito =  $_SESSION['carrito'];
				       $len = count($_SESSION['carrito']);
				       $cont=0;
				       $precio=0;

				       while($cont<$len){
				       	$precio+=$carrito[$cont]['precio'];
				       	
				       	echo "
					       	<li>
					       		
					           <label for='tipo'><b>Tipo de reserva:</b></label>
					           <input type='text'  size='10'  NAME='tipo' id='tipo' value='".$carrito[$cont]['tipo']."' readonly />				      

					           <label for='id'><b>Referencia:</b></label>
					           <input type='text' size='10'  NAME='id' id='id' value='". $carrito[$cont]['id']."' readonly />

					           <label for='precio'><b>Precio :</b></label>
					           <input type='text'  size='10'  NAME='precio' id='precio' value='".$carrito[$cont]['precio']."' readonly />	

					           <label for='cantidad'><b>Cantidad:</b></label>
					           <input type='text'  size='2'  NAME='cantidad' id='cantidad' value='".$carrito[$cont]['cantidad']."' readonly/>
						      

					       </li> ";


				       	$cont++;
				       }//while 


				      echo  "
					       
					       <li>
					       <label for='total'><b>Precio Total:</b></label>
					         <input type='text'  size='2'  NAME='total' id='total' value='".$precio."' readonly/>
					         <br>
					         <form method='post' action='".$_SERVER['PHP_SELF']."'> 
					          	<button class='submit' name='enviar' id='enviar' type='submit'>Enviar</button>
					          </form>
					        </li>
						</ul>
				</div>
				";


			}else{

				$_SESSION['msg']  = "No  tienes nada en el carrito";



			}//if

  require_once('footer.php');

?> 