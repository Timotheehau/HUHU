<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUHU</title>
    <link rel="stylesheet" href="pagedaccueil.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="pagedaccueil.php">Accueil</a></li>
                <li><a href="pageproduits.php">Produits</a></li>
                <li><a href="pageseconnecter.php">Se connecter</a></li>
                
            </ul>
        </nav>
        <h1>Nos produits</h1>  
    </header>
  


</body>
</html>

<?php
$connexion = mysqli_connect('localhost', 'root', '', 'huhu');

$requete = "SELECT * FROM `produits`";

$produits= $connexion->query($requete);

foreach ($produits as $produit) {
    echo $produit['NOM'] . '<br>';
    echo $produit['PRIX'] . '<br>';
}
?>