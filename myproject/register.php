<?php
if ( session_id()== '' ){
	session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style type="text/css">

	.container{
		width: 60%;
		height: auto;
		border:1px solid gray;
		border-radius: 5px;
		padding: 10px;

	}
</style>
<body >
<form  method="post" action="reg_action.php">

<div class="container">
<div class="mb-3">
	<?php foreach ($_SESSION['errors'] as $error) : ?>
		<div class="alert alert-danger" role="alert">
  			Error: <?php echo $error; ?>
		</div>
	<?php endforeach; ?>
</div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    
  </div>


  <div class="mb-3">
    <label for="address" class="form-label">address</label>
    <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="password1" class="form-label">password</label>
    <input type="password" class="form-control" id="password1" name="password1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="password2" class="form-label">re-entry password</label>
    <input type="password" class="form-control" id="password2" name="password2" aria-describedby="emailHelp">
    
  </div>
   <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="agree" value="agree" name="agree">
    <label class="form-check-label" for="agree">Agree terms and condition</label>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
<?php
	$_SESSION['errors']= [];
?> 