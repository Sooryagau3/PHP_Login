<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<script src="j.js"></script>
	</head>
<body>
<form action="login.php" class="log">
     	<h2><b>LOGIN</b></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="user" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="pass" placeholder="Password"><br>

     	<button class="btn btn-primary" type="submit">Login</button>
          <a href="signup.php" class="ca text-info">Create an account</a>
     </form>
	 <script>
	 $(document.ready(function){
		 $("#save").click(function){
			 $.ajax({
				 url:"login.php",
				 type:"post",
				 data:$(".log").serialize(),
				 success:function(d){
					 alert(d);
					 $(".log")[0].reset();
				 }
			 })
		 }
	 }
	 </script>
</body>

</html>