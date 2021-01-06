<?php
include("../include/header.php");
?>
<h1 align="center">ALL STUDENT</h1>
<table align="center"  border="2" cellpadding="3">
<tr>
<th>S.No.</th>
<th>NAME  </th>
<th>EMAIL  </th>
<th>NUMBER  </th>
<th>PASSWORD </th>
<th>EDIT </th>
<th>DELETE </th>
</tr>
<?php
include("../include/myconnect.php");
$sql="select*from student";
$rs=mysqli_query($con,$sql);
while($data=mysqli_fetch_array($rs))
{
?>
<tr>
<td><?=$data['id']?></td>
<td><?=$data['name']?>  </td>
<td><?=$data['email']?></td>
<td><?=$data['number']?></td>
<td><?=$data['password']?></td>
<td><a href="insert.php?id=<?=$data['id']?>" >Edit</a></td>
<td><a href="../lib/action.php?act=deleteStudentData&id=<?=$data['id']?>" >Delete</a></td>
</tr>
<?php 
}
?>
</table>
<?php
include("../include/footer.php");
?>