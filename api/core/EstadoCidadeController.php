<?php
require_once __DIR__ . "/EstadoCIdadeDao.php";

class EstadoCidadeController extends EstadoCidadeDao
{
 
  public function jsonEstado()
  {
    $estados = $this->getEstatosAll();
    return json_encode($estados);
  }
  public function jsonCidades($estadoID)
  {
    $cidades = $this->getCidades($estadoID);
    return json_encode($cidades);
  }
}