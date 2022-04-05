<?php
if($_GET['name']){?><img width="500" src="images/<?= $_GET['name']?>" alt="">
<?php
}
?>
<a href="<?= $_SERVER['HTTP_REFERER']?>">Вернуться назад</a>