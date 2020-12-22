<?php
if (isset($_POST['id'])) {
	 $_POST['id'];

  $data= file_get_contents("restaurent.json");
  $arr = json_decode($data,true);
  for ($i=0; $i <count($arr) ; $i++) { 
     if ($arr[$i]['id'] == $_POST['id'])
     {
        $arr[$i]['city']=$_POST['city'];
        $arr[$i]['location']=$_POST['rlocation'];
        $arr[$i]['email']=$_POST['email'];
        $arr[$i]['mobile']=$_POST['mobile'];
        $arr[$i]['map_lat']=$_POST['lat'];
        $arr[$i]['map_long']=$_POST['long'];
        $arr[$i]['address']=$_POST['address'];
        $arr[$i]['areas']=$_POST['area'];
        $arr[$i]['distance']=$_POST['distance'];
       
        break;
     }

    }

    file_put_contents("restaurent.json", json_encode($arr));
    echo "Successfully save your location";
}
?>
 