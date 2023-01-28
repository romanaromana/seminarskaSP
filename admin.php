
<!DOCTYPE html>
<html lang="en">

<?php 
    include 'head.php';
    include 'navbar.php';
    //include 'data.php';

    error_reporting(E_ALL);
    ini_set("display_errors", true);
    require_once 'data.php';
    $query="select * from messages limit 10"; 
    $result=mysqli_query($conn,$query);
?>

<br>
<h1 style="text-align: center;">Admin page</h1>

<h2> Visitor messages</h2>

<table class="table table-hover table-dark">
      <thead>
        <tr  style="color: gray; background-color: lightblue;">
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          <th scope="col">phone</th>
          <th scope="col">venue</th>
          <th scope="col">message</th>
          <th scope="col">message</th>
        </tr>
      </thead>
      <tbody>
    <?php
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"]. "</td>";
        echo "<td>" . $row["name"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["phone"]. "</td>";
        echo "<td>" . $row["venue"]. "</td>";
        echo "<td>" . $row["message"]. "</td>";
        echo "<td><a href='#' onclick='confirmDelete("<?php echo $row["id"]; ?>")'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
        
      </tbody>
    </table>

<?php include 'footer.php' ?>
</html>

