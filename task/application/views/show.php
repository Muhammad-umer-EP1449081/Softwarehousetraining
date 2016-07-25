<html>
<head>
<style>
table, th, td
 {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td
{
    padding: 15px;
}
</style>
</head>
<body>

<table style="width:100%; text-align: center;">
  <th>Name</th>
  <th>Username</th>
  <th>Password</th>
  <th>Email</th>
  <th>Phone Number</th>
  <th>Address</th>
  <th>ACTION</th>
    
    <?php foreach($getuser as $u): ?>
  
  <tr>
  
    <td><?php echo $u->iname ?></td>
    <td><?php echo $u->iuser ?></td>
    <td><?php echo $u->ipass ?></td>
    <td><?php echo $u->iemail ?></td>
    <td><?php echo $u->iphone ?></td>
    <td><?php echo $u->iaddr ?></td>
    <td> <a href="<?php echo site_url('logform/edituser')?>/<?php echo $u->id?>"><button>Edit</button></a> <a href = "<?php echo site_url('logform/deleteuser')?>/<?php echo $u->id?>"><button>Delete</button></a></td>
 
  </tr>
    <?php endforeach ?>
</table>
</body>
</html>