
<!DOCTYPE html>
<html lang="en">

<?php 
    session_start();
    include 'head.php';
    include 'navbar.php';
    require_once 'data.php';

    if(isset($_POST['login-submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $query = "SELECT * FROM admins WHERE user='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);

        if (mysqli_num_rows($results) == 1) {
            //correct username and password
            $_SESSION['username'] = $username;
            header('location: admin.php');
        }
        else {
            //wrong username or password
            echo "Wrong username or password. Please try again.";
        }
    }
?>

<br>
 <h1 style="text-align: center;">Admin login</h1>
 
 <div class="container">
      <form id="login-form" action="" method="post" role="form" style="display: block;">
            <div class="form-group">
                <label for="exampleFormControlInput1">Please, enter admin username here</label>
                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="Username">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Please, enter your password here</label>
                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
            </div>
                                
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                                            
                        <input type="submit" name="login-submit" id="login-submit" class="btn btn-primary btn-lg send" id="potrdi" value="Log In">
                    </div>
                </div>
            </div>
                                
        </form>
      
    </div>
    <br>


<?php include 'footer.php' ?>
</html>