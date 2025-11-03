<?php
include("entete.php")
?>

<body>
    <header>
        <!-- en-tête -->
            <h1>Document minimal en MMI</h1>
        <nav>
        <!-- menu principal -->
        </nav>
<form action="connexion.php" method="post">
<div>
<label>Identifiant : <input type="text" name="Identifiant" /></label>
<label>Mot de passe : <input type="text" name="Mot de passe" /></label>
<input type="submit" value="Envoyer"/>
</div>
</form>
     </header>        
        
        <!-- partie principale -->
        <section>
            <h2>Titre de section</h2>
         </section>
        
<?php
include("pieddepage.php")
?>