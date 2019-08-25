<?php
echo "INSIDE";
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');
if(!empty($username)){
	if(!empty($password)){
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname = "login";

		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

		if(mysqli_connect_error()){
			die('Connection Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		else
		{
			$sql="INSERT INTO users (username,password) values ('$username','$password')";
			if($conn->query($sql)){
				echo "New Record is inserted successfully";
			}

			else{
				echo "Error";
			}
			$conn->close();
			}
		}
	}

	else{
		echo "password shouldn't be empty";
		die();}
	}
}

else{
	echo "Username shouldn't be empty";
	die();
	}
?>