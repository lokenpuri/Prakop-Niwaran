
<!DOCTYPE html>
<html>
<head>
	<title></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/main.css">

	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>
<body>



<form action="post.php" method="post">
		  <div class="form-group">
		      <textarea class="form-control" name="new-post" id="new-post" rows="5" placeholder="What's on your mind?"></textarea>
		  </div>
		 <button type="submit" class="btn btn-primary">Post</button>
</form>

<?php

require_once ('dbConnect.php');



$sql = "SELECT status FROM posts";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>

         
    <div class="container">
    	<div class="jumbotron">
    		<div class="row">
    			<div class="col-md-6">
		            <article class="post">
	          			<div class="info">
	                        <a href="">Lokendra Puri</a> 
	                    </div>
	                     <div class="info">
	                        Posted  on mar 21 2017
	                    </div>
				                  	
				        <div class="posts">
				            <?php echo $row["status"]; ?>

		                    <div class="interaction">
		                        <a href="#">Like</a> |
		                        <a href="#">Dislike</a> |
		                        <a href="#">Edit</a> |
		                        <a href="#">Delete</a>
		                    </div>

				        </div>
				     
		            </article>
              	</div>
            </div>
      	</div>
    </div>
    <?php }
	} else {
    echo "0 results";
	}

	mysqli_close($con);
?>

</body>
</html>





       
          <!-- 	<div class="col-md-4" style="background-color: ">
          		<center><h3>Recent News</h3></center>
          		<ul>
          			 <li> 
                  <a href="http://kathmandupost.ekantipur.com/news/2017-07-28/64-homes-in-khimti-still-at-risk-of-flood-landslide.html" target="_blank">64 homes in Khimti still at risk of flood, landslide</a><br></li>
                <li> 
                  <a href="http://kathmandupost.ekantipur.com/news/2017-07-24/bridge-over-bhote-koshi-river-collapses-in-sindhupalchok.html" target="_blank"> Bridge over Bhote Koshi River collapses in Sindhupalchok</a><br></li>
                <li>
                  <a href="http://floodlist.com/asia/nepal-floods-landslides-july-2017" target="_blank">Nepal – 11 Deaths Reported After Floods and Landslides in 9 Districts</a><br>
                 
                  </li>
                <li>  <a href="https://thehimalayantimes.com/nepal/two-dead-one-missing-landslide-hit-kaski/" target="_blank">Two dead, one missing in landslide hit Kaski </a><br></li>
                <li><a href="https://thehimalayantimes.com/nepal/casualties-feared-landslide-buries-vehicles-along-narayangadh-muglin-road/" target="_blank">2 killed as landslide buries vehicles along Chitwan road</a><br></li>
                <li><a href="https://thehimalayantimes.com/nepal/casualties-feared-landslide-buries-vehicles-along-narayangadh-muglin-road/" target="_blank">Traffic resumes; Chitwan landslide victims identified</a><br></li>
          		</ul>
          	</div>
 -->



