<?php
require "Colaborador.php";
require "Desenvolvedor.php";
require "Designer.php";


//Calculo Desenvolvedor//
$novoDesenvolvedor = new Desenvolvedor("Sergio", 1000, 20, 50);
echo $novoDesenvolvedor->calcularDesenvolvedor();

echo "<br>";
//Calculo Designer//
$novoDesigner = new Designer("Sergio", 1000, 15000, 15000);
echo $novoDesigner->calcularDesigner();


 ?>
