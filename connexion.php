<?php
include("entete.php")
?>            
        <!-- partie principale -->
        <section>
            <h2>Titre de section</h2>
         </section>
        
<?php
include("pieddepage.php")
?>
<?php
$prenom = $_REQUEST["Identifiant"];
$nom = $_REQUEST["Mot de passe"];
echo "<p>Bonjour ", $prenom, "</p>\n";
?>