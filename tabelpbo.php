<?php
require 'latihanpbokoneksi.php';

$ri = query ("SELECT*FROM film");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slibaww</title>
</head>
<body>
    <h1>FILM</h1>
    <table border="1">
        <thead>
            <th>no</th>
            <th>judul</th>
            <th>pencipta</th>
    <?php $o = 1;?>
    <?php foreach ($ri as $yu) :?>
    </thead>
    <tbody>
        <tr>
            <td><?= $o;?></td>
            <td><?php echo $yu ['judul'];?></td>
            <td><?php echo $yu ['pencipta'];?></td>
    </tr>
    <?php $o++?>
<?php endforeach;?>
    </tbody>
</body>
</html>