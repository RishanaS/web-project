<?php
	require_once 'dconf.php';
	function AddData($connect,$name,$bio,$email,$phone_no,$image_data){
		try {
        $sql = "INSERT INTO Customers VALUES('$name','$bio','$email','$phone_no','$image_data')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				  echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            exit;
			//header('Location:../customerpage.php');
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['customerName'];
        $bio = $_POST['customerBio'];
        $email = $_POST['customerEmail'];
		$phone_no = $_POST['customerPhoneNumbe'];
        $image_data = $_POST['customDesignUpload'];
		AddData($connect,$name,$bio,$email,$phone_no,$image_data);
	}
	

	?>