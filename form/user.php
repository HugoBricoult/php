<h2>Methode Get</h2>
<?php
if(isset($_GET['prenom']) & isset($_GET['nom'])){
    echo $_GET['prenom'];
    echo "<br>";
    echo $_GET['nom'];
}
?>
<br>
<hr>
<h2>Methode Post</h2>
<?php
if(isset($_POST['prenom']) & isset($_POST['nom'])){
    echo $_POST['prenom'];
    echo "<br>";
    echo $_POST['nom'];
}
?>