<!DOCTYPE html>
<html>
<head>
	<title>database</title>
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>Email</th>
		<th>Password</th>
	</tr>
	<?php foreach ($new1 as $x): ?>
	<tr>
		<td><?php echo $x->ID ?></td>
		<td><?php echo $x->email ?></td>
		<td><?php echo $x->password ?></td>
		<td><a href="<?php echo site_url('mycontroller/viewsingle2')?>/<?php echo $x->ID ?>"><button>Click to view </button></a></td>

	</tr>
<?php endforeach ?>
</table>
</body>
</html>