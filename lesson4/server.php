<?php
$path = "images/".$_FILES['photo']['name']; // путь по которому будем сохранять картинки
if(move_uploaded_file($_FILES['photo']['tmp_name'], $path)){
header("Location: scan.php");
}