<?php
    $conn=mysqli_connect('localhost','root','','practice');
    if(!$conn){
        echo "Could not connect to database".mysqli_connect_error();
    }


$id = $_GET['id'];
$sql = "DELETE FROM teacher where id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $msg = "Deleted Successfully!!!!!!!";
    header("location: show.php?msg=$msg");
} else {
    echo "Deleted failed!!!";
}

?>
