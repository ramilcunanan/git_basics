<?php

require 'sess_check.php';

if ( session_id()== '' ){
	session_start();
}
	//echo $_SESSION['name'] . '<br>';

	include 'connect.php';
	$sql = "select * from user where id='" . $_SESSION['id']. "'";
	$result = $db->query($sql);

	foreach ($result as $row) :

		//echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col">
    	<div class="desc">
    		
    	</div>
    </div>
    <div class="col">
      <div class="news-feed">
      	<img class="news-feed-prof" src="assets/image/user2.jfif"> &nbsp
      		<strong><a class="name-prof" style="color: black; " href="#" ><?php   echo $_SESSION['name'];?></a> </strong> <br>
      	 <hr>
      	<div style="margin-left: 20px; cursor: pointer;" class="bg-white">
                    <div class="d-flex flex-row fs-12">            	
                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>

                    </div>
                </div>
            <div class="bg-light p-2">
            	<?php
                    			include 'connect.php';
                    			$sql2="select * from comment ";
                    			$res=$db->query($sql2);
                    			foreach ($res as $comment) {
                    				echo '<img style="width: 30px;height: 30px;border:1px solid gray;border-radius: 50%;" src="assets/image/user2.jfif">';
                    				echo '<strong> &nbsp'.$comment['username']. '</strong><br>';
                    				echo '&nbsp &nbsp &nbsp &nbsp'.$comment['comment'].'<br>';
                    				echo '<div class="d-flex flex-row fs-12">            	
					                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
					                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
					                        <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>

					                    </div>';
                    				echo '<hr>';
                    				# code...
                    			}

                    	?>
              	<form method="post" action="comment.php">
                    <div class="d-flex flex-row align-items-start">
                    	
                    	<br>
                    	<img class="rounded-circle" src="assets/image/user2.jfif" width="40">
                    	<textarea class="form-control ml-1 shadow-none textarea" placeholder="comment here!" name="comment"></textarea>
                    </div>
                    <div class="mt-2 text-right">
                    	<button class="btn btn-primary btn-sm shadow-none" type="submit"  name="reply">comment</button>		
                    	<button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
                    </div>
                </form>
            </div>
         <img class="news-feed-prof" src="assets/image/user2.jfif"> &nbsp
	         <strong>
	         	<a class="name-prof" style="color: black; " href="#" >TIFANY MASANQUE</a> 
	         </strong> 
	         <br>
         		<i style="padding: 50px;">&nbspGood Morning Guys!</i> 
         		<hr>

      	<div style="margin-left: 20px; cursor: pointer;" class="bg-white">
            <div class="d-flex flex-row fs-12">                    	
                <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
            </div>
       	</div>
        <div class="bg-light p-2">
           	<div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="assets/image/user2.jfif" width="40">
           		<textarea class="form-control ml-1 shadow-none textarea" placeholder="comment here!"></textarea>
           	</div>
            <div class="mt-2 text-right">
                <button class="btn btn-primary btn-sm shadow-none" type="button">comment</button>
                <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      	<div class="profile">
			<img class="prof" src="assets/image/user2.jfif">
			<h5>name:<?php echo $_SESSION['name'];?></h5>
			<h5>address:<?php echo $row['address'];?></h5>

			<form method="post" action="user_logout.php">
				<button type="submit" name="logout"> Logout</button>
			</form>
		</div>
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<?php endforeach; ?>
</body>
</html>