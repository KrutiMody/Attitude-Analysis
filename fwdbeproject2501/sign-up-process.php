<?php

	$flag=0;
	$name =@$_POST['name'];	
	$email = @$_POST['email'];
	//$password = @$_POST['password'];
	//$cpassword =@$_POST['cpassword'];	
	$twitterid = @$_POST['twitterid'];
	$fbemail = @$_POST['fbemail'];
	
	if (empty($name) || empty($email) || empty ($twitterid) || empty($fbemail)){
		$flag=1;
	}
	

	if($flag==0)
	{

		require_once 'connect.php';
		$query="INSERT INTO users (`id`,`Name`,`email`,`t_screen_name`,`fbemail`)
			VALUES ('','$name','$email','$twitterid','$fbemail')";

		if (mysqli_query($conn, $query)) {		
			//header('Location: template.html');
		} else {
			echo "Error:  <br>" . mysqli_error($conn);
		}
	}	
?>
	
<?php
						if(isset($_POST["submit"]))
						{
							$flag=0;
							$name =@$_POST['name'];	
							$email = @$_POST['email'];
							//$password = @$_POST['password'];
							//$cpassword =@$_POST['cpassword'];	
							$twitterid = @$_POST['twitterid'];
							$fbemail = @$_POST['fbemail'];
							
							if (empty($name) || empty($email) || empty ($twitterid) || empty($fbemail)){
								$flag=1;
							}
							

							if($flag==0)
							{

								require_once 'connect.php';
								$query="INSERT INTO users (`id`,`Name`,`email`,`t_screen_name`,`fbemail`)
									VALUES ('','$name','$email','$twitterid','$fbemail')";

								if (mysqli_query($conn, $query)) {		
									//header('Location: template.html');
								} else {
									echo "Error:  <br>" . mysqli_error($conn);
								}
							}
						}
					?>