<?php
session_start();
include_once('classes/products.php');
include_once('classes/customer.php');
$newProducts= new Products();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Little Calf India</title>
	<meta name="theme-color" content="yellow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
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


<!-- <?php 

if (!isset($_GET['mob'])) {
	

?>
<div id="otpscreen" style="
    height: 100vh;
    width: 100vw;
    position: fixed;
    top: 0;
    background: url(images/bround.jpg);
    background-size: contain;
    z-index: 7;
">
</div>


<div id="otpscreenmask" style="
    height: 100vh;
    width: 100vw;
    position: fixed;
    top: 0;
    background: #009e64a6;
   
    z-index: 8;
    /* display: none; */
    text-align: center;
">
   <img style="box-shadow: 1px -1px 4px 6px #0000004d;width: 53vw;margin-top: 10vh;border-radius: 53vw;padding-top: 10px;padding-left: 5px;background: white;" src="images/logo6.jpg">
    
<div id="otpmain" style="
    background: white;
    margin: 1vh 4vw;
    border-radius: 5px;
    box-shadow: 2px 3px 6px 3px #00000075;
    padding: 10px;
">
<h3 id="title">Please Enter your Mobile</h3><hr style="
    /* color: green; */
    border: 1px solid #d2d2d2;

"><input type="text" id="mobile" style="
    padding: 6px;
    border-radius: 15px;
    border: 1px solid #4ec095;
    text-align: center;
    margin-bottom: -82px;
" ><br class="bans">
<span id="error1" class=" text-danger font-weight-bold"></span><br class="bans">
<input type="text" id="mobile1" style="
    padding: 6px;
   display: none;
    border-radius: 15px;
    border: 1px solid #4ec095;
    text-align: center;
    
" ><br>

<input id="getotp" type="number" style="display:none">

<br>
<button id="otpsender" onclick="makeotp(1)" style="margin: 3vh;background: orange;border: 1px solid white;box-shadow: rgba(0, 0, 0, 0.5) 2px 3px 3px 0px;color: white;padding: 10px;border-radius: 6px;">Generate OTP</button>
<button onclick="verify()" id="otpverify" style="width: 36vw;margin: 0vh;background: rgb(0, 154, 97);border: 1px solid white;box-shadow: rgba(0, 0, 0, 0.5) 2px 3px 3px 0px;color: white;padding: 11px;display: none;border-radius: 6px;">Verify</button>
</div>

</div>
</div>

<?php }  ?> -->
    <input type="hidden" name="" id="restaurentid" value="<?php echo @$_GET['id']; ?>">
	<header class="d-flex flex-column mb-3 shadow-sm ">
		<div class="logo-location p-2">
			<div class="logo"><img src="images/logoc.jpg" style="width:193%" ></div>
			<div id="useraccess">
				<div id="showload">
				<a href="#" id="username_show" class="btn btn-underline-warning " onclick="openAllModal('.login-regiter-modal')"><i class="fa fa-user-circle-o"></i> 
				<?php if(isset($_SESSION['n']))
				{ 
					echo $_SESSION['n'][0],"</a>&nbsp;&nbsp;&nbsp;<a href='#' id='logout'>Logout</a>";
				}else{ 
					echo "Login/Register</a>"; 
				}
				?>
			</div>
			</div>
		</div>
		<div class="d-flex p-2">
		  <!--<div class="category p-2  flex-fill " data-id="deals" >DEALS</div>-->
		  <div  id="m1" class="category p-2  flex-fill <?php echo ($_GET['cat'] == 'pizza')? 'active':''; ?>" data-id="milk" >MILK</div>
		  <div class="category p-2  flex-fill <?php echo ($_GET['cat'] == 'pizza')? 'active':''; ?>" data-id="dahi" >DAHI</div>
		  <div class="category p-2  flex-fill <?php echo ($_GET['cat'] == 'sides')? 'active':''; ?>" data-id="ghee" >GHEE</div>
		  <div    class="category p-2  flex-fill <?php echo ($_GET['cat'] == 'drinks')? 'active':''; ?>" data-id="paneer"  >PANEER</div>
		  <div class="category p-2  flex-fill <?php echo ($_GET['cat'] == 'burger')? 'active':''; ?>" data-id="icecream" >ICE CREAM</div>
		  
		</div>
	</header>
	<!-- show all catgeory products start here -->
	<section class="main-product-section shadow-sm bg-white">
		<?php
	        if (isset($_GET['cat'])) {
	              	
	              	$pro=$newProducts->showCategoryProduct($_GET['cat'],'json/products.json');
	              	  
	              	   	  ?>
	<!-- <div id="top-filter">
		
		     <h3 id="category"> <?php echo strtoupper($_GET['cat']); ?> </h3>
		
		<?php  if($_GET['cat']=='pizza'){ ?>
		 <select id="filter">
		     <option value="false"> By Category</option>
		     <option value="simplyveg">Simply Veg</option>
    	   	  <option value="vegdelight">Veg Delight</option>
    	   	  <option value="vegtreat">Veg Treat</option>
    	   	  <option value="vegspecial">Veg Special</option>
    	   	  <option value="singletoppingpizza">Single Topping Pizza</option>
    	   	  <option value="doubletoppingpizza">Double Topping Pizza</option>
		 </select>
		 <select id="filtersize">
		     <option value="false">SIZE</option>
		     <option value="small">Small</option>
    	   	 <option value="medium">Medium</option>
    	   	 <option value="large">Large</option>
    	   	  
		 </select>
		 <?php  }else{} ?>
    </div> -->
		<div   id="load">
			 <div class="category-product" id="loaded">
			 	    <?php

                      for ($i=0; $i <count($pro) ; $i++) { 
			 	    ?>
                        <!-- product box start -->
					 	 <div class="products shadow-sm bg-white <?php echo $pro[$i]['subcat'].' '.$pro[$i]['subcat'].$pro[$i]['size'] ?>">
					 	 	<div class="product-img"><img src="images/<?php echo $pro[$i]['imgurl'] ?>" class="img-fluid"></div>
					 	 	<div class="product-description d-flex flex-column">
					 	 		<span class="size badge  <?php if($pro[$i]['size'] == '1/2 kg'){ echo 'badge-danger'; }else if($pro[$i]['size'] == '1 kg'){ echo 'badge-warning'; }else{ echo 'badge-success';} ?>"><?php echo $pro[$i]['size'] ?></span>
					 	 		<span class="p-name"><?php echo $pro[$i]['item_name'] ?></span>
			                    <span class="topping"><?php echo $pro[$i]['toppings'] ?></span>
			                    <b class="price">Rs.<?php echo $pro[$i]['cost'] ?></b>

					 	 		<p class="purchase-btn  p-1">
					 	 			<!-- <a href="#" class="p-1" id="customize" data-id="<?php //echo $pro[$i]['item_id'] ?>">Customize <i class="fa fa-angle-right"></i></a> -->
					 	 			<button class="p-1" id="addtocart" data-id="<?php echo $pro[$i]['item_id'] ?>">Add to Cart</button>
					 	 			<!--<input type="submit" class="p-1" id="addtocart" data-id="<?php echo $pro[$i]['item_id'] ?>" value="add to card"/ >-->

					 	 			
					 	 		</p>
					 	 	</div>
					 	 </div>
		 	 <!-- product box end here -->



	              	<?php
	              	   }
	              }else{
	              	
	              }
			 	?>
			</div> 	 
		</div>
	</section>
    <!-- show all category product end here -->
    <!-- cart secion start here -->
    <aside class="cart-section shadow-sm bg-white">
    	<button id="closecart" onclick="closeAllModal('.cart-section')"><i class="fa fa-arrow-left"></i></button>
    	<h4 class="cart-title">Your Cart</h4>
    	<button id="showcoupon" onclick="openCouponModal('#coupon-modal')"><i class="fa fa-gift"></i> Promo Code Discount  <i class="fa fa-arrow-right"></i></button>
    <div id="loadcart">
    	<div class="cart-item" id="loadedcart">
    		<?php
            if(isset($_SESSION['i'])){
             	$mycart = new Customer();
				$myproducts = $mycart->myCart($_SESSION['i'],'json/addtocart.json');
			if (count($myproducts) > 0){
				$totalprice=0;
			
				for ($i=0; $i <count($myproducts) ; $i++) {
				    $totalprice += intval($myproducts[$i]['cart_price']); 
					?>

    		<div class="addremove">
    			<span class="pro-name" data-id='<?php echo preg_replace('/\s*/', '', $myproducts[$i]['item_name']); ?>' onclick="toggleTopping($(this).data('id'))">
    				<?php echo $myproducts[$i]['item_name']; ?>&nbsp; (<?php echo $myproducts[$i]['item_price']; ?>)
    			</span>
    			<!-- <i class="fa fa-angle-down toggle-topping" data-id='<?php //echo preg_replace('/\s*/', '', $myproducts[$i]['item_name']); ?>'></i>  -->
    			<button id="decrease" data-id="<?php echo $myproducts[$i]['item_id']+$myproducts[$i]['random']; ?>" data-cust="<?php echo $myproducts[$i]['cust_id']; ?>" onclick="descrease($(this).data('id'),$(this).data('cust'))">-</button>
    			<span id="quantity<?php echo $myproducts[$i]['item_id']+$myproducts[$i]['random']; ?>"><?php echo $myproducts[$i]['quantity']; ?></span>
    			<button id="increase" data-id="<?php echo $myproducts[$i]['item_id']+$myproducts[$i]['random']; ?>" data-cust="<?php echo $myproducts[$i]['cust_id']; ?>" onclick="increase($(this).data('id'),$(this).data('cust'))" >+</button>
    			<i class="fa fa-rupee"></i> <span class="p-price"><?php echo $myproducts[$i]['cart_price']; ?></span> 
    			<button class="remove-cart" data-id="<?php echo $myproducts[$i]['item_id']+$myproducts[$i]['random']; ?>" data-cust="<?php echo $myproducts[$i]['cust_id']; ?>" onclick="remove($(this).data('id'),$(this).data('cust'))"><i class="fa fa-trash"></i></button>
    		</div>
    		<div class=" alltopping" id="<?php echo preg_replace('/\s*/', '', $myproducts[$i]['item_name']); ?>">
    			<div class="toppings">
    				<div class="default"><?php echo $myproducts[$i]['defaulttopping'];?></div>
    				<?php

                      for ($j=0; $j <count($myproducts[$i]['addon_toppings']) ; $j++) { 
                      	?>
                            <div class="addon-toppings">
			    				<div id="addon-topping-name"><?php echo $myproducts[$i]['addon_toppings'][$j]['tname'];?></div>
			    				<div id="calculate"><?php echo $myproducts[$i]['addon_toppings'][$j]['tquantity'].' x '.$myproducts[$i]['addon_toppings'][$j]['tprice'];?></div>
			    				<div id="addon-topping-price"><i class="fa fa-rupee"></i> <?php echo intval($myproducts[$i]['addon_toppings'][$j]['tquantity'])*intval($myproducts[$i]['addon_toppings'][$j]['tprice']);?></div>
			    			</div>
	    			
	    		
	    			
	    			
	    			<?php
                      }
    				?>
	    		</div>
    		</div>
    		<?php
				}

            $pcode="";
            $pdisc=0;
			 if (isset($_SESSION['pcode']) && isset($_SESSION['pdisc'])) {
			   $pcode=$_SESSION['pcode'];
			   $pdisc=intval($_SESSION['pdisc']);
			 }
    		?>
		    	<p id="grandtotal">
		    		<span>Total Pice</span>
		    		<span></span>
		    		<span><i class="fa fa-rupee"></i> <b><?php echo $totalprice; ?></b></span>

		    	</p>
		    	<p id="discount">
		    		<span>Promo <i class="fa fa-angle-right"></i> (<b id="promocode"><?php echo $pcode; ?></b>)</span>
		    		<span id="promopercent"><?php echo $pdisc;?> %</span>
		    		<span><i class="fa fa-rupee"></i>  <b id="promoprice"><?php echo $totalprice*$pdisc/100; ?></b></span>
		    		
		    	</p>
		    	<p id="gst">
		    		<span>GST 5%</span>
		    		<span></span>
		    		<span><i class="fa fa-rupee"></i> <b id="gstprice"><?php echo ($totalprice -$totalprice*$pdisc/100)*0.05 ; ?></b></span>

		    	</p>
		    	<p id="grandtotal">
		    		<span>Grand Total</span>
		    		<span></span>
		    		<span><i class="fa fa-rupee"></i> &nbsp;<b class="badge badge-danger" id="grandprice"><?php echo ($totalprice -$totalprice*$pdisc/100)*0.05 + $totalprice -$totalprice*$pdisc/100; ?></b></span>

		    	</p>
		    	<button id="ordernow" onclick="ordernow()">Proceed To Pay</button>
	    	<?php
	           }else{
	           	echo "<h3 style='position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)'>Cart Empty ()</h3>";
	           }
	         }else{
	         		echo "<h3 style='position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)'>Cart Empty ()</h3>";
	         }
	    	?>
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
					<!--<a href="#">Forgot Password</a>-->
					<a href="#" style="background: #08a294;
    color: white;
    text-align: center;
    border-radius: 9px;" onclick="openAllModal('#login-collapse');closeAllModal('#register-collapse')"> + New Account</a>
				</div>
			</div>
		</div>

		<!-- registration part start here-->
         <div id="register-collapse">
			<h3 class="text-white text-center"><i class="fa fa-user-circle-o"></i> Register Here</h3>
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
					
					<button id="register">Register</button><br>
					
					<a href="#"  style="background: #08a294;
    color: white;
    text-align: center;
    border-radius: 9px;" onclick="openAllModal('#login-collapse');closeAllModal('#register-collapse')">Login</a>
				</div>
			</div>
		</div>
		<!-- registration part end here -->

	</div>
