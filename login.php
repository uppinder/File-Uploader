<?php

require_once 'connect.inc.php'; //connects to the database
session_start();
if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!empty($username)&&!empty($password))
	{
		//Check whether the given username and password exist in the directory
		$query = "SELECT ID FROM User_Info WHERE Username='$username' AND Password='$password'";
		$query_run = mysql_query($query);
		if(!$query_run)
			echo 'The query is invalid!' . ' ' . mysql_error() . ' ' . $query;
		else{
		$query_rows = mysql_num_rows($query_run);
		if($query_rows==0)
			echo 'The username/password combination is invaid!';
		else
		{
			$user_id = mysql_result($query_run,0,'id'); //gives the 0th row of the 1-row query run and gives column corressponding to id
            //Now we have the user id of the person to use for log-in sessions
            $_SESSION['id']=$user_id;
			header('Location: handleupload.php');
		}}
	}
	else
		echo 'Please enter both the username and password!';
}

?>