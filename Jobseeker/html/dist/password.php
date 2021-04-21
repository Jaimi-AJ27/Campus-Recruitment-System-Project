<link rel = "stylesheet" type = "text/css" href = "style.css">
<?php
session_start();
include 'connect.php';
if(isset($_SESSION['User']))
{
	$oldpass = $_POST['name'];
	$old=md5("$oldpass");
	$newpass = $_POST['password'];
	$cnfnewpass = $_POST['password_confirmation'];
	$uname = $_SESSION['User'];

	if($newpass == $cnfnewpass)
		{
		$sql = "SELECT login_id,username,password FROM tbl_login";
		if((strlen($newpass) >=5))
			{	
				if($newpass != $_SESSION['User'])
				{
					
					$result = $conn->query($sql);
					if($result->num_rows > 0)
						{
						while($row = $result->fetch_assoc())
							{
							if($uname == $row["username"])
								{
								$id = $row['login_id'];
								if($old == $row["password"])
									{
									 $new=md5("$newpass");
									$sql2 = "UPDATE tbl_login SET password='".$new."' WHERE login_id=".$id;
									if($conn->query($sql2) === TRUE)
										{
										echo '<script type="text/javascript">alert("Password Successfully Changed");window.location=\'logout.php\';</script>';
										}
									}
								else
									{
									echo '<script type="text/javascript">alert("Incorrect Old Password");window.location=\'pass.php\';</script>';
									}
								}
							}
						}
				}
				else
					{
						echo '<script type="text/javascript">alert("password cannot same as username");window.location=\'pass.php\';</script>';
					}
			}
			else
				{
					echo '<script type="text/javascript">alert("Try again");window.location=\'pass.php\';</script>';

				}
		}
	else
		{
		echo '<script type="text/javascript">alert("Passwords do not match");window.location=\'pass.php\';</script>';
		}
}
else
	{
		header('location:index.php?err='.urlencode('Please Login First To Access This Page !'));
	}
?>