<?php 
    include_once("./mysql_functions.php");
?>
<?php 
        if(isset($_POST["nombre_de_usuario"])){
            if($_POST["nombre_de_usuario"] != "" &&  $_POST["contrasenia"] != ""){
                $query = "SELECT * FROM usuario WHERE nombre_de_usuario = ?";
                $result = DB::getInstance()->query($query, array($_POST["nombre_de_usuario"]),array($_POST["contrasenia"]));
                if($result->count() != 0){
                    foreach($result->results() as $fila){
                        if($_POST["contrasenia"] != $fila->contrasenia){
                            echo " <p class='usuario_1'> La Contraseña es incorrecta </p>";
                            echo "<script>document.getElementById('pass').classList.add('error')</script>";
                        }
                        else{
                            echo "<script>window.location.replace('./')</script>";
                        }
                    }
                } else {
                    echo "<p class='usuario_1'>No existe ese usuario, intente con otro nombre de usuario o regístrese </p>";
                    echo "<script>document.getElementById('pass2').classList.add('error')</script>";
                }
            } else {
                echo " <p class='usuario_1'>Faltan datos </p>";
                echo "<script>document.getElementById('pass').classList.add('error')</script>";
                echo "<script>document.getElementById('pass2').classList.add('error')</script>";
            }
        }
?>