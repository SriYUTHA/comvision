<!DOCTYPE html>
<html>
<body>
<form action="test1.php" method="post" name="form1">
ชุดข้อสอบ:<input type="text" name="=ชุดข้อสอบ">
จำนวนข้อ:<select>
	<option> -- Choice -- </option>
	<?php
	$EmpNames = range(1, 100);
	foreach ($EmpNames as $Emp) {
	?>
	<option><?php echo $Emp; ?> </option>
	<?php } ?>
</select>
<input name="btnSubmit" type="submit" value="SAVE"><br>
<?php 
for ($a=1; $a <101 ; $a++) 
	{ echo $a;
	?> 
<input type="radio" name="1" value="A">A
<input type="radio" name="1" value="B">B
<input type="radio" name="1" value="C">C
<input type="radio" name="1" value="D">D
<input type="radio" name="1" value="E">E<br>
<?php }
?>
</form>
</body>
</html>