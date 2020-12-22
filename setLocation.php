<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Little Calf India SET STORE LOCATION</title>
<style type="text/css">

  .logo-brand {
    width: 100%;
    /* height: 150px; */
    box-sizing: border-box;
    display: flex;
    padding: 10px 0px;
    justify-content: space-between;
}


.logo-brand img {
    width:80px;
    height:50px;
    box-shadow: 1px 1px 10px #ddd;
    border-radius: 7px;
}
.container{
  padding-bottom: 22px !important;
}
.container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}
#addareas,#area{
  padding: 2px 2px;
    box-sizing: border-box;
    margin: 5px 0px;
}

#addareas input,#area input{
  width: 83%;
    border: 1px solid #ddd;
    padding: 7px 2px;
    margin-right: 10px;
    border-radius: 5px;
}
@media only screen and (max-width: 600px)
{
  .container {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 0;
    line-height: 0;
}
}
</style>
</head>
<body>

<div class="container-fluid">
<div class="logo-brand">
  <img src="logo.jpeg">
   <button type="button" class="btn btn-outline-warning" onclick="getLocation()">SET NOW</button>
</div>
  <h4 class="text-center text-success">Set Your Store Location</h4>

<div class="container">
  <?php  
if (isset($_GET['id'])) {


  $data= file_get_contents("restaurent.json");
  $arr = json_decode($data,true);
  for ($i=0; $i <count($arr) ; $i++) { 
     if ($arr[$i]['id'] == $_GET['id']) {
       ?>

    <input type="hidden" name="" id="getid" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="" id="lat" value="<?php echo $arr[$i]['map_lat'] ?>">
     <input type="hidden" name="" id="long" value="<?php echo $arr[$i]['map_long'] ?>">
     <br>
     <div class="form-group">
        <label for="rname">Restaurent Location:</label>
        <input type="text" class="form-control" id="rname" value="<?php echo $arr[$i]['location'] ?>">
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control" id="city" value="<?php echo $arr[$i]['city'] ?>">
      </div>
      
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" class="form-control" id="mobile" value="<?php echo $arr[$i]['mobile']; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" value="<?php echo $arr[$i]['email'] ?>">
      </div>
      <div class="form-group">
        <label for="email">Distance Covered:</label>
        <input type="text" class="form-control" id="distance" value="<?php echo $arr[$i]['distance'] ?>">
      </div>
      <div id="area">
          <label>Add Areas:</label>
          <input type="text" name="area[]" id="restarea" ><button class="btn btn-success" id="addarea">+</button>
      </div>

      <div class="form-group">
        <label for="comment">Restaurent Address:</label>
        <textarea class="form-control" rows="5" id="address" ><?php echo $arr[$i]['address'] ?></textarea>
      </div>

      <button class="btn btn-primary" id="savelocation">SAVE LOCATION</button>
   </div>
   <?php
     }else{

     }
  }

 
    }
   ?>
</div>
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  // x.innerHTML = "Latitude: " + position.coords.latitude + 
  // "<br>Longitude: " + position.coords.longitude;
   $("#lat").val(position.coords.latitude);
   $("#long").val(position.coords.longitude);
   alert("Location set successfully now save your location.")
  //alert("let="+position.coords.latitude+" long="+position.coords.longitude);
}

var a=1;
$("#addarea").on('click',function(){
  $('#area').append('<div id="addareas"><input  type="text" name="area[]" id="restarea" ><button class="btn btn-danger" id="remove" data-id="area">X</button></div>');

     $("button#remove").on('click',function(){
       $(this).parent().fadeOut();
     });
});


// save location

$("#savelocation").on('click',function(){

   var area="";
   var id=$("#getid").val();
   var lat=$("#lat").val();
   var long=$("#long").val();
   var rlocation=$("#rname").val();
   var city=$("#city").val();
    var distance=$("#distance").val();
   var mobile=$("#mobile").val();
   var email=$("#email").val();
   var address=$("#address").val();
   $("input#restarea").each(function(i){
       area += $(this).val()+",";
   });

   //console.log(area + "- "+id+"-"+lat+"-"+long+"-"+rname+"-"+city+"-"+mobile+"-"+email);
   $.post('savelocation.php',{area:area,id:id,lat:lat,long:long,rlocation:rlocation,distance:distance,city:city,mobile:mobile,email:email,address:address},function(data){
    alert(data);
   });
});
</script>
</body>
</html>
