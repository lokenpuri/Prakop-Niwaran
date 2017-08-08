<!DOCTYPE html>
<html>
<head>
	<title></title>

<script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 15,cityid: '1283240',appid: '1531cd763b2f28e8ba2caee92b49d729',units: 'metric',containerid: 'openweathermap-widget-15',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "https://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator-2.0.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>

</head>
<body>


<div class="container-fluid">
  <div class="jumbotron">
    <div class="row">
      <div class="col-md-8">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

    <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="assets/images/disasters/e1.jpg" alt="Earthquake">
                <div class="carousel-caption">
                  <h3>Earthquake</h3>
                  <h4>Nepal gets hit by an Earthquake</h4>
                </div>      
          </div>

          <div class="item">
             <img src="assets/images/disasters/f1.jpg" alt="Flood">
              <div class="carousel-caption">
                <h3>Flood</h3>
                <h4>Nepal floods About 34 houses were inundated in Nawalparasi </h4>
              </div>      
          </div>


           <div class="item">
                  <img src="assets/images/disasters/l2.jpg" alt="Landslide">
                  <div class="carousel-caption">
                    <h3>Landslide</h3>
                    <h4>Muglin Narayangadh road section obstructed by dry landslide</h4>
                  </div>      
                </div>         
          </div>

    <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
          </a>
    
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
          </a>
           
      </div>  
       <center><h3>An approach to Natural Disaster mitigation</h3></center>
      <br>
    </div>
      <div class="col-md-4">
        <div class="container-fluid">
            <div class="jumbotron">
            <center><h3 style="padding-top: 20px;">Weather Forecast</h3></center>
                <div id="openweathermap-widget-15" style="padding: 50px 5px 5px; width: 100%"></div>
                <center><strong><h4>Stay Alert!!!</h4></strong></center>
               </div>
            </div>
        </div>
      </div>

     
  </div>
</div>


</body>
</html>




