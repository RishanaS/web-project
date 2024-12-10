<?php

	require_once 'dbconf.php';	
			
function AddSignupDetails($connect,$name,$email,$user_name,$password){
			try{

                //Quary
                $sql = "INSERT INTO user VALUES('$name','$email','$user_name','$password')";
                //execute the quary
                $result = mysqli_query($connect,$sql);

                if ($result){
                    echo "New user record created successfully";
        
                }else{
                    die("Error".mysqli_error($connect));
                }

		    } catch(Exception $e){
			    die($e->getMessage());
	        }
		}
?>   