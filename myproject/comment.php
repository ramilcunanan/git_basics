<?php
session_start();
$user = $_SESSION['user'];
$comment=$_POST['comment'];


if(isset($_POST['reply'])){
					include 'connect.php';
					$sql ="INSERT INTO comment(comment,username) VALUES (?,?)";
					$stmtinsert = $db->prepare($sql);
					$result = $stmtinsert->execute([$comment,$user]);
			if ( $result ) {
				header('location:userlog_land.php');
			}
			else {
				echo'error';
			}
}
?>