<h2>Methode Get</h2>

<form action="user.php" method="get">
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

<hr>
<h2>Methode Post</h2>
<form action="user.php" method="post">
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

<hr>
<h2>Exo 5 / 6 / 7 / 8</h2>
<?php
if(isset($_POST['civil']) & isset($_FILES['fileToUpload'])){
    echo "Civilité : ".$_POST['civil'];
    echo "<br>";
    echo "nom : ".$_POST['nom'];
    echo "<br>";
    echo "prenom : ".$_POST['prenom'];
    echo "<br>";
    $pathinfo = pathinfo($_FILES['fileToUpload']['name']);
    echo "nom du fichier : ".$pathinfo['filename'];
    echo "<br>";
    echo "extention du fichier : ".$pathinfo['extension'];
    echo "<br>";
    if($pathinfo['extension'] == "pdf"){
        echo "le fichier est bien un fichier pdf";
    }else{
        echo "le fichier n'est pas un fichier pdf";
    }
}else{
?>
<form action="index.php" enctype="multipart/form-data" method="post">
<label for="civil">Civilité</label>
<br>
<select name="civil" id="civil">
<option value="mr">Mr</option>
<option value="md">Madame</option>
</select>
<br>
<label for="nom">Nom</label>
<br>
<input type="text" name="nom" id="nom">
<br>
<label for="prenom">Prenom</label>
<br>
<input type="text" name="prenom" id="prenom">
<br>
<label for="file"></label>
<br>
<input type="file" name="fileToUpload">
<br>
<input type="submit" value="envoyer">
</form>
<?php
}
?>
