<?php 
include 'config.php';
$result = $conn->query("SELECT*FROM loginn")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Email</th>
            <th>Password</th>
        </tr><br>
        <?php while($row = $result->fetch_assoc()) : ?>
        <tr>
            <th><?= $row['id']?></th>
            <th><?= $row['username']?></th>
            <th><?= $row['passwords']?></th><br><br>
        </tr>
        <?php endwhile;?>
            <button><a href="addlogin.php">login</a></button>

    </table>
</body>
</html>