<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" enctype="multipart/form-data" method="post">
        <p>Choose your file</p>
        <input type="file" accept="image/*" name="photo"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>