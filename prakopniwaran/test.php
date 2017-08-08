<?php  

require_once('dbconnect.php');
	if ($_SERVER['PHP_SELF'] == '$_GET') {
		# code...
	

				    $sql = "SELECT post FROM post ";

					$r = mysqli_query($con, $sql);

					$result = mysqli_fetch_array($r);

					echo $result;		


					}			

	?>