<?php
	require_once 'dconf.php';
	function AddData($connect,$User_Name,$Email_Address,$Feedback){
		try {
        $sql = "INSERT INTO feedback VALUES('$User_Name','$Email_Address','$Feedback')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				  //echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            
			header('Location:../rate.php');
			exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$User_Name = $_POST['username'];
		$Email_Address = $_POST['email'];
        $Feedback = $_POST['feedback'];
		AddData($connect,$User_Name,$Email_Address,$Feedback);
	}
	

	?>