<!DOCTYPE html>
<html lang="en">
<?php 
    include 'head.php';
    include 'navbar.php';
    include 'data.php';

    if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $venue = $_POST['venue'];
    $message = $_POST['message'];

    // Sanitize form data
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    $venue = filter_var($venue, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    }
  
  ?>

<br>
<h1 style="text-align: center;">Contact</h1>
    <div class="container">
      <form id="contact">
        <div class="form-group">
          <label for="exampleFormControlInput1">Please, enter your email address here</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Please, enter your telephone number</label>
          <input type="tel" class="form-control" placeholder="+100 123 456 789">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">What kind and size of your venue?</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Pub</option>
            <option>Outdoor stage</option>
            <option>Big concert hall</option>
            <option>Hotel lobby bar</option>
            <option>Restaurant</option>
            <option>Disco club</option>

          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Your message to us:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary btn-lg send" id="potrdi">Confirm and send</button>
      </form>
        <br>
      <div id="success" class="alert alert-success d-none" role="alert">
        Thank you for your message. We will contact you shortly.
      </div>
    </div>

    <?php include 'footer.php' ?>
</html>