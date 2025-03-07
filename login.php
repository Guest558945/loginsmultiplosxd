<?php
$usuario_correcto = "oscar";
$contrasena_correcta = "1111";
$rol = "estudiante";

$usuario_correcto1 = "gerardo";
$contrasena_correcta1 = "2222";
$rol1 = "director";

$usuario_correcto2 = "barajas";
$contrasena_correcta2 = "3333";
$rol2 = "limpiador";

$usuario_correcto3 = "vizzuett";
$contrasena_correcta3 = "4444";
$rol3 = "profesor";



    $usuario = $_POST["usuario"];
    $contra = $_POST["contrasena"];

    
switch($usuario){
    case $usuario_correcto:
        if($contra == $contrasena_correcta){
            header("Location: estudiante.html");
        }else{
            echo "Contraseña incorrecta";
        }
        break;
    case $usuario_correcto1:
        if($contra == $contrasena_correcta1){
            header("Location: director.html");
        }else{
            echo "Contraseña incorrecta";
        }
        break;
    case $usuario_correcto2:
        if($contra == $contrasena_correcta2){
            header("Location: limpiador.html");
        }else{
            echo "Contraseña incorrecta";
        }
        break;
    case $usuario_correcto3:
        if($contra == $contrasena_correcta3){
            header("Location: profesor.html");
        }else{
            echo "Contraseña incorrecta";
        }
        break;
    default:
        echo "Usuario incorrecto";
        break;
}

?>