<link rel="stylesheet" type="text/css" href="css/main.css"></link>
<div class="wrapper">
<?php
$images = scandir("images");
for($i = 2;$i < count($images);$i++){
?>
<a href="detail.php?name=<?= $images[$i]?>"><img width="200" src="images/<?= $images[$i]?>" alt="">
<?php
}?>
</div>