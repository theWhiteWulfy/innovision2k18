<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_SESSION['username']; ?>@INNOVISION</title>
</head>
<body>

<div class="header">
  <h2>Registered Sucessfully</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p>
        Your Details:<br>
        Name:<?php echo $_SESSION['stuname']; ?><br>
        College:<?php echo $_SESSION['College']; ?><br>
        Year:<?php echo $_SESSION['Year']; ?><br>
        Event:<?php echo $_SESSION['event1']; ?><br>
        Event:<?php echo $_SESSION['event2']; ?><br>
        Event:<?php echo $_SESSION['event3']; ?><br>
        Event:<?php echo $_SESSION['event4']; ?><br>
        Event:<?php echo $_SESSION['event5']; ?><br>      
      </p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
    
</body>
</html>