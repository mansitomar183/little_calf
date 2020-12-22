<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nearest Restaurent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #ffffff4d;
    border: 1px solid #000000;
    margin: 7px 0px;
   }
   .panel{
   	background-color: #ffffff4d !important;
   	border: 0.1px solid black !important;
   }
   .panel-primary>.panel-heading {
    font-size: 22px;
    color: #fef400;
    background-color: #000;
    border-color: #000;
    text-align: center;
}
</style>
</head>
<body style="background: linear-gradient(45deg, #FF5722, #fdf402);
    background-repeat: no-repeat;
    background-size: 100%;
    height: 100vh;">
 
<div class="container" >
  <div class="container" style="text-align: center;padding: 15px 0px;"><img  src="http://online.romspizza.com/images/logo.jpeg" style="width: 100px"></div>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Restaurants Near You</div>
      <div class="panel-body"></div>
    </div>  
    
  </div>
</div>
<script type="text/javascript">
    //     	function getLocation(lat1,long1) {
				//   if (navigator.geolocation) {
				//     navigator.geolocation.getCurrentPosition(showPosition(lat1,long1));
				//   } else { 
				//     x.innerHTML = "Geolocation is not supported by this browser.";
				//   }
				// }
        	function showPosition(lat,long) {
  
			 //console.log(position.coords.latitude);
			 // console.log(position.coords.longitude);
			 //  var lat=position.coords.latitude;
			 //  var long=position.coords.longitude;
			   $.post('findRestaurent.php',{lat,long},function(data){
                    console.log(data);
                    $(".panel-body").html(data);
			   });
			   
			}

$(document).on('click','li',function(){
	var id=$(this).data('id');
	window.location.href="http://online.romspizza.com/products.php?id="+id+"&cat=pizza";
		});
</script>
</body>
</html>
