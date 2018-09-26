<?php

class Desenvolvedor extends Colaborador
{
  private $qtdeHoraExtra;
  private $valorHoraExtra;

  public function __construct($nomeX,$salarioX,$qtdeHoraX,$valorHoraX)
  {
    $this->qtdeHoraExtra=$qtdeHoraX;
    $this->valorHoraExtra=$valorHoraX;
    parent::__construct($nomeX,$salarioX);
  }
  public function calcularDesenvolvedor(){
    return parent::getSalarioBase() + $this->qtdeHoraExtra*$this->valorHoraExtra;
  }
}








?>
