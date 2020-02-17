<?php
/*Series of exercises on PHP conditional structures.*/
echo "<h2>1</h2>";
// 1.1 Clean your room Exercise  (read and fix)
$possible_states = ["health hazard","filthy","dirty","clean"];
$room_filthiness = $possible_states[0];
if( $room_filthiness ==  $possible_states[0]){
	echo "the dirt is everywhere !";
} else if($room_filthiness ==  $possible_states[1]){
	echo "Yuk, Room is dirty : let's clean it up !";
	echo "<br>Room is now clean!";
} else if($room_filthiness ==  $possible_states[2]){
    echo "Ho ! a cobweb under the bed !";
} else if ($room_filthiness ==  $possible_states[3]) {
    echo "Nothing to do, room is neat.";
}else{
}
echo "<br><hr><h2>2</h2><br>";


// 2. "Different greetings according to time" Exercise
$nowHours = intval(date("H")); // How to get the current time in PHP ? Google is your friend ;-)
$nowMinutes = intval(date("i"));
$now = $nowMinutes + ($nowHours *60);
// Test the value of $now and display the right message according to the specifications.
if($now > 1260 & $now < 300){
    echo "Good night !";
}else if($now < 541){
    echo "Good morning !";
}else if($now < 721){
    echo "Good day !";
}else if($now < 961){
    echo "Good afternoon !";
}else if($now < 1261){
    echo "Good evening !";
}
echo "<br><hr><h2>3</h2><br>";


// 3. "Different greetings according to age" Exercise
if (isset($_GET['age'])){
    // Form processing
    $age = intval($_GET['age']);
    if($age < 12){
        echo "Hello kiddo!";
    }else if($age < 18){
        echo "Hello Teenager !";
    }else if($age < 115){
        echo "Hello Adult !";
    }else {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
echo "<br><br>";
?>
<form method="get" action="condition.php">
	<label for="age">age</label>
	<input type="number" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
echo "<br><hr><h2>3.2</h2>";
//3.2
if (isset($_GET['age']) & isset($_GET['gender'])){
    // Form processing
    $age = intval($_GET['age']);
    if($age < 12){
        if($_GET['gender'] == "male"){
            echo "Hello mister kiddo!";
        }else{
            echo "Hello miss kiddo!";
        }
    }else if($age < 18){
        if($_GET['gender'] == "male"){
            echo "Hello Mister Teenager !";
        }else{
            echo "Hello miss Teenager !";
        }

    }else if($age < 115){
        if($_GET['gender'] == "male"){
            echo "Hello mister Adult !";
        }else{
            echo "Hello miss Adult !";
        }
    }else {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
echo "<br><br>";
?>
<form method="get" action="condition.php">
	<label for="age">age</label>
	<input type="number" name="age">
    <br>
    <label for="gender">Genre</label><br>
    <input type="radio" name="gender" value="male">homme<br>
    <input type="radio" name="gender" value="female">femme
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
//4
echo "<br><hr><h2>4</h2>";
if (isset($_GET['age']) & isset($_GET['mt'])){
    // Form processing
    $age = intval($_GET['age']);
    if($age < 12){
        if($_GET['mt'] == "true"){
            echo "Hello kiddo!";
        }else{
            echo "Aloha kiddo!";
        }
    }else if($age < 18){
        if($_GET['mt'] == "true"){
            echo "Hello Teenager !";
        }else{
            echo "Aloha Teenager !";
        }

    }else if($age < 115){
        if($_GET['mt'] == "true"){
            echo "Hello Adult !";
        }else{
            echo "Aloha Adult !";
        }

    }else {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
echo "<br><br>";
?>
<form method="get" action="condition.php">
	<label for="age">age</label>
	<input type="number" name="age">
    <br>
    <label for="mt">Do you speak English ?</label>
    <br>
    <input type="radio" name="mt" value="true">yes<br>
    <input type="radio" name="mt" value="false">no<br>
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
//5 girl soccer team
echo "<br><hr><h2>5</h2><br>";

if(isset($_GET['age']) & isset($_GET['gender'])){
    $Age = intval($_GET['age']);
    if($Age >= 21 & $Age <= 40 & $_GET['gender'] != "male"){
        echo "welcome to the team !";
    }else{
        echo "Sorry you don't fit the criteria";
    }
}

?>
<form method="get" action="condition.php">
	<label for="age">age</label>
	<input type="number" name="age">
    <br>
    <label for="gender">Genre</label><br>
    <input type="radio" name="gender" value="male">homme<br>
    <input type="radio" name="gender" value="female">femme
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
//6
echo "<br><hr><h2>6</h2><br>";

if(isset($_GET['age']) & isset($_GET['gender'])){
    $Age = intval($_GET['age']);
    if($Age >= 21 & $Age <= 40 & $_GET['gender'] != "male"){
        echo "welcome to the team !";
    }
    if(($Age < 21 || $Age > 40) || $_GET['gender'] == "male"){
        echo "Sorry you don't fit the criteria";
    }
}

?>
<form method="get" action="condition.php">
	<label for="age">age</label>
	<input type="number" name="age">
    <br>
    <label for="gender">Genre</label><br>
    <input type="radio" name="gender" value="male">homme<br>
    <input type="radio" name="gender" value="female">femme
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
//7
echo "<br><hr><h2>7</h2><br>";
if(isset($_GET['number'])){
    $num = intval($_GET['number']);
    if($num <= 4){
        echo "This work is really bad. What a dumb kid! ";
    }else if($num <= 9){
        echo "This is not sufficient. More studying is required.";
    }else if($num == 10){
        echo "barely enough!";
    }else if($num <= 14){
        echo "Not bad!";
    }else if($num <= 18){
        echo "Bravo, bravissimo!";
    }else{
        echo "Too good to be true : confront the cheater!";
    }
}
?>
<form action="condition.php" method="get">
<label for="number"></label>
<input type="number" name="number">
<input type="submit" value="grade student">
</form>
<?php
echo "<br><hr><h2>8</h2><br>";
//8
?>