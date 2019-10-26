<?php
session_start();
$_SESSION['msg'] = '';
include "db_config.php";
$error = "passwords did not match";
$error1 = "Password should be min 8 characters and max 16 characters";
$error2 = "Password must include at least one number";
$error3 = "Password must include at least one letter";
$error4 = "email already exist";
$success = "Successful created an account, login to start";
   
    if (isset($_POST['register'])) {


            $email = $_POST['email'];
			$password = $_POST['password'];
			$confirmpassword = $_POST['confirmpassword'];
            // Check if all fields are empty.


			if ($email == '' || $password == '' || $confirmpassword == ''){
				 ?>
			         <script language="JavaScript">
			         alert(' Please fill form!');
			         document.location='../signup.php';
			         </script>
			     <?php
			} elseif ($confirmpassword != $password) {
				$_SESSION['error'] = $error;
                header("location:../signup.php");
			}elseif (strlen($password)<8 || strlen($password) > 16) {
				$_SESSION['error'] = $error1;
                header("location:../signup.php");
				   
			}elseif (!preg_match("#[0-9]+#",$password)) {
				$_SESSION['error'] = $error2;
                header("location:../signup.php");
				   
				    
			}elseif (!preg_match("#[a-zA-Z]+#", $password)) {
				    $_SESSION['error'] = $error3;
                    header("location:../signup.php");
			}


			 else{
				$result =$conn->query("select * from users where email='".$email."' limit 1");
				if(mysqli_num_rows($result) !=0){
					$_SESSION['error'] = $error4;
                    header("location:../signup.php");

				}else{
				$result =$conn->query (" INSERT INTO `users` (`email`,`password`) VALUES ('".$email."','".$password."')");
				   $_SESSION['error'] = $success;
                    header("location:../login.php");
				}
}
 

 

    } // If form is submitted
 
?>



