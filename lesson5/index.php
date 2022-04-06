<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gallery</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<div class="album py-5 bg-light">
    <div class="container">
<?php
include_once "config.php";
$sql = "SELECT * FROM images ORDER BY views DESC";
$res = mysqli_query($connect, $sql);
?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php
    while($data = mysqli_fetch_assoc($res)):?> 
        <div class="col">
            <a href="detail.php?id=<?= $data['id']?>"><img width="200px" src="<?= $data['path'].$data['name']?>"></a>
        </div>
        <?php
    endwhile;
     mysqli_close($connect);
    ?>
</div>