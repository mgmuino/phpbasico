<?php
/**
 * Definicion de Constantes
 */
define('LOGIN_MIN', 3);
define('LOGIN_MAX', 10);
define('PASS_MIN', 5);
define('PASS_MAX', 10);

 /**
  * enRango
  * indica si un valor esta en un rango determinado[inicio, fin]
  * @param inicio
  * @param fin
  * @param valor
  * @return true si el valor esta en el rango [inicio, fin]
  */
 function enRango($inicio, $fin, $valor) {
     return ($valor>=$inicio && $valor<=$fin);
 }
 
 /**
  * Validar login
  * la longitud debe estar entre LOG_MIN y LOG_MAX
  * y debe contener solo letras y numeros(patron)
  * @param login
  * @return bool
  */
 function validarLogin($login) {
     $patron = "/^[[:alnum:]]+$/";
     $longitud = strlen($login);
     return (enRango(LOGIN_MIN, LOGIN_MAX, $longitud)
             && preg_match($patron, $login));
 }
 
 /**
  * Validar Password
  * La longitud debe estar entre PASS_MIN y PASS_MAX
  * Y debe contener solo un conjunto determinado de caracteres (patron)
  * @param $password
  * @return bool
  */
 function validarPassword($password) {
     $patron = "/^[[:alnum:]]*[._-]+[[:alnum:]]*$/";
     $longitud = strlen($password);
     return (enRango(PASS_MIN, PASS_MAX, $longitud)
             && preg_match($patron, $password));
 }
 
 /**
  * Validar email
  * @param $email
  * @return bool
  */
 function validarEmail($email) {
     return (filter_var($email, FILTER_VALIDATE_EMAIL ));
 }