</div>

<!-- login and register modal ens here -->
<!-- customize topping modal start -->
<div class="customize_topping">
	<div class="allinfo">
		<button id="close_customize_mobile" onclick="closeAllModal('.customize_topping')"><i class="fa fa-arrow-left"></i></button>
		<button id="close_customize" onclick="closeAllModal('.customize_topping')"><i class="fa fa-close"></i></button>
		<div id="getinfo">
			
			<div id="spin" style="position:absolute;display:none;top:50%;left:50%;transform:translate(-50%,-50%)">
				<span class="spinner-border text-dark"></span>
			</div>
		</div>
	</div>
</div>
<!-- customize topping modal end her -->
<!-- discount coupons -->
<div id="coupon-modal">
	
<div id="allcoupons">
	 <button id="close-cupon-modal" onclick="closeAllModal('#coupon-modal')"><i class="fa fa-close"></i></button>
	 <div id="promotitle" class="text-center text-black font-weight-bold">Promo Code Discounts Offers <i class="fa fa-arrow-down"></i></div>
	 <table class="table">
    <thead>
      <tr class="text-center">
        <th class="text-danger font-weight-bold">PromoCode</th>
        <th class="text-danger font-weight-bold">Desc..</th>
        <th class="text-danger font-weight-bold">Apply</th>
      </tr>
    </thead>
    <tbody>
    <?php
     $promo=file_get_contents("json/promocode.json");
     $promo_arr=json_decode($promo,true);
     for ($pro=0; $pro <count($promo_arr) ; $pro++) { 
     	?>

      <tr>
        <td><?php echo $promo_arr[$pro]['promo_code']; ?></td>
        <td><?php echo $promo_arr[$pro]['promo_desc']; ?></td>
        <td><button id="apply" data-code="<?php echo $promo_arr[$pro]['promo_code']; ?>" data-percent="<?php echo $promo_arr[$pro]['promo_percent']; ?>"><i class="fa fa-certificate"></i></button></td>
      </tr>
      <?php
     }
    ?>
    </tbody>
  </table>
