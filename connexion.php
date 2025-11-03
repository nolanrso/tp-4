
<?php
// Récupération des données envoyées par le formulaire
$identifiant = $_REQUEST['identifiant'];
$motdepasse = $_REQUEST['motdepasse'];

// Affichage du message
echo "<h1>Bonjour " . htmlspecialchars($identifiant) . " !</h1>";
echo "<p>Votre mot de passe est : " . htmlspecialchars($motdepasse) . "</p>";
?>
