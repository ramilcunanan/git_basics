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
  icon: 'error',
  title: 'wrong Credential',
  text: 'please login Again',
  footer: ''
})
</script> 
</body>
</html>