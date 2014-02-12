<?php 
session_start();
    // Estructura campos del formulario
    $login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
    // $password No se recupera
    $email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";
    // Estructura para Errores
    $errLogin = (isset($_REQUEST['errLogin']))?
            $_REQUEST['errLogin']:FALSE;
    $errPassword = (isset($_REQUEST['errPassword']))?
            $_REQUEST['errPassword']:FALSE;
    $errPasswordr = (isset($_REQUEST['errPasswordr']))?
            $_REQUEST['errPasswordr']:FALSE;
    $errEmail = (isset($_REQUEST['errEmail']))?
            $_REQUEST['errEmail']:FALSE;
   
    unset($_SESSION['errLogin']);
    unset($_SESSION['errPassword']);
    unset($_SESSION['errPasswordr']);
    unset($_SESSION['errEmail']);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Registro</div>
        <form action="resultado_REGISTRO_2.php" method="GET">
            <div>Login: <input type="text" name="login" value="<?php echo $login; ?>"> </div>    
            <div><?php echo $errores[0];?></div>
            <div>Password <input type="password" name="password"/></div>
            <div><?php echo $errores[1];?></div>
            <div>Re-Password <input type="password" name="passwordr"/></div>
            <div><?php echo $errores[2];?></div>
            <div>Email <input type="text" name="email" value="<?php echo $email; ?>"/></div>
            <div><?php echo $errores[3];?></div>
            <div><input type="submit" value="Enviar" /></div>
        </form>
    </body>
</html>

