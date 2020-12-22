<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Little Calf India</title>
	<meta name="theme-color" content="yellow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<style type="text/css">
* {
  font-weight: 300;
  transition: all .4s ease;
}

html, body {

  scroll-behavior:smooth;
}

</style>
</head>
<body>
	<header class="d-flex flex-column mb-3 shadow-sm ">
		<div class="logo-location p-2">
			<div class="logo"><img src="images/logo.jpeg" class="img-fluid"></div>
			<div id="useraccess"><a href="#" id="username_show" class="btn btn-underline-warning " onclick="openAllModal('.login-regiter-modal')"><i class="fa fa-user-circle-o"></i> 
				<?php if(isset($_SESSION['n']))
				{ 
					echo $_SESSION['n'][0];
				}else{ 
					echo "Login/Register"; 
				}
				?>
			</a></div>
		</div>
		<div class="d-flex p-2">
		  <div class="p-2  flex-fill active">DEALS</div>
		  <div class="p-2  flex-fill">PIZZA</div>
		  <div class="p-2  flex-fill">SIDES</div>
		  <div class="p-2  flex-fill">DRINKS</div>
		  <div class="p-2  flex-fill">BURGERS</div>
		  <div class="p-2  flex-fill">DESSERTS</div>
		</div>
	</header>
	<!-- show all catgeory products start here -->
	<section class="main-product-section shadow-sm bg-white">
		 <h3 id="category">Deals</h3>
		 <div class="category-product">
		 	<!-- product box start -->
		 	 <div class="products shadow-sm bg-white">
		 	 	<div class="product-img"><img src="images/1.jpg" class="img-fluid"></div>
		 	 	<div class="product-description d-flex flex-column">
		 	 		<span class="size badge badge-success">Medium</span>
		 	 		<span class="p-name">Veg Pizza</span>
                    <span class="topping">Sweet Corn, Capsicum,Cheeze,red chilli</span>
                    <b class="price"></b>

		 	 		<p class="purchase-btn d-flex p-1">
		 	 			<a href="#" class="p-1">Customize <i class="fa fa-angle-right"></i></a>
		 	 			<button class="p-1">Add to Cart</button>
		 	 		</p>
		 	 	</div>
		 	 </div>
		 	 <!-- product box end here -->

		 	 <!-- product box start -->
		 	 <div class="products shadow-sm bg-white">
		 	 	<div class="product-img"><img src="images/2.jpg" class="img-fluid"></div>
		 	 	<div class="product-description d-flex flex-column">
		 	 		<span class="size badge badge-success">Medium</span>
		 	 		<span class="p-name">Veg Pizza</span>
                    <span class="topping">Sweet Corn, Capsicum,Cheeze,red chilli</span>
                    <b class="price"></b>

		 	 		<p class="purchase-btn d-flex p-1">
		 	 			<a href="#" class="p-1">Customize <i class="fa fa-angle-right"></i></a>
		 	 			<button class="p-1">Add to Cart</button>
		 	 		</p>
		 	 	</div>
		 	 </div>
		 	 <!-- product box end here -->
		 	 <!-- product box start -->
		 	 <div class="products shadow-sm bg-white">
		 	 	<div class="product-img"><img src="images/3.jpg" class="img-fluid"></div>
		 	 	<div class="product-description d-flex flex-column">
		 	 		<span class="size badge badge-success">Medium</span>
		 	 		<span class="p-name">Veg Pizza</span>
                    <span class="topping">Sweet Corn, Capsicum,Cheeze,red chilli</span>
                    <b class="price"></b>

		 	 		<p class="purchase-btn d-flex p-1">
		 	 			<a href="#" class="p-1">Customize <i class="fa fa-angle-right"></i></a>
		 	 			<button class="p-1">Add to Cart</button>
		 	 		</p>
		 	 	</div>
		 	 </div>
		 	 <!-- product box end here -->
		 	 <!-- product box start -->
		 	 <div class="products shadow-sm bg-white">
		 	 	<div class="product-img"><img src="images/4.jpg" class="img-fluid"></div>
		 	 	<div class="product-description d-flex flex-column">
		 	 		<span class="size badge badge-success">Medium</span>
		 	 		<span class="p-name">Veg Pizza</span>
                    <span class="topping">Sweet Corn, Capsicum,Cheeze,red chilli</span>
                    <b class="price"></b>

		 	 		<p class="purchase-btn d-flex p-1">
		 	 			<a href="#" class="p-1">Customize <i class="fa fa-angle-right"></i></a>
		 	 			<button class="p-1">Add to Cart</button>
		 	 		</p>
		 	 	</div>
		 	 </div>
		 	 <!-- product box end here -->
		 	 <!-- product box start -->
		 	 <div class="products shadow-sm bg-white">
		 	 	<div class="product-img"><img src="images/3.jpg" class="img-fluid"></div>
		 	 	<div class="product-description d-flex flex-column">
		 	 		<span class="size badge badge-success">Medium</span>
		 	 		<span class="p-name">Veg Pizza</span>
                    <span class="topping">Sweet Corn, Capsicum,Cheeze,red chilli</span>
                    <b class="price"></b>

		 	 		<p class="purchase-btn d-flex p-1">
		 	 			<a href="#" class="p-1">Customize <i class="fa fa-angle-right"></i></a>
		 	 			<button class="p-1">Add to Cart</button>
		 	 		</p>
		 	 	</div>
		 	 </div>
		 	 <!-- product box end here -->
		 	 <!-- product box start -->
		 	 <div class="products shadow-sm bg-white">
		 	 	<div class="product-img"><img src="images/2.jpg" class="img-fluid"></div>
		 	 	<div class="product-description d-flex flex-column">
		 	 		<span class="size badge badge-success">Medium</span>
		 	 		<span class="p-name">Veg Pizza</span>
                    <span class="topping">Sweet Corn, Capsicum,Cheeze,red chilli</span>
                    <b class="price"></b>

		 	 		<p class="purchase-btn d-flex p-1">
		 	 			<a href="#" class="p-1">Customize <i class="fa fa-angle-right"></i></a>
		 	 			<button class="p-1">Add to Cart</button>
		 	 		</p>
		 	 	</div>
		 	 </div>
		 	 <!-- product box end here -->
		 	 <!-- product box start -->
		 	 <div class="products shadow-sm bg-white">
		 	 	<div class="product-img"><img src="images/1.jpg" class="img-fluid"></div>
		 	 	<div class="product-description d-flex flex-column">
		 	 		<span class="size badge badge-success">Medium</span>
		 	 		<span class="p-name">Veg Pizza</span>
                    <span class="topping">Sweet Corn, Capsicum,Cheeze,red chilli</span>
                    <b class="price"></b>

		 	 		<p class="purchase-btn d-flex p-1">
		 	 			<a href="#" class="p-1">Customize <i class="fa fa-angle-right"></i></a>
		 	 			<button class="p-1">Add to Cart</button>
		 	 		</p>
		 	 	</div>
		 	 </div>
		 	 <!-- product box end here -->
		 	 <!-- product box start -->
		 	 <div class="products shadow-sm bg-white">
		 	 	<div class="product-img"><img src="images/2.jpg" class="img-fluid"></div>
		 	 	<div class="product-description d-flex flex-column">
		 	 		<span class="size badge badge-success">Medium</span>
		 	 		<span class="p-name">Veg Pizza</span>
                    <span class="topping">Sweet Corn, Capsicum,Cheeze,red chilli</span>
                    <b class="price"></b>

		 	 		<p class="purchase-btn d-flex p-1">
		 	 			<a href="#" class="p-1">Customize <i class="fa fa-angle-right"></i></a>
		 	 			<button class="p-1">Add to Cart</button>
		 	 		</p>
		 	 	</div>
		 	 </div>
		 	 <!-- product box end here -->
		 	 
		 </div>
	</section>
    <!-- show all category product end here -->
    <!-- cart secion start here -->
    <aside class="cart-section shadow-sm bg-white">
    	<h4 class="cart-title">Your Cart</h4>
    	<div class="cart-item">
    		<div class="addremove">
    			<span class="pro-name">Product name</span><i class="fa fa-angle-down toggle-topping" data-id='vegpizza'></i> <button id="decrease">-</button><span id="quantity">1</span><button id="increase">+</button> <span class="p-price">Rs.250</span> <button class="remove-cart"><i class="fa fa-close"></i></button>
    		</div>
    		<div class=" alltopping" id="vegpizza">
    			<div class="toppings">
	    			<div class="default">Red Peprika</div>
	    			<div class="default">Sweet Corn</div>
	    			<div class="default">Capsicum</div>
	    			<div class="default">Cheeze</div>
	    			<div class="addon-toppings">
	    				<div id="addon-topping-name">Double cheeze</div>
	    				<div id="addon-topping-price">Rs. 50</div>
	    			</div>
	    			<div class="addon-toppings">
	    				<div id="addon-topping-name">Double cheeze</div>
	    				<div id="addon-topping-price">Rs. 50</div>
	    			</div>
	    		</div>
    		</div>
    	</div>
    </aside> 
    <!-- cart section end here -->
	
