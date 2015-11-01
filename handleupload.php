<?php
if(isset($_POST['submit']))
{
	session_start();
	$user_id=$_SESSION['id'];
	$name=$_FILES['file']['name'];
	$tmp_name=$_FILES['file']['tmp_name'];
	if(!empty($name))
	{
		$target_dir = "/var/www/html/file_uploader/uploads/" . "$user_id/";
		echo $target_dir . ' ';
		echo $target_file = $target_dir . 'extra22.pdf';
		move_uploaded_file($tmp_name, $target_file);
	}
	else
		echo 'Please enter a file!';
}

?>

<form action = "handleupload.php" METHOD = "POST" enctype="multipart/form-data">
File: <input type="file" name="file"> <br><br>
Submit: <input type="submit" value="Submit!" name="submit"> <br><br>
</form>	
