<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<div>
	<?php
	include 'login.php';
	?>

</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

	Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'User has been added',
  showConfirmButton: false,
  timer: 1500
})
</script> 
</body>
</html>