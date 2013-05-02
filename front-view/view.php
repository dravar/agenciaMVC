<?php
  require_once('front-view/controller.php');

	function MostrarLogin(){

            if(isset($_SESSION["usuario"])==false){

              echo '
                 <form class="registro" action="front-view/login.php" method="post">
                    <ul>
                       <li>
                            <h2>Login</h2>
                       </li>
                       <li>
                           <label for="user">Usuario:</label>
                           <input type="text"  placeholder="tu usuario" NAME="user" id="user" required />
                       </li>
                       <li>
                           <label for="pass">Password:</label>
                           <input type="password" id="pass" name="pass" placeholder="tu password" required />
                       </li>
                       
                        <li>
                          <button class="submit" type="submit">Enviar</button>
                        </li>
                    </ul>
                </form>
              ';

            }else{
            	echo '
            	<label>Usuario: </label>    
        		<label>'.$_SESSION["usuario"].' </label>  
        		 <label> <a href="front-view/desconectar.php">Desconectar</a> </label>


            	';//echo

                

            }//si no estas logueado


	 }//Mostrar

