<?php
    $conn=mysqli_connect('localhost','root','','practice');
    if(!$conn){
        echo "Could not connect to database".mysqli_connect_error();
    }
?>

<?php 
    if (isset($_GET['msg'])){
        echo $_GET['msg'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show teacher Information</title>
</head>
<body>
    <h2 align="center">Show teacher Information</h2>
    <table align="center">
        <tr>
            <td><a href="registration.php">Register new Teacher</a></td>
        </tr>
    </table>
    <table align="center" border="1">
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Department</th>
            <th>Operation</th>
        </tr>
        <?php
            $sql = "SELECT * FROM teacher";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['department']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><a href="update.php?id=<?php echo $row['id']?>">Update</a>|<a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
                    </tr>
                <?php
                }
            }
        ?>
    </table>
</body>
</html>