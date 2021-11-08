<?php

session_start();

if(!$_SESSION['id']){

	echo "<script>location.href='index.php'</script>";
}


?>