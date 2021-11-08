<?php 
session_start();


if(isset($_POST['login']))
	{
			$log_user=$_POST['username'];

			$log_pass=$_POST['password'];
	if( !$log_user ){
		echo 'pls enter username';

	}
	if( !$log_user ){
		echo 'pls enter password';
	}




		include 'connect.php';
		$query ="select * from user where username ='".$log_user."'";
		$d = $db->query($query);

			foreach ($d as $data)
			{
				$hash_pass=$data['password'];
					
				if(password_verify($log_pass, $hash_pass))	
				{
						session_regenerate_id();
						$_SESSION['id'] =$data['id'];
						$_SESSION['name']=$data['name'];
						$_SESSION['user'] =$data['username'] ;

						session_write_close();
						
						header('location:userlog_land.php');
				}

					else{

						header('location:re_log.php');
					}




			}

};
 ?>