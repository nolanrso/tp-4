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
<form action="cgiPost.php" methode="post">
<div>
<label>Prénom : <input type="text" name="Prenom" /></label>
<label>Nom : <input type="text" name="Nom" /></label>
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