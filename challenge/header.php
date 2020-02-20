<?php
$tableauMenu = ["lion","impala","crocodil","elephant","tigre"];
?>
<ul>
<?php
foreach ($tableauMenu as $key => $value) {
?>
    <li>
        <a href="./index.php?page=<?=$value?>">
          <?= $value ?>
        </a>
    </li>
<?php
}
?>
</ul>
