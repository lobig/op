<?php
	session_start();  
	$_SESSION['login']=$_GET['login'];
	if ($_SESSION['login'] == 0) {
		unset($_SESSION['login']); 
	}
?>

<!DOCTYPE html>
<html lang="hu">

<?php include 'htmlhead.php';?>

<body>

<script>
if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent))) {
	var elements = document.querySelectorAll('.mobile-device'); 
	for(var i = 0; i < elements.length; i++)
	{
		elements[i].classList.remove('mobile-device');
	}
}      
</script>

<?php include 'header.php';?>

<?php

?>

<div class="container">
	<h3 class="my-2 text-center">Hirdetés feladás</h3>
	<form enctype="multipart/form-data" action="hirdetesfeltolt.php?login=1" method="POST">
		<div class="form-group">
			<label for="CATEGORY-DROPDOWN">Kategória *</label>
			<select class="form-control selectpicker" name="category-dropdown" id="category-dropdown" required>
				<option value="">Válassz kategóriát</option>
				<?php
				include 'db_conn.php';
				$result = mysqli_query($conn,"SELECT * FROM Categories WHERE ParentID = 0");
				while($row = mysqli_fetch_array($result)) {
				?>
				<option value="<?php echo $row['CategoryID'];?>"><?php echo $row['Name'];?></option>
				<?php
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="SUBCATEGORY">Alkategória *</label>
			<select class="form-control selectpicker" name="sub-category-dropdown" id="sub-category-dropdown" required>
			
			</select>
		</div>
		<div class="form-group">
			<label for="summary">Rövid leírás *</label>
			<input type="text" class="form-control" placeholder="" name="summary" required>
		</div>
		<div class="form-group">
			<label for="description">Hosszú leírás *</label>
			<textarea class="form-control resize-none" placeholder="" name="description" rows="3"></textarea>
		</div>
		<div class="form-group">
			<label for="price">Ár *</label>
			<div class="input-group w-50">
				<input type="text" inputmode="numeric" class="form-control" placeholder="" name="price" required>
				<div class="input-group-append levanderBlushLighter">
					<button class="btn btn-outline-secondary" name="ft-button"><strong>Ft</strong></button>
				</div>
			</div>
		</div>	
		<div class="form-group">
			<label for="image1">1. kép kiválasztása *</label>
			<input type="file" class="form-control" placeholder="" name="image1" accept="image/*" required>
		</div>
		<div class="form-group">
			<label for="image2">2. kép kiválasztása</label>
			<input type="file" class="form-control" placeholder="" name="image2" accept="image/*">
		</div>
		<div class="form-group">
			<label for="image3">3. kép kiválasztása</label>
			<input type="file" class="form-control" placeholder="" name="image3" accept="image/*">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-info btn-block" placeholder="" name="submit" value="Feltöltés">
		</div>
	</form>
	<small class="text-muted">* - kötelező mező</small>
</div>

<?php $conn->close();?>

<?php include 'footer.php';?>

</body>
</html>