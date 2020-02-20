<?php
session_start();
echo $_SESSION['nom']."<br>";
echo $_SESSION['prenom']."<br>";
echo $_SESSION['age']."<br>";
echo "<a href=\"index.php\">retour</a>";
?>
<h2>exo cookie (4)</h2>
<?php
if(isset($_GET['nom']) & isset($_GET['prenom'])){
    setcookie("nom",$_GET['nom']);
    setcookie("prenom",$_GET['prenom']);
}

if(isset($_COOKIE['nom']) & isset($_COOKIE['prenom'])){
echo $_COOKIE['nom']."<br>";
echo $_COOKIE['prenom']."<br>";
}
?>
<h2>Exo 5</h2>

<form action="page.php" method="get">
<label for="prenom">Prenom</label>
<br>
<input type="text" name="prenom" id="prenom">
<br>
<label for="nom">Nom</label>
<br>
<input type="text" name="nom" id="nom">
<br>
<input type="submit" value="envoyer">
</form>
