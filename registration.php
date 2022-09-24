<?php
    $conn=mysqli_connect('localhost','root','','practice');
    if(!$conn){
        echo "Could not connect to database".mysqli_connect_error();
    }
?>

<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $department = $_POST['department'];
    $address = $_POST['address'];

    $sql = "INSERT INTO teacher (name, department, address) 
    VALUES('$name', '$department', '$address')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        //echo "data insert successfully";
        $msg = "Successfully added";
        header("Location:show.php?msg=$msg");
    }
    else {
        echo "Failed to add";
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
    <title>Teacher Information</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h2 align="center">Teacher Information</h2>
    <table align="center" border="1">
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id="name"></input></td>
        </tr>
        <tr>
            <td>Department:</td>
            <td><input type="text" name="department" id="department"></input></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address" id="address"></input></td>
        </tr>
        <tr>
            <td>Submit:</td>
            <td><input type="submit" name="submit" id="submit"></input></td>
        </tr>
        <tr>
        <td><a href="show.php">Show teacher's</a></td>
        </tr>
    </table>
</form>
</body>
</html>