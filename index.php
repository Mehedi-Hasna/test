<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/19/2019
 * Time: 9:37 PM
 */


    $host = "localhost";
    $user = "root";
    $pass ="";
    $db = "splint";

    $con = mysqli_connect($host, $user, $pass, $db);

    $sql = "SELECT * FROM users";
    $res = mysqli_query($con, $sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Splint </title>
</head>
<body>
    <table border="1" width="800">
        <tr>
            <td>Name</td>
            <td>Roll</td>
            <td>Domain</td>
            <td>Email</td>
            <th>Action</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($res)){?>
        <tr>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['roll'];?></td>
            <td><?php echo $data['domain'];?></td>
            <td><?php echo $data['email'];?></td>
            <td>
                <a href="update.php?id=<?php echo $data['id']?>">Update</a>
            </td>
        </tr>
        <?php }?>

    </table>
</body>
</html>
