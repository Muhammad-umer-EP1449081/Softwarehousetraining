<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
<form action="<?php echo site_url('logform/setuser') ?>/<?php echo $setuser[0]->id ?>" method = "post">


<input type="text" name="Email" placeholder="Name" value="<?php echo $setuser[0]->Email ?>"></input><br><br>

<input type="password" name="Password" placeholder="Password" value="<?php echo $setuser[0]->Password ?>"></input><br><br>

<input type="submit"> </input>


</form>
</body>
</html>