<?php
		$engaged = 0;
		if(isset($_POST["l"])) $l = $_POST["l"];
		if(isset($_POST["b"])) $b = $_POST["b"];
		if(isset($_POST["vb"])) $vb = $_POST["vb"];
		if(isset($_POST["vd"])) $vd = $_POST["vd"];
		if(isset($_POST["go"]) && $_POST["go"] != "")
			$engaged = 1;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
		<?php include('includes/head.php'); ?>
    </head>
    <body>
        <ul class="cb-slideshow">
            <li><span></span><div><small>Carius</small></div></li>
            <li><span></span><div><small>Chandra Yellow</small></div></li>
            <li><span></span><div><small>Chandra Yellow</small></div></li>
            <li><span></span><div><small>Chandra Blue</small></div></li>
            <li><span></span><div><small>Gothiek</small></div></li>
            <li><span></span><div><small>Varishna</small></div></li>
        </ul>
		<div class="container">
		<?php $page='lijm'; include('includes/menu.php'); ?>
		
	<div id="main">
		<div class="fullwidth">
			<h1>ATI Joint Mortar</h1>
			<small>Click photo to enlarge</small>
			<a href="images/voeg_lijm/ati_voeg_nl.jpg" target="_blank">
				<img src="images/voeg_lijm/ati_voeg_nl.jpg" class="bigimg" /></a><br/>
			
			<a href="images/voeg_lijm/verbruikstabel.jpg" name="verbruik" target="_blank">
				<img src="images/voeg_lijm/verbruikstabel.jpg"/></a>
						
			<br/><br/>
			<h1>Consumption Calculator ATI Joint Mortar</h1>
			<small>Please enter all values in centimeters (CM).</small></br></br>
			<table>
			<form action="lijmkit_voegmortel.php#verbruik" method="POST">
			<tr><td>
			Dimensions:</td>
			<?php if(!$engaged){ $l=14; $b=14; $vb=0.8; $vd=3; } ?>
			<td><input type="text" name="b" value="<?php echo $b; ?>" size="1"> x <input type="text" name="l" value="<?php echo $l; ?>" size="1">
			</td></tr>
			<tr><td>
			Joint width:</td>
			<td><input type="text" value="<?php echo $vb; ?>" name="vb" size="1">
			</td></tr>
			<tr><td>
			Joint depth:</td>
			<td><input type="text" value="<?php echo $vd; ?>" name="vd" size="1">
			</td></tr>
			<tr>
			<td colspan="2">
			<input type="submit" value="Calculate" name="go" >
			</td>
			<td></td>
			</tr>
			<tr>
			<td colspan="2"><br/><br/>
			<?php

			if($engaged){
				if(is_numeric($l) && is_numeric($b) && is_numeric($vb) && is_numeric($vd)){
					$result = ((100/($b+0.8))+(100/($l+0.8)))*((100*$vb*$vd)*1.35)/1000;
					echo '<font size="4"><b>Consumption: ' . round($result,2) . ' kg/m²</b></font>';
				}
				else echo '<font color="red"><b>Error! Numbers only please</b></font>';
	
			}

			?>
			</td></tr>
			</form></table>	
			<br/><br/>			
			
			
			<a href="assets/download/ati_voegmortel.pdf" target="_blank">
				Click here to download the manual (dutch)</a><br/><br/>
		</div>	<div></div><div></div>
		
		<div class="maindiv">
		<a href="images/voeg_lijm/voeg_1.jpg"><img src="images/voeg_lijm/voeg_1.jpg" /></a>
		</div>	
		
		<div class="maindiv">
		<a href="images/voeg_lijm/voeg_2.jpg"><img src="images/voeg_lijm/voeg_2.jpg" /></a>
		</div>	
		
		<div class="maindiv">
		<a href="images/voeg_lijm/voeg_3.jpg"><img src="images/voeg_lijm/voeg_3.jpg" /></a>
		</div>	
		
		<div class="fullwidth">
			<h1>ATI Glue kit</h1>
			<img src="images/voeg_lijm/lijmkit.jpg" class="alt" /><br/><br/>
			<a href="assets/download/ati_lijmkit.pdf" target="_blank">Click here to download our PDF (dutch)</a><br/><br/><br/><br/>
		</div>
		
	<?php include('includes/bottombar.php');	?>	
	</div> <!-- main -->

		
		</div> <!-- container -->

		

		
    </body>
</html>