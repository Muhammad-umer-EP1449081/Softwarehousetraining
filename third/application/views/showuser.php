<!DOCTYPE html>
<html>
<head>
	<title>input data </title>
</head>
<body>

<table>

<tr>
	<th>ID</th>
	<th>Email</th>
	<th>Password</th>
	<th>Edit</th>
</tr>

<?php foreach ($information as $x): ?>
<tr>
<td> <?php echo $x->Id?> </td>
<td><?php echo $x->Email?></td>
<td><?php echo $x->Password?></td>
<td><a href="<?php echo site_url('mycontroller/edit') ?>/<?php echo $x->Id?>" ><button>Edit</button></a></td>
</tr>
<?php endforeach?>


</table>

</body>
</html>
