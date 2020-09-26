<?php
include 'db_conn.php';
$category_id = $_POST['category_id'];
?>
<option value="">Válassz alkategóriát</option>
<?php
$result = mysqli_query($conn,"SELECT * FROM Category WHERE ParentID = $category_id");
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row['CategoryID'];?>"><?php echo $row['CategoryName'];?></option>
<?php
}
?>



