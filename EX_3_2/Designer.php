<?php

class Designer extends Colaborador
{
  private $meta;
  private $realizado;
  private $bonus;

  public function __construct($nomeX,$salarioX,$metaX,$realizadoX)
  {
    $this->meta=$metaX;
    $this->realizado=$realizadoX;
    parent::__construct($nomeX,$salarioX);
  }

  public function calcularDesigner()
  {
    if ($this->realizado >= $this->meta){
      return parent::getSalarioBase()*(1+0.1);
    }
      return parent::getSalarioBase();
    }

}

 ?>
