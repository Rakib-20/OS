<?php
    $conn=mysqli_connect('localhost','root','','practice');
    if(!$conn){
        echo "Could not connect to database".mysqli_connect_error();
    }
?>
<?php
    $id = $_GET['id'];
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $department = $_POST['department'];
        $address = $_POST['address'];
        $sql = "UPDATE teacher SET name='$name', department='$department', address='$address' where id=$id";
        $result = mysqli_query($conn, $sql);
        if($result){
            $msg = "Update successfully";
            header("Location:show.php?msg=$msg");
        }
        else{
            echo "Update failed";
            header("Location:show.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>"  method="post">
        <table border="1" align="center">
            <h2 align="center">Update Information</h2>
            <?php
            $id = $_GET['id'];
            $sql = "SELECT* FROM teacher WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" id="name" value="<?php echo $row['name'];?>"></input</td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td><input type="text" name="department" id="department" value="<?php echo $row['department'];?>"></input</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="address" id="address" value="<?php echo $row['address'];?>"></input</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="update" value="update"></td>
                    </tr>
                    <tr>
                        <td><a href="show.php">Show teacher's</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </form>
</body>
</html>