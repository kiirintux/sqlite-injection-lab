<?php ob_start(); ?>
<?php include("../header.php"); ?>

<div align="center">

<?php

$db = new SQLite3('../db/sqlite-lab.db');

// if(isset($_GET['id']))
//     {
//     $id=$_GET['id'];
//     //$id=abs($id);
// 	$result = $db->query("SELECT * from Movies where id='$id'");
// 	if($result == FALSE){
// 		die("Syntax Error : ".$db->lastErrorMsg());
// 	}else{
//         if($rows = $result->fetchArray()){
//             echo "<img class='cover' src='".$rows[4]."'>";
//             echo '<p>Title : '.$rows[1].'</p>';
//             echo '<p>Release : '.$rows[2].'</p>';
//             echo '<p>Link : <a href="'.$rows[3].'"'.'>https://imdb.com</a></p>';
//             echo '</div>';
//         }
//     }
// }else{
//     header("Location: cookie-injection.php?id=1");
// }

$key = "movies";
$index = $_GET["id"];
$cookie = $_COOKIE["movies"];
setcookie($key, $index, time() + 4600);


echo $_COOKIE["movies"];
if(!isset($_POST['submit'])){
    $show = $db->query("SELECT * from Movies where id=$cookie");
    if($show == FALSE){
        die("Syntax Error : ".$db->lastErrorMsg());
    }else{
        if($row = $show->fetchArray()){
            echo row[1];
        }
    }
}




?>
<!--
<div align="center">
<img src="/p2/img/azu1.jpg" width="300px">
<p>Judul : BLABLABLA</p>
<p>Release : BLABLABLA</p>
<p>Link : BLABLABLA</p>
</div>-->