</div>
</div>
<!-- discount coupon end here -->
<!-- coupon applied successfully -->
<div id="couponapplied" class="toast">
	
	<h3 class="text-center text-success">Promocode Successfully Applied</h3>
</div>
<!-- coupon applied successfully end -->
<!-- spinner div start -->
<div id="loader">
	<div class="spinner-border text-warning"></div>
</div>

<!-- spinner div end eher -->
<!-- confirm orders start here-->
<div id="confirmorder-modal">
	<div id="confirmbuttons" >
		<span class="fa fa-close text-right" onclick="closeAllModal('#confirmorder-modal')"></span>
		<h3 class="text-center">Billing Address</h3>
		<?php  $details= new Customer();
                $show = $details->showDetails($_SESSION['i'],'json/customers.json');
		 ?>
		<div class="form-group">
			<input type="hidden" name="" id="restaurentid" value="<?php echo @$_GET['id']; ?>">
		  <label for="dname">Name:</label>
		  <input type="text" class="form-control" id="dname" value="<?php echo $show[0]['name'] ?>" disabled="">
		</div>
		<div class="form-group">
		  <label for="dnumber">Mobile:</label>
		  <input type="number" class="form-control" id="dnumber" value="<?php echo $show[0]['mobile']; ?>">
		</div>
		<div class="form-group">
		  <label for="demail">Email:</label>
		  <input type="email" class="form-control" id="demail" value="<?php echo $show[0]['email'] ?>">
		</div>
		
		<div class="form-group">
		  <label for="daddress">Delivery Address:</label>
		  <textarea class="form-control" rows="5" id="daddress"><?php echo $show[0]['address'] ?></textarea>
		</div>
		<div style="opacity:0;" class="custom-control custom-radio custom-control-inline">
		    <input type="radio" class="custom-control-input" id="cod" name="paymenttype" value="cod" checked="checked">
		    <label class="custom-control-label" for="cod"></label>
		</div> 
		<!--<div class="custom-control custom-radio custom-control-inline">-->
		<!--    <input type="radio" class="custom-control-input" id="online" name="paymenttype" value="online"  disabled>-->
		<!--    <label class="custom-control-label" for="online" >Pay Online</label>-->
		<!--</div><br>-->
		<button id="confirmorder" >Confirm Order</button>
	</div>
