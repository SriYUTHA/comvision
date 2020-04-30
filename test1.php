<!DOCTYPE html>
<html>
<body>
ชุดข้อสอบ:<select>
	<option> -- Exam -- </option>
	<?php
	$EmpNames = range(1, 100);
	foreach ($EmpNames as $Emp) {
	?>
	<option><?php echo $Emp; ?> </option>
	<?php } ?>
</select>
<label for="image"> IMAGE :</label><input type="file" name="image">
<input type="submit" name="อัพโหลด"><br>
<?php 
for ($a=1; $a <101 ; $a++) 
	{ echo $a ; 
		echo $_POST["1"];
		echo "<br>";

	?> 

<?php }
?>
</body>
</html>