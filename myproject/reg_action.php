<?php
session_start();

if(isset($_POST['submit'])){
	

	$name = $_POST['name'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$agree =$_POST['agree'];
	$errors = [];
	
	if ( !$name ) {
		$errors[] = 'Name cannot be empty.';
	}

	if ( !$address ) {
		$errors[] = 'Address cannot be empty';
	}

	if ( !$username ) {
		$errors[] = 'Username cannot be empty';
	}

	if ( !$password1 ) {
		$errors[] = 'password cannot be empty';
	}

	if ( !$password2 ) {
		$errors[] = 'Confirm password cannot be empty';
	}
	if( !$agree ){
		$errors[]= 'please check the checkbox';
	}

	if ( $password1 != $password2 ) {
		$errors[] = 'Password not match';
	}



	if ( !$errors) {

					$pass=$_POST['password1'];
					$has_pass=password_hash($pass, PASSWORD_DEFAULT);
					include 'connect.php';
					$sql ="INSERT INTO user(name,username,address,password) VALUES (?,?,?,?)";
					$stmtinsert = $db->prepare($sql);
					$result = $stmtinsert->execute([$name,$username,$address,$has_pass]);
			if ( $result ) {
				header('location:succ_reg.php');
			}
			else {
				echo'error';
			}
	} //end if !errors
	else {
			$_SESSION['errors'] = $errors;
			header( 'location:register.php' );
	}
};






?>