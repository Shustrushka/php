<?php
include_once("config.php");
    if($_GET['id']){
    $id = $_GET['id'];
    $sql1 = "SELECT `name`,views FROM images WHERE id=$id";
    $res1 = mysqli_query($connect, $sql1);
    $data1 = mysqli_fetch_assoc($res1);
    $i = $data1['views'];
    $i++;
    $sql2 = "UPDATE images SET views=$i WHERE id=$id";
    $res2 = mysqli_query($connect, $sql2);
    }

?>
<img src="images/big/<?= $data1['name']?>" width="500px">
<a href="<?= $_SERVER['HTTP_REFERER']?>"><h3>Go back</h3></a>
<p>Viewed <?= $data1['views']+1?> times</p>