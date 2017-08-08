<!DOCTYPE html>
<html>
<head>
	<title>Prakop Niwaran</title>
	<link rel="icon" href="assets/images/fav.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/main.css">

	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">

	<style>
		

	.a{
		background-color: #ffffff;
	}
	.aa{
		background-color: #e3f2fd;
	}
	#divpost{
		 margin: auto;
    width: 50%;
    padding: 10px;
	}

	</style>

	<br><br>
<?php include 'layouts/header.php'; ?>

</head>
<body>

<?php include 'layouts/carousel.php' ?>

<?php 
if(isset($_SESSION['usr_id'])) {
		$name = $_SESSION['usr_name'];
}


include_once 'dbconnect.php';




$error = false;

if (isset($_POST['submit'])) {
$status = mysqli_real_escape_string($con, $_POST['status']);
if(empty($status)){
	$error = true;
	$status_error = "The field is empty.";
}


if(!$error){
	if(mysqli_query($con, "INSERT INTO posts(status, name) VALUES('" . $status . "', '" . $name . "')"));
		}
}

?>
<div class="row">
	<div id="divpost" class="w3-container " align="center" style="width: 70%" >
		<div class="newsFeed">
			<center><h2 style="color: white;">News Feed</h2></center>
		</div>
		<br>

		<?php if(isset($_SESSION['usr_id'])) { ?>
		<div class="status-form">
		    <form name="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
				<div class="form-group">    
                    <textarea rows="4" placeholder="What's your problem ??" class="form-control" name="status"></textarea> 
                     <span class="text-danger"><?php if(isset($status_error)) echo $status_error; ?></span>   
				</div>
		                        
                <div class="form-group" >
                    <input type="submit" style="width: 20%; float: right;" name="submit" class="btn btn-default btn-primary" value="Post" />
                </div>    
		                    </form>
		                     <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                    <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
				        </div>
			<?php   } ?>

				       
					</div>
		</div>
		

<div class="container-fluid">
	<div class="jumbotron" align="center">	
		<div class="row">
			<div class="col-md-12 " >
				<?php

				$sql = "SELECT * FROM posts order by post_id desc";

				$result = mysqli_query($con, $sql);

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) { ?>  

				    <div class="row w3-container" style="width: 80%" align="left">       

		    				<article class="post w3-card-4" >

										<div class="info">
										
											<header style="align-content: center; background-color: #009688" class="w3-container ">
											
								            <h4 style="color: white;">
								            
								            <img src="assets/images/user.png" alt="Avatar" style="margin-right: 10px">


														  <?php echo $row["name"] ?> 
								           

								            </h4>
								        </header>	

				       					</div>

				       					 <div class="w3-container">
		      
									            
									            <h5>
									            	<?php 
										            echo "Posted on   " .$row["date"];

										            echo "<br>";	
										            ?>

									            </h5>

									            <p style="font-family: serif; font-size: 20px;">
									            	<?php  echo $row["status"];  ?>
										         
									            </p>
					      		 		 </div>
			        			
		            			
				                    <div class="interaction" style="padding-left: 20px; padding: 10px">
				                        <a href="#">Like</a> |
				                        <a href="#">Dislike</a> |
				                        <a href="#">Edit</a> |
				                        <a href="#">Comment</a>
				                    </div>

				    		</article>


				    </div>
				    <br>
				    <br>
				    				

				<?php }	
					} else {
				    echo "0 results";
					}

					mysqli_close($con);
				?>			
	
			</div>


		
</div>

</div>
</div>

</div>

</div>


<?php include'layouts/footer.php'; ?>
		   	

</body>
</html>

