<?php
if (isset($_POST['pid'])){
	include_once('classes/products.php');
	$new = new Products();

	$top = $new->checkTopping($_POST['pid'],'json/products.json','json/toppings.json');
	$pro = $new->showProductDetails($_POST['pid'],'json/products.json');
	?>
<h3 id="product_name" class="text-primary"><?php echo $pro[0]['item_name']; ?></h3>
			<b class="text-success">Rs.<span id="p_price"><?php echo $pro[0]['cost']; ?></span></b>
			<p id="default_top"><?php echo $pro[0]['toppings']; ?></p>
			<div id="pro_addontopping">
				<?php
                 for ($i=0; $i <count($top) ; $i++) { 
                 	?>
                  <div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input top-check" id="<?php echo $top[$i]['t_id']; ?>" data-id="<?php echo $top[$i]['t_id']; ?>" data-price="<?php echo $top[$i]['t_cost']; ?>" name="topping1">
				    <label class="custom-control-label badge badge-light" for="<?php echo $top[$i]['t_id']; ?>"><?php echo $top[$i]['t_name']; ?></label>
				    <span id="tprice">Rs. <?php echo $top[$i]['t_cost']; ?></span>
				</div>
                 <?php
                 }
				?>
				
				
				
			</div>
			<p id="total">Total Rs.<span id="totalcost"><?php echo $pro[0]['cost']; ?></span></p>
			<div id="update_btn">
				<button id="updatecart">Update Cart</button>
			</div>
<?php
}

?>