</div>
<!-- confirm orders end  -->
<!-- order success icon -->
<div id="success-icon">
      <div id="circle">
          <span></span>
          <p>Order Success</p>
      </div>
</div>

<!-- order success icon -->

<!-- footer tab for mobile -->
<div id="footer-tab">
	<ul>
		<li><a href="#"><i class="fa fa-heart"></i></a></li>
		<li><a href="#"><i class="fa fa-user"></i></a></li>
		<li id="openmycart" onclick="openMyCart()"><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
	</ul>
</div>

<!-- footer tab for mobile end -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">



var audio = new Audio('music/welcome.mp3');
$("body").on("touchend click",function(e){
audio.play();

});


$("select#filter").on('change',function(){
    var subcat=$(this).val();
    var size=$("#filtersize").val();
    if(size !='false'){
        $("div.products").fadeOut(10);
         $("div."+subcat+size).fadeIn('slow');
    }else{
        $("div.products").fadeOut(10);
        $("div."+subcat).fadeIn('slow');
    }
    
   
   
     $("select#filtersize").on('change',function(){
          var size=$(this).val();
          //alert("div."+subcat+" ."+size);
          $("div.products").fadeOut(10);
          $("div."+subcat+size).fadeIn('slow');
    
     });
   
});


// function makeotp(length) {
// 	 mobile=document.getElementById("mobile").value;

