<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Definicion de Constantes
 */
define('PESO_MIN', 1);//kg
define('PESO_MAX', 500);//kg
define('ESTATURA_MIN', 50);//cm
define('ESTATURA_MAX', 300);//cm

define('MSG_ERR_PESO', 'El peso debe ser un valor...');
define('MSG_ERR_ESTATURA', 'La estatura debe ser un valor...');
        
/**
 * calculoIMC
 * Calcula el valor IMC
 * @param masa expresada en kg
 * @param estatura expresada en cm
 * @return float resultado del calculo IMC redondeado a 2 decimales
 * @link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal
 */
function calculoIMC($masa, $estatura) {
    $estatura = $estatura / 100;//cm a metros
    $imc = $masa / ($estatura * $estatura);
    return round($imc, 2);
 }

/**
 * clasificacionIMC
 * Calcula la clasificacion...
 * @param imc Valor valido de IMc
 * @return String Contiene clasificaion segun valor
 * @link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal
 */       
 function clasificacionIMC($imc) {
     if ($imc <18.5) {
         $clasificacion = "Bajo peso";
     } elseif($imc < 25) {
         $clasificacion = "Normal";
     } elseif($imc < 30) {
         $clasificacion = "Sobrepeso";
     } else {
         $clasificacion = "Obesidad";
     }
     return $clasificacion;      
 }
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
  * validarPeso
  * Validar peso
  * indica si el valor del peso es correcto
  * @param peso debe ser un valor numerico entre [1-500]
  * @return boolean True si cumple y False en caso contrario
  */
 function validarPeso($peso) {
     
     if (filter_var($peso, FILTER_VALIDATE_INT)) {
        $resultado = enRango(PESO_MIN, PESO_MAX, $peso);
     } else {
        $resultado = FALSE;
     }
     return $resultado;
}
  
 /**
  * validarEstatura
  * Validar la estatura
  * indica si el valor de la estatura es correcto
  * @param estatura debe ser un valor entre [50-300]
  * @return boolean True si cumple y False en caso contrario
  */
 function validarEstatura($estatura) {    
     if (filter_var($estatura, FILTER_VALIDATE_INT)) {
        $resultado = enRango(ESTATURA_MIN, ESTATURA_MAX, $estatura);
     } else {
        $resultado = FALSE;
     }
     return $resultado;
 }