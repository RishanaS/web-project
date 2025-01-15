<?php
	require_once 'dconf.php';
	function AddData($connect,$User_Name,$Email_Address,$Subject,$Comment){
		try {
        $sql = "INSERT INTO contactus VALUES('$User_Name','$Email_Address','$Subject','$Comment')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				  //echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            
			header('Location:../contactuspage.php');
			exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$User_Name = $_POST['username'];
		$Email_Address = $_POST['email'];
        $Subject = $_POST['subject'];
		$Comment = $_POST['message'];
		AddData($connect,$User_Name,$Email_Address,$Subject,$Comment);
	}
	

	?>