// 	if(mobile == ""){
// 		//alert("reqiured");
// 		document.getElementById("error1").innerHTML="** Mobile number required";
// 		return false;
// 	}
// 	if(isNaN(mobile)){
// 		//alert("nt number");
// 		document.getElementById("error1").innerHTML="** Number is allowed only";
// 		return false;
// 	}
// 	if(mobile.length!=10){
// 		//alert("10 digit");
// 		document.getElementById("error1").innerHTML="** 10 digit number is allowed only";	
// 	    return false;
// }


	
//    var result           = '';
//    var characters       = '0123456789';
//    var charactersLength = characters.length;
//    for ( var i = 0; i < length; i++ ) {
//       result += characters.charAt(Math.floor(Math.random() * charactersLength));
//    }
//    //return result;
// document.getElementById("error1").innerHTML="";	
//    document.getElementById("getotp").value=result;
//     var a=document.getElementById("getotp").value;
//    console.log(result);
//  document.getElementById("title").innerHTML="Please Enter OTP Number";
//  document.getElementById("otpsender").innerText="Resend";
// document.getElementById("otpsender").style.background = "orange";
// document.getElementsByClassName("bans")[0].style.display = "none";
// document.getElementsByClassName("bans")[1].style.display = "none";
//  var s=document.getElementById("mobile");
//  s.style.display="none";
//  var h=document.getElementById("mobile1");
//  h.style.display="initial";
//  var h1=document.getElementById("otpverify");
//  h1.style.display="initial";
// document.getElementById("getotp").style.display="initial";
 
 	
//  }

//   function verify(){
//   	var sentotpfield=document.getElementById("mobile1").value;
//  var sentotp=document.getElementById("getotp").value;
//  if(sentotpfield==sentotp){
//  	console.log("mobile:"+document.getElementById("mobile").value);
//  	//alert("success");
//  	document.getElementById("otpscreen").style.display = "none";
//  	document.getElementById("otpscreenmask").style.display = "none";
 	

//  }
//  else
//  	{
//  	alert("not matched");
 	
//  }
 

//   }	

  


  

  
</script>
</body>
</html>