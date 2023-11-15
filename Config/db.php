<?php

$mysqli = new mysqli("sql206.infinityfree.com","if0_35282253","Llm1WMwhOEdT","if0_35282253_news7_24");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Impossible de se connecter au base de données: " . $mysqli -> connect_error;
  exit();
}

?>