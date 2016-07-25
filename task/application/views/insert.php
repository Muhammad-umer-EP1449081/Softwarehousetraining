<!DOCTYPE html>
<html>
<head>
	<title>Inser User</title>
</head>
<body>
<form action="<?php echo site_url('logform/saveuser') ?>" method="post">


<input type="text" name="iname" placeholder="Name"></input><br><br>
<input type="text" name="iuser" placeholder="Username"></input><br><br>
<input type="password" name="ipass" placeholder="Password"></input><br><br>
<input type="text" name="iemail" placeholder="Email"></input><br><br>
<input type="text" name="iphone" placeholder="Phone Number"></input><br><br>
<input type="text" name="iaddr" placeholder="Address"></input><br><br>

<input type="submit"></input>


</form>
</body>
</html>