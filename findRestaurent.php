<?php
$data=file_get_contents("restaurent.json");
$arr=json_decode($data,true);

$lat=$_POST['lat'];
$long=$_POST['long'];


function distance($lat1, $lon1, $lat2, $lon2, $unit) {
	  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
	    return 0;
	  }
	  else {
	    $theta = $lon1 - $lon2;
	    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
	    $dist = acos($dist);
	    $dist = rad2deg($dist);
	    $miles = $dist * 60 * 1.1515;
	    $unit = strtoupper($unit);

	    if ($unit == "K") {
	      return ($miles * 1.609344);
	    } else if ($unit == "N") {
	      return ($miles * 0.8684);
	    } else {
	      return $miles;
	    }
	  }
	}

$dist_arr=[];
for ($i=0; $i <count($arr) ; $i++) { 
	if ($arr[$i]['map_lat'] !="" && $arr[$i]['map_long'] !="") {
		$getdist=distance( $arr[$i]['map_lat'], $arr[$i]['map_long'],$lat, $long, "K");
     array_push($dist_arr, array('distance'=>$getdist,'id'=>$arr[$i]['id'],'location'=>$arr[$i]['location'],'address'=>$arr[$i]['address']));
	}
     
}

asort($dist_arr);
echo '<ul class="list-group">';
foreach ($dist_arr as $key => $value) {
	
	echo '<li class="list-group-item" data-id="'.$value["id"].'">'.$value["location"].' <span class="badge">'.intval($value["distance"]).' KM</span></li>';
}
echo '</ul>';


?>