<?php 

// connexion bdd
require_once('./database_connect.php');

// recuperer un user
$request = $database->query('SELECT * FROM user');

$user = $request->fetch();

// var_dump($user);

// recuperer des products

$request = $database->query('SELECT * FROM product');

$products = $request->fetchAll();

// var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>hello <?php echo $user['prenom'] ?></p>
  <ul>
    <?php 
  foreach ($products as $product) {
    echo '<li> Nom du Produit : '. $product['name'] . ' '. ' Prix : ' . $product['price']/100 .'</li>';
  }
    ?>
  </ul>
</body>
</html>