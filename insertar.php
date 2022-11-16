<?php

    require_once('conexion.php');
    require_once('enviar.php');

    
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $salario = $_POST['salario'];
    $diurnas = $_POST['diurnas']; 
    $nocturnas = $_POST['nocturnas'];      
    $diurnasDominical = $_POST['diurnasDominical'];
    $nocturnasDominical = $_POST['nocturnasDominical'];
 
    $salud=($salario/100)*12;
    $pension=($salario/100)*14;

    $hdiurna=($salario/100)*1.25;
    $hnocturna=($salario/100)*1.75;
    $hdiurnaFestiva=($salario/100)*2.1;
    $hnocturnaFestiva=($salario/100)*2.5;
    
    $recargo=$hdiurna+$hnocturna+$hdiurnaFestiva+$hnocturnaFestiva;

    $deducciones=$salud+$pension;

    $total=$salario+$recargo-$deducciones;

    $consultas = new enviar();
   
    $result = $consultas->enviarDatos($nombre,$cedula,$salario,$recargo,$deducciones,$total);
?>