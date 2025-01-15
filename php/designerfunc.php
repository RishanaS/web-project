<?php
	require_once 'dconf.php';
	function AddData($connect,$name,$bio,$email,$phone_no,$image_data){
		try {
        $sql = "INSERT INTO Designers VALUES('$name','$bio','$email','$phone_no','$image_data')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				  echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            exit;
			//header('Location:../designerpage.php');
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['designerName'];
        $bio = $_POST['designerBio'];
        $email = $_POST['designerEmail'];
		$phone_no = $_POST['designercontactNumber'];
        $image_data = $_POST['designUpload'];
		AddData($connect,$name,$bio,$email,$phone_no,$image_data);
	}
	

	?>