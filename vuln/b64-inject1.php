<?php ob_start(); ?>
<?php include("../header.php"); ?>

<div align="center">

<?php

$db = new SQLite3('../db/sqlite-lab.db');

if(isset($_GET['id']))
    {
    $id=$_GET['id'];
    $id=base64_decode($id);
	$result = $db->query("SELECT * from Movies where id='$id'");
	if($result == FALSE){
		die("Syntax Error : ".$db->lastErrorMsg());
	}else{
        if($rows = $result->fetchArray()){
            echo "<img class='cover' src='".$rows[4]."'>";
            echo '<p>Title : '.$rows[1].'</p>';
            echo '<p>Release : '.$rows[2].'</p>';
            echo '<p>Link : <a href="'.$rows[3].'"'.'>https://imdb.com</a></p>';
            echo '</div>';
        }
    }
}else{
    header("Location: b64-inject1.php?id=MQ==");
}
?>
<!--
<div align="center">
<img src="/p2/img/azu1.jpg" width="300px">
<p>Judul : BLABLABLA</p>
<p>Release : BLABLABLA</p>
<p>Link : BLABLABLA</p>
</div>-->