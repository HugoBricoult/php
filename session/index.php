<h2>EXO 1 / 2</h2>
<?php
session_start();
$nom = "bricoult";
$prenom = "hugo";
$age = 22;
$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;
$_SESSION['age'] = $age;

echo $_SERVER['HTTP_USER_AGENT']."<br>";
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

echo 'User Real IP - '.getUserIpAddr()."<br>";
echo $_SERVER['SERVER_NAME']."<br>";

echo "<a href=\"page.php\">vers page</a>"
?>
<br>
<hr>
<h2>Exo 3 / 4</h2>
<?php
if(isset($_GET['nom']) & isset($_GET['prenom'])){
    setcookie("nom",$_GET['nom']);
    setcookie("prenom",$_GET['prenom']);
    echo "informations enregistrée dans cookie";
}
?>
<form action="index.php" method="get">
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
<br>
<a href="page.php">Vers page cookie</a>