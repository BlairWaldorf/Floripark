<?php

  $db = new Mysqli;
  $db->connect('localhost','root','','frota-floripark');

  if($db){
    echo "Success!";
  }else{
    echo "Ops, something is wrong. Check db connection!";
  }

 ?>
