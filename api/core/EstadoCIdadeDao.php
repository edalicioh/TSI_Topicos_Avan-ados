<?php
require_once __DIR__ . "/Conection.php";
class EstadoCidadeDao extends Conection
{
  private $pdo;

  public function __construct()
  {
    $this->pdo = $this->connect();
  }
  public function getEstatosAll()
  {
    $sql = "SELECT * FROM estado";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll();
  }
  public function getCidades($estadoId)
  {
    $sql = "SELECT * FROM cidade WHERE estado = :estadoId";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(":estadoId", $estadoId);
    $stmt->execute();
    return $stmt->fetchAll();
  }

}