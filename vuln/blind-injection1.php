<?php ob_start(); ?>
<?php include("../header.php"); ?>

<div align="center">

<?php

$db = new SQLite3('../db/sqlite-lab.db');

if(isset($_GET['id']))
    {
    $id = $_GET['id'];
	$result = $db->query("SELECT * from Movies where id='$id'");
	if($result == FALSE){
        
	}else{
        echo '<p>This site was curently maintenance......</p>';
        echo '</div>';
    }
}else{
    header("Location: blind-injection1.php?id=1");
}
?>
<!--
<div align="center">
<img src="/p2/img/azu1.jpg" width="300px">
<p>Judul : BLABLABLA</p>
<p>Release : BLABLABLA</p>
<p>Link : BLABLABLA</p>
</div>-->