<!DOCTYPE html>
<html>
<head>
	<title>Flood</title>
	<link rel="icon" href="assets/images/fav.png">
		  	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
       
        <link rel="stylesheet" href="assets/css/main.css">
        
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php include'layouts/header.php'; ?>
	<style>
		 .divhover{
  position: relative;
  display: inline-block;
  width: 200px;
  height: 400px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.divhover::after {
  content: "";
  border-radius: 5px;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  opacity: 0;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.divhover:hover {
  -webkit-transform: scale(1.25, 1.25);
  transform: scale(1.25, 1.25);
}

.divhover:hover::after {
    opacity: 1;
}

	</style>
</head>
<body>
<br><br>

<div class="container-fluid">
	<div class="jumbotron">
		<div class="row">
			 <div class="col-md-6 divhover">
			 	<iframe width="560" height="315" src="https://www.youtube.com/embed/9IrMsmE5PYg" frameborder="0" allowfullscreen></iframe>
			 	<p style="font-family: serif;font-size: 20px; text-align: center; font-weight: bold;">Flood in Koshi River</p>

			 </div>

			 <div class="col-md-6 w3-card-4 divhover">
			 <h3>Recent News</h3>
					<p style="font-family: serif;font-size: 20px;">The Ministry of Home Affairs (MOHA) in Nepal has said that at least 11 people have died as a result of landslides and floods in the country over the last 3 days. Some areas of the country have seen heavy rain since 30 June 2017 which has triggered several landslides and floods in nine districts. 
					</p>
					<p style="font-family: serif;font-size: 20px;">Local media reported that around 1,500 houses were inundated at various settlements in Saptari as flood waters entered settlements. MOHA said that three people died in a landslide in Parbat district on 01 July. A landslide in Myanglung, Terhathum district on the same day also killed 3 people. 
					</p>
					<a href="http://kathmandupost.ekantipur.com/news/2017-07-28/64-homes-in-khimti-still-at-risk-of-flood-landslide.html" target="_blank" >See more</a>
				
				</div>
			 </div>
		</div> 
	</div>
</div>

<div class="container-fluid">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-6" style="font-family: serif;font-size: 20px; text-align: justify;">
				<h3 style="text-align: center;">Causes</h3>
			<ol>
				<li>Volume, spatial distribution, intensity and duration of rainfall over a catchment</li>
				<li>Intensive grazing and deforestation must be controlled.</li>
				<li>Catchment and weather conditions prior to a rainfall event</li>
				<li>Topography </li>
				<li>Tidal influences 
</li>
			</ol>
			</div>
			<div class="col-md-6" style="font-family: serif;font-size: 20px; text-align: justify;">
				<h3 style="text-align: center;">Preventive Measures</h3>
			<ol>
				<li>Construction of a dyke (flood embankments) parallel to the rivers is preferred for the blockage of the flood.</li>
				<li>Intensive grazing and deforestation must be controlled.</li>
				<li>The glacial lakes, which seem to possess the possibility of outburst should be identified and drained out to minimise damage.</li>
				<li>We should conduct various educational programmes to aware people.</li>
				<li>Flood measuring stations should be made at flood regions.</li>
			</ol>
			</div>
		
		</div>
	</div>
</div>
<?php include'layouts/footer.php'; ?>


</body>
</html>











