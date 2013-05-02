<?php
    session_start();
	
		if(isset($_SESSION['id_usuari'])==false){
		$_SESSION['id_usuari']=0;	
		};
		
		if(isset($_SESSION['action'] )==false){
		$_SESSION['action'] ='portada';
		};	
				
?>
<!DOCTYPE html>
<html>
    <head>
	 <title>Nature Traveller Agency </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="site_media/css/base_template.css">

        	<script type="text/javascript">

</script>


    </head>
   
    <header  id="cabecera">
	    <h1 id="titulo_prin">NATURE TRAVELLER AGENCY</h1>
        <h2 id= "subtitulo">Welcome to the shine world</h2>
    </header>
    <body>

        <div id="menu">
            <a href="usuaris/">Gestió usuaris</a>
			<a href='controllers/clista.php?vuelo'>Vuelos</a>
			<a href='controllers/clista.php?hotel'>Hoteles</a>
			<a href='controllers/clista.php?oferta'>Ofertas</a>
            <a href='controllers/cvercarrito.php'>Ver Carrito</a>
			
	<?php 
        if (isset($_SESSION['msg'])){
            echo "<section id='error'><b>".$_SESSION['msg']."</b></section>";
            unset($_SESSION['msg']);
        }

        if (isset($_SESSION['info'])){
            echo "<section id='info'><b>".$_SESSION['info']."</b></section>";
            unset($_SESSION['info']);
        }
     ?>
	 
	 
	 <?php
        if (isset($_SESSION['usuari'])){
            echo "<p>Bienvenido ".$_SESSION['usuari'].". <a href='controllers/clogin.php?accion=logout'>Desconectar</a></p>";
        } else {
        ?>
            <section id="login">
                <form action="controllers/clogin.php?accion=login">
                    <input name="user" type="text" placeholder="Usuario"/>
                    <input name="pass" type="password" placeholder="Password"/>
                    <input type="submit" type="text" value="login">
                </form>
            </section>
        <?php
        }
        ?>
		
		
        </div>
            <?php 
                
                require_once('controllers/cportada.php');






                
            ?>
			
		

    </body>
</html>
