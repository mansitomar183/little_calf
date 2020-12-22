<?php
session_start();
include_once('classes/customer.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.logo-brand {
    width: 100%;
    /* height: 150px; */
    box-sizing: border-box;
    text-align: center;
    padding: 10px 0px;
}

.logo-brand img {
    width: 150px;
    height: 110px;
    box-shadow: 1px 1px 10px #ddd;
    border-radius: 7px;
}
  </style>
</head>
<body>
<?php
if (isset($_SESSION['o'])){
	//echo strtoupper(uniqid());
	//echo $_SESSION['o']['confirm']."<br>";
   $newOrder= new Customer();
   $order= $newOrder->myCart($_SESSION['i'],'json/addtocart.json');
   //print_r($order);
?>
<div class="container">
  <div class="logo-brand"><img src="images/logo.jpeg"></div>
  <h2 class="text-center text-success">Billing Details</h2>
                                                                                       
  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
        
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
          <th>City</th>
         
        </tr>
      </thead>
      <tbody>
        <tr>
         
          <td>Anna</td>
          <td>Pitt</td>
          <td>35</td>
          <td>New York</td>
         
        </tr>
      </tbody>
    </table>
  </div>
</div>




<?php
}
?>
</body>
</html>