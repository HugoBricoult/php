<?php
include('./header.php');
if(isset($_GET['page'])){
    include('./'.$_GET['page'].'.php');
}
include('./footer.php');
?>