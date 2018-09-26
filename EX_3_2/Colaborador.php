<?php

abstract class Colaborador
{
  private $salarioBase;
  private $nomeColaborador;

  public function __construct($nomeX,$salarioX)
  {
    $this->salarioBase=$salarioX;
    $this->nomeColaborador=$nomeX;
  }

  public function getSalarioBase()
  {
    return $this->salarioBase;
  }
  public function getNomeColaborador()
  {
    return $this->nomeColaborador;
  }

}




 ?>
