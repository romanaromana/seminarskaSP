
<!DOCTYPE html>
<html lang="en">

<?php 
    include 'head.php';
    include 'navbar.php';

    error_reporting(E_ALL);
    ini_set("display_errors", true);
    require_once 'data.php';
    $query="select * from messages limit 10"; 
    $result=mysqli_query($conn,$query);
?>

<br>
<h3>Delete message</h3>

<?php 
include 'data.php';

$id = $_GET['id'];
$sql = "DELETE FROM messages WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>



<?php include 'footer.php' ?>
</html>