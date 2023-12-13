<?php

try{
  $dsn = 'mysql:host=localhost;dbname=pdo_test';

  $username = 'root';

  $password = '';

  $database = new PDO($dsn, $username, $password);

}
catch (Exception $message){
  echo 'ya un probleme <br>' . $message;
}
