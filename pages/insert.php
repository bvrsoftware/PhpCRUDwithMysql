<?php
include("../include/header.php");
include("../include/myconnect.php");
?>
<h1 style="text-align:center">INSERT AND UPDATE</h1>
<form action="../lib/action.php" method="post">
<?php
$id=$_GET['id'];
$sql="SELECT * FROM `student` WHERE `id`=$id";
$rs=mysqli_query($con,$sql);
$rows=mysqli_num_rows($rs);
if($rows<=1)
{
$data=mysqli_fetch_array($rs);
?>
<input type="hidden" name="id" value="<?=$data['id']?>" />
<table align="center">
<tr>
<th>NAME : </th>
<td><input type="text" name="name"  value="<?=$data['id']?>" /></td>
<th>EMAIL : </th>
<td><input type="email" name="email" value="<?=$data['id']?>"/></td>
<th>NUMBER : </th>
<td><input type="text" name="num" value="<?=$data['id']?>" /></td>
<th>PASSWORD : </th>
<td><input type="password" name="pass" value="<?=$data['id']?>" /></td>
<td><input type="submit"  /> <input type="hidden" name="act" value="insertUpdate" /></td>
</tr>
</table>
<div style="margin-top:300px;"></div>
<?php
}
include("../include/footer.php");
?>
</form>
