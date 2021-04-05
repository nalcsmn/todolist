<?php
class config{
  private $user = 'root';
  private $password= '';
  public $pdo = null;



public function con(){
  try {
    // $con= new PDO('mysql:host=hostnamemo;port=3307;dbname=dbnamemo', 'username mo', 'password mo');
    $this->pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=todoapp',$this->user,$this->password);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
  return $this->pdo;

}
}



?>
