<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>


  <title>Innovision Registration</title>


</head>
<body>
  <div class="header">
  	<h2>Registration</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>


  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    <div class="input-group">
      <label>Students name</label>
      <input type="text" name="stuname" value="<?php echo $stuame; ?>">
    </div>
    <div class="input-group">
      <label>College Name</label>
      <input type="text" name="College" value="<?php echo $College; ?>">
    </div>
    <div class="input-group">
      <label>Year</label>
      <input type="text" name="Year" value="<?php echo $Year; ?>">
    </div>
    <div class="input-group">
      <label>Event</label>
      <input type="text" name="event1" value="<?php echo $event1; ?>">
    </div>
    <div class="input-group">
      <label>Event</label>
      <input type="text" name="event2" value="<?php echo $event2; ?>">
    </div>
    <div class="input-group">
      <label>Event</label>
      <input type="text" name="event3" value="<?php echo $event3; ?>">
    </div>
    <div class="input-group">
      <label>Event</label>
      <input type="text" name="event4" value="<?php echo $event4; ?>">
    </div>
    <div class="input-group">
      <label>Event</label>
      <input type="text" name="event5" value="<?php echo $event5; ?>">
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a Registered? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>