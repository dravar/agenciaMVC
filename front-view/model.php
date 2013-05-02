<?php     

class Conectar{

 public static function con(){

        $host="localhost";
        $user="root";
        $password="";
        $dbname="bbdd_agencia";

        $link = new mysqli($host, $user, $password,$dbname);
        return $link;
    }
}


class Listar{
        
     public static function hotel(){
        $consulta="SELECT  *  FROM  hotels Order By id Desc limit 10;";        
            $link = Conectar::con();
            $resultado = $link->query($consulta); 
           return $resultado;  //idea de pau  

        }//func hoteles

      public static function vuelo(){
        $consulta="SELECT  *  FROM  vols Order By id Desc limit 10;";        
            $link = Conectar::con();
            $resultado = $link->query($consulta); 
           return $resultado;  //idea de pau  
        }//func vuelo  


public static function oferta(){
        $consulta="SELECT  *  FROM  ofertes Order By id Desc limit 10;";        
            $link = Conectar::con();
            $resultado = $link->query($consulta); 
           return $resultado;  //idea de pau  
        }//func vuelo  
}//listar



class Mostrar{        
     public static function hotel($etiqueta_in,$etiqueta_fin){
       $reg = Listar::hotel();

       while ( $dat_hotel = mysqli_fetch_assoc($reg)) {
                $nombre=$dat_hotel["nom"];
                $plazas=$dat_hotel["n_places"];
                $precio=$dat_hotel["preu_base"];

                 echo $etiqueta_in.'El '.$nombre.' tiene '.$plazas.' plazas disponibles con precios desde '. $precio.' euros'.$etiqueta_fin;
         };//While

        }//func hoteles

      public static function vuelo($etiqueta_in,$etiqueta_fin){
         $reg = Listar::vuelo();

       while ( $dat_vuelo = mysqli_fetch_assoc($reg)) {
                $vuelo=$dat_vuelo["id"];
                $fecha=$dat_vuelo["data_vol"];
                $plazas=$dat_vuelo["n_places"];
                $precio_t=$dat_vuelo["preu_turist"];
                $precio_p=$dat_vuelo["preu_primera"];
                 echo $etiqueta_in.' El vuelo numero '.$vuelo.' con fecha '.$fecha.' tiene '.$plazas.' plazas disponibles con precios desde '.$precio_t.'€ hasta '.$precio_p.'€'.$etiqueta_fin;
         };//While
        }//func vuelo  

        public static function oferta($etiqueta_in,$etiqueta_fin){
         $reg = Listar::oferta();

       while ( $dat_oferta = mysqli_fetch_assoc($reg)) {
                $descripcion=$dat_oferta["desc_oferta"];
                $plazas=$dat_oferta["n_places"];
                $fecha_in=$dat_oferta["dataIni"];
                $fecha_fin=$dat_oferta["dataFin"];

                 echo $etiqueta_in.' Oferta: '.$descripcion.' con fecha '.$fecha_in.' hasta '.$fecha_fin.' tiene '.$plazas.' plazas disponibles'.$etiqueta_fin;
         };//While
        }//func vuelo  




}//Mostrar 



?>