<!-- login and register modal start here -->
<div class="login-regiter-modal">
	<div id="login-register-wraper">
		<button id="close-modal" onclick="closeAllModal('.login-regiter-modal')"><i class="fa fa-close"></i></button>
		<div id="login-collapse">
			<h3 class="text-white text-center"><i class="fa fa-user-circle-o"></i> Login Here</h3>
			<p id="login_error_mess"></p>
			<div id="login-form">
				<div id="login-input-wraper">
					<label>Email/Mobile</label>
					<input type="text" name="username" id="username">
				</div>
				<div id="login-input-wraper">
					<label>Password</label>
					<input type="password" name="password1" id="password1">
				</div>
				<div id="login-input-wraper">
					
					<button id="login">Login</button><br>
					<a href="#">Forgot Password</a>
					<a href="#" onclick="openAllModal('#login-collapse');closeAllModal('#register-collapse')">You don't have an account click here to register</a>
				</div>
			</div>
		</div>

		<!-- registration part start here-->
         <div id="register-collapse">
			<h3 class="text-white text-center"><i class="fa fa-user-circle-o"></i> Regsiter Here</h3>
			<p id="error_mess"></p>
			<div id="register-form">
				<div id="register-input-wraper">
					<label>Full Name :</label>
					<input type="text" name="name" id="name">
				</div>
				<div id="register-input-wraper">
					<label>Mobile Number :</label>
					<input type="number" name="mobile" id="mobile">
				</div>
				<div id="register-input-wraper">
					<label>Email Address :</label>
					<input type="text" name="email" id="email">
				</div>
				<div id="register-input-wraper">
					<label>Password :</label>
					<input type="password" name="password" id="pass">
				</div>
				<div id="register-input-wraper">
					<label>Pincode :</label>
					<input type="number" name="pincode" id="pincode">
				</div>
				<div id="register-input-wraper">
					<label>Delivery Address :</label>
					<input type="text" name="address" id="address">
				</div>
				<div id="register-input-wraper">
					
					<button id="register">Regsiter</button><br>
					
					<a href="#" onclick="openAllModal('#login-collapse');closeAllModal('#register-collapse')">You have an account click here to Login</a>
				</div>
			</div>
		</div>
		<!-- registration part end here -->

	</div>
</div>

<!-- login and register modal ens here -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
	// open modal function

</script>
</body>
</html>