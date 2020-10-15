<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
     <form action="signup-check.php" method="post" class="reg">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
		<label>Email</label>
     	<input type="email" 
                 name="email" 
                 placeholder="Email"><br>
		<label>Mobile</label>
     	<input type="number" 
                 name="mobile" 
                 placeholder="Mobile"><br>
		<label>Age</label>
     	<input type="number" 
                 name="age" 
                 placeholder="age"><br>
     	<label>Password</label>
     	<input type="password" 
                 name="pass" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="repass" 
                 placeholder="Retype Password"><br>

     	<button class="su" type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>