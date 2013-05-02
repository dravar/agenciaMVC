
<?php
 session_start();
require_once('model.php');

        $nick = $_POST['user'];
        $pass = $_POST['pass'];

        $tabla="usuaris";
        $busco="*";
        $param="login";//param es  los parametros del where 
        $paramres=$nick;//paramres es el valor del parametro introducido 
        $param2="password";
        $paramres2=$pass;


        $link = Conectar::con();   
        $consulta='SELECT '.$busco.' FROM '.$tabla.' WHERE '.$param.'="'.$paramres.'" AND '.$param2.'="'.$paramres2.'";';
        $link = Conectar::con();
        $resultado_consulta = $link->query($consulta);//Consulta si exite usuario     

            $num_f=$link->affected_rows; //Cuantas filas afectadas ? 0=no hay , >0 hay      
                
                if($num_f>0){ 
                    while ( $dat_user = mysqli_fetch_assoc($resultado_consulta)) {
                    $_SESSION["usuario"]=$dat_user["login"];
                    };//While
                }//if num 

             header("Location: ../index.php");

                   //  print_r($consulta);
                   //  print_r($_SESSION["usuario"]);
  ?>
