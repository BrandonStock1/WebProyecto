<?php 
    include_once("./mysql_functions.php");
?>
</head>
<meta charset="UTF-8">
<link rel = "stylesheet" href="styleregistro.css">
    <link rel="stylesheet" href="./css/styleregistro.css">
    <title>Registro</title>
<body>
<section class ="form-registro">
    <h2>REGISTRO</h2>
    <form action= "./Registro.php" method="POST">
        <label for ="nombre"> Nombre de usuario: </label>
        <input class= "controls" type="text" name="nombre_de_usuario"  placeholder ="Introduzca su nombre de usuario"> <br> <br>
        <label for ="mail"> Mail: </label>
        <input class = "controls" type="email" name="mail"  placeholder ="Introduzca su mail"> <br> <br>
        <label for ="contrasenia"> Contraseña: </label>
        <input class = "controls" id = "A" type="password" name="contrasenia"  placeholder ="Introduzca la contraseña"> <br> <br>
        <?php
            if(isset($_POST["nombre_de_usuario"])&& isset($_POST["mail"]) && isset($_POST["contrasenia"])){
                $query = "SELECT * FROM usuario where nombre_de_usuario  = ?";
                $result = DB::getInstance()->query($query, array($_POST["nombre_de_usuario"]));
                if($result->count() != 0){
                    echo "<p class='usuario'>Este usuario ya existe</p>";
                }
                else {
                    $query = "INSERT INTO usuario (nombre_de_usuario, mail, contrasenia) Values (?, ?, ?) ";
                    $result = DB::getInstance()->query($query, array($_POST["nombre_de_usuario"], $_POST["mail"], $_POST["contrasenia"]));
                    
                    echo "<p class='usuario_1'> Haz creado este usuario</p>";
                    echo "<script>window.location.replace('./')</script>";
                }
            }
        ?>
        <input class = "buttons" type="submit" value="Registrarse">
    </form>
</section>
</body>
</html>