
<?php 

$con = new mysqli('localhost', 'root', "Patil@123", `notes`);

if($con) {
    echo 'Connection successfull';
} else {
    die(mysqli_error($con));
}

?>