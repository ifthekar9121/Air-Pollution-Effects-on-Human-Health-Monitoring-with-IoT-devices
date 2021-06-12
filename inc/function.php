<?php 


	function color(float $mq2, float $mq3,float $mq4,float $mq9,float $mq135){

		//echo $mq2." ".$mq3." ".$mq4." ".$mq9." ".$mq135."<br>";

		$count = 0;
		// color code define as per index level
		$good_color = '#00cc00';
		$moderate_color = '#ffff00';
		$less_unhealthy_color = '#ff9900';
		$unhealthy_color = '#ff3300';
		$very_unhealthy_color = '#cc00cc';
		$hazardous_color = '#800000';

		// var value define as per index level
		$good = 1;
		$moderate = 51;
		$less_unhealthy = 101;
		$unhealthy = 151;
		$very_unhealthy = 201;
		$hazardous = 301;

		$a='';

		if($mq2 >= $hazardous || $mq3 >= $hazardous || $mq4 >= $hazardous || $mq9 >= $hazardous || $mq135 >= $hazardous){
			$a = $hazardous_color;
		}
		else if(($mq2 > $very_unhealthy && $mq2 < $hazardous) || 
				($mq3 > $very_unhealthy && $mq3 < $hazardous) || 
				($mq4 > $very_unhealthy && $mq4 < $hazardous) || 
				($mq9 > $very_unhealthy && $mq9 < $hazardous) || 
				($mq135 > $very_unhealthy && $mq135 < $hazardous)){
	    	$a = $very_unhealthy_color;
	    }
		else if(($mq2 > $unhealthy && $mq2 < $very_unhealthy) || 
				($mq3 > $unhealthy && $mq3 < $very_unhealthy) || 
				($mq4 > $unhealthy && $mq4 < $very_unhealthy) || 
				($mq9 > $unhealthy && $mq9 < $very_unhealthy) || 
				($mq135 > $unhealthy && $mq135 < $very_unhealthy)){
	    	$a = $unhealthy_color;
	    }

	    else if(($mq2 > $less_unhealthy && $mq2 < $unhealthy) || 
	    		($mq3 > $less_unhealthy && $mq3 < $unhealthy) || 
	    		($mq4 > $less_unhealthy && $mq4 < $unhealthy) || 
	    		($mq9 > $less_unhealthy && $mq9 < $unhealthy) || 
	    		($mq135 > $less_unhealthy && $mq135 < $unhealthy)){
	    	$a = $less_unhealthy_color;
	    }
	    else if(($mq2 > $moderate && $mq2 < $less_unhealthy) || 
	    		($mq3 > $moderate && $mq3 < $less_unhealthy) || 
	    		($mq4 > $moderate && $mq4 < $less_unhealthy) || 
	    		($mq9 > $moderate && $mq9 < $less_unhealthy) || 
	    		($mq135 > $moderate && $mq135 < $less_unhealthy)){
	    	$a = $moderate_color;
	    }
	    else {
	    	$a = $good_color;
	    }

		// if($mq2 < $good && $mq3 < $good && $mq4 < $good && $mq9 < $good && $mq135 < $good){
  //   		$a = $good_color;
	 //    }
	 //    else if(($mq2 > $good && $mq2 < $moderate) || ($mq3 > $good && $mq3 < $moderate) || ($mq4 > $good && $mq4 < $moderate) || ($mq9 > $good && $mq9 < $moderate) || ($mq135 > $good && $mq135 < $moderate)){
	 //    	$a = $moderate_color;
	 //    }
	 //    else if(($mq2 > $moderate && $mq2 < $unhealthy) || ($mq3 > $moderate && $mq3 < $unhealthy) || ($mq4 > $moderate && $mq4 <= $unhealthy) || ($mq9 > $moderate && $mq9 < $unhealthy) || ($mq135 > $moderate && $mq135 < $unhealthy)){
	 //    	$a = $unhealthy_color;
	 //    }
	 //    else if(($mq2 > $unhealthy && $mq2 < $more_unhealthy) || ($mq3 > $unhealthy && $mq3 <= $more_unhealthy) || ($mq4 > $unhealthy && $mq4 < $more_unhealthy) || ($mq9 > $unhealthy && $mq9 < $more_unhealthy) || ($mq135 > $unhealthy && $mq135 < $more_unhealthy)){
	 //    	$a = $more_unhealthy_color;
	 //    }
	 //    else if(($mq2 > $more_unhealthy && $mq2 < $very_unhealthy) || ($mq3 > $more_unhealthy && $mq3 < $very_unhealthy) || ($mq4 > $more_unhealthy && $mq4 < $very_unhealthy) || ($mq9 > $more_unhealthy && $mq9 < $very_unhealthy) || ($mq135 > $more_unhealthy && $mq135 < $very_unhealthy)){
	 //    	$a = $very_unhealthy_color;
	 //    }
	 //    else if($mq2 > $very_unhealthy && $mq3 > $very_unhealthy && $mq4 > $very_unhealthy && $mq9 > $very_unhealthy && $mq135 > $very_unhealthy){
	 //    	$a = $hazardous_color;
	 //    }

	    return $a;
	}


?>