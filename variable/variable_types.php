<?php
$firstname = 'hugo';
$age = 22;
$color = "brown";
$familly = array(
    0 => 'Jean',
    1 => 'Veronique',
    2 => 'Emile',
    3 => 'Lucas',
    4 => 'Juliette',
    5 => 'Louis',
    6 => 'Gauvain',
    7 => 'Amandine'
);
?>
<p>Hi! My name is <?= $firstname?></p>
<p>I am <?= $age ?> years old.</p>
<p>My eyes are <?= $color?></p>
<p>The first person in my family is <?= $familly[0]?></p>