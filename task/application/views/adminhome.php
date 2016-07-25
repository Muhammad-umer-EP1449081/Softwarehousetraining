<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
<h1><?php echo $this->session->userdata('user')[0]->Email; ?></h1>
<br>
<a href="<?php echo site_url('/logform/insertuser')?>"><button>Insert User</button></a>
<a href="<?php echo site_url('/logform/showuser')?>"><button>Show Users</button></a>
<a href="<?php echo site_url('logform/logout')?>"><button>Logout</button></a>
</body>
</html>