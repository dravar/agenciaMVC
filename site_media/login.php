<?php
session_start();

if(isset($_SESSION["usuario"])){

header("Location: index.php");
}//si estas logueado
  ?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"> 
<script>



</script>

</head>

<body >
    <div id="registro">

 <form class="registro" action="scripts/login.php" method="post">
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

    </div>
</body>
</html>
