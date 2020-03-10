<?php
class Conection {
    
  private $host = "localhost";
  private $dbName = "TSI";
  private $user = "root";
  private $pass = "";

  public function connect()
  {
    try {
      $pdo = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->user , $this->pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
      $pdo->query("SET CHARACTER SET utf8");
      return $pdo;
    } catch (PDOException $e) {
      print( "Erro na conexao como banco de dados, ERROR: " . $e->getMessage() );
    }
  }
}