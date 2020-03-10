<?php
require_once __DIR__ . "/core/EstadoCidadeController.php";

$estadiCidade = new EstadoCidadeController();

if (isset($_GET["estado_id"]) ) {
  $estadoId = $_GET["estado_id"];
  print($estadiCidade->jsonCidades($estadoId));
} else {
  print($estadiCidade->jsonEstado());
}