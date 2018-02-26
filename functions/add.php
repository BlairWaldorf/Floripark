<?php
include 'db.php';

if(isset($_POST['send'])){

  $name = $_POST['userName'];
  $id = $_POST['userId'];

  $sql = "INSERT INTO colaborador (nome, matricula) VALUES ('$name', '$id')";

  $value = $db->query($sql);

  if($value){
    header('location: login.php');
  }

}

 ?>
