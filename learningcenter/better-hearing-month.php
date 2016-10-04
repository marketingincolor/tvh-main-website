<?php 
	$hearing_aid_101 = array(
			array("ClassLocation" => "Belleview", 		"ClassTime" => "2015-05-07 13:00"),
			array("ClassLocation" => "Santa Barbara", 	"ClassTime" => "2015-05-13 13:00"),
			array("ClassLocation" => "Colony", 			"ClassTime" => "2015-05-15 13:00"),
			array("ClassLocation" => "Pinellas", 		"ClassTime" => "2015-05-18 13:00"),
			array("ClassLocation" => "Creekside", 		"ClassTime" => "2015-05-26 13:00"),
			array("ClassLocation" => "Mulberry Grove", 	"ClassTime" => "2015-05-26 13:00")
		);
	$speech = array(
			array("ClassLocation" => "Colony", 			"ClassTime" => "2015-05-08 12:00"),
			array("ClassLocation" => "Creekside", 		"ClassTime" => "2015-05-15 12:00"),
			array("ClassLocation" => "Mulberry Grove", 	"ClassTime" => "2015-05-22 12:00")
		);
	$hearing_loss = array(
			array("ClassLocation" => "Belleview", 		"ClassTime" => "2015-05-07 14:00"),		
			array("ClassLocation" => "Santa Barbara", 	"ClassTime" => "2015-05-13 14:00"),		
			array("ClassLocation" => "Colony", 			"ClassTime" => "2015-05-15 14:00"),		
			array("ClassLocation" => "Pinellas", 		"ClassTime" => "2015-05-18 14:00"),		
			array("ClassLocation" => "Creekside", 		"ClassTime" => "2015-05-26 14:00"),		
			array("ClassLocation" => "Mulberry Grove", 	"ClassTime" => "2015-05-26 14:00"),		
		);
	$home_safety = array(
			array("ClassLocation" => "Pinellas", 		"ClassTime" => "2015-05-19 09:00"),		
			array("ClassLocation" => "Santa Barbara", 	"ClassTime" => "2015-05-21 09:00"),		
		);
?>
<div id="better-hearing-month-div" class="section-content">

  	  	<img src="images/better-hearing-month.jpg">
	  	<div id="better-hearing-month-col1">
	  		<b>Hearing Aid 101 presentations</b>
	  		<?php
	  			for ($i=0; $i<count($hearing_aid_101); $i++) {
  					?>
	  				<li>
	  					<a href="learning-center.php?this_location=<?php echo $hearing_aid_101[$i]["ClassLocation"]; ?>&this_class=Hearing%20Aids%20101&start_date=<?php echo date("F%20j", strtotime($hearing_aid_101[$i]["ClassTime"])); ?>&start_time=<?php echo date("g%20a", strtotime($hearing_aid_101[$i]["ClassTime"])); ?>"
	  						onclick="window.open(this.href,  null, 'height=440, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><?php echo $hearing_aid_101[$i]["ClassLocation"] . ": " . date("D, F jS @ g:i A", strtotime($hearing_aid_101[$i]["ClassTime"])); ?></a>	
	  				</li>
	  				<?php
	  			}
	  		?>
		  	<br>
		  	<b>Speech Therapy presentations</b>
		  	<?php
	  			for ($i=0; $i<count($speech); $i++) {
  					?>
	  				<li>
	  					<a href="learning-center.php?this_location=<?php echo $speech[$i]["ClassLocation"]; ?>&this_class=Speech%20Therapy&start_date=<?php echo date("F%20j", strtotime($speech[$i]["ClassTime"])); ?>&start_time=<?php echo date("g%20a", strtotime($speech[$i]["ClassTime"])); ?>"
	  						onclick="window.open(this.href,  null, 'height=440, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><?php echo $speech[$i]["ClassLocation"] . ": " . date("D, F jS @ g:i A", strtotime($speech[$i]["ClassTime"])); ?></a>	
	  				</li>
	  				<?php
	  			}
	  		?>
		  	
	  	</div>
	  	<div id="better-hearing-month-col2">
		  	<b>Hearing Loss Prevention presentations</b>
		  	<?php
	  			for ($i=0; $i<count($hearing_loss); $i++) {
  					?>
	  				<li>
	  					<a href="learning-center.php?this_location=<?php echo $hearing_loss[$i]["ClassLocation"]; ?>&this_class=Hearing%20Loss%20Prevention&start_date=<?php echo date("F%20j", strtotime($hearing_loss[$i]["ClassTime"])); ?>&start_time=<?php echo date("g%20a", strtotime($hearing_loss[$i]["ClassTime"])); ?>"
	  						onclick="window.open(this.href,  null, 'height=440, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><?php echo $hearing_loss[$i]["ClassLocation"] . ": " . date("D, F jS @ g:i A", strtotime($hearing_loss[$i]["ClassTime"])); ?></a>	
	  				</li>
	  				<?php
	  			}
	  		?><br>
	  		<b>Home Safety exhibit with The Villages Public Safety</b>
	  		<?php
	  			for ($i=0; $i<count($home_safety); $i++) {
  					?>
	  				<li>
	  					<a href="learning-center.php?this_location=<?php echo $home_safety[$i]["ClassLocation"]; ?>&this_class=Home%20Safety%20exhibit&start_date=<?php echo date("F%20j", strtotime($home_safety[$i]["ClassTime"])); ?>&start_time=<?php echo date("g%20a", strtotime($home_safety[$i]["ClassTime"])); ?>"
	  						onclick="window.open(this.href,  null, 'height=440, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><?php echo $home_safety[$i]["ClassLocation"] . ": " . date("D, F jS @ g:i A", strtotime($home_safety[$i]["ClassTime"])); ?></a>	
	  				</li>
	  				<?php
	  			}
	  		?>
	  	</div>
</div>
<div id="better-hearing-month-spacer"></div>
