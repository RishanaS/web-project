<?php

	require_once 'dconf.php';	
			
function AddSignupDetails($connect,$name,$email,$user_name,$password){
			try{

                //Quary
                $sql = "INSERT INTO user VALUES('$name','$email','$user_name','$password')";
                //execute the quary
                $result = mysqli_query($connect,$sql);

                if ($result){
                    // echo "New user record created successfully";
        
                }else{
                    die("Error".mysqli_error($connect));
                }
                // header('Location:../homepage.php');

		    } catch(Exception $e){
			    die($e->getMessage());
	        }
		}

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //echo "Got the POST request from client";
            
                
                $name = $_POST['name'];
                $email = $_POST['email'];
                $user_name = $_POST['user_name'];
                $password = $_POST['password'];
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                AddSignupDetails($connect,$name,$email,$user_name,$hashed_password);
    }
    
?>   