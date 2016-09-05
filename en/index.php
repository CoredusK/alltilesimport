<?php
	$ln = $_GET["ln"];
	setcookie("lang", $ln, time()+60*60*24*30, "/");
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
		<?php $page='home'; include('includes/menu.php'); ?>
		
	<div id="main">
	     
	<div class="doublecolumn">
	    
	    
	<h1>Welcome!</h1>
	Welcome to the website of AllTilesImport!<br/>
	<br/>
	<i>Are you looking for something just a little different? Then you're at the right place here, for exclusive nature stone!</i><br/>
	<br/>
	AllTilesImport is a wholesale in nature stone. We direct us solely to the salesmen in building materials and/or tiles.<br/>
	Therefor having a showroom at disposal is essential.<br/>
	<br/>
	In 2011, we expanded to a storage facility of 34000m²!<br/>
	<br/>
	<a href="a_aankoopvoorwaarden.php">For our purchase conditions, click here.</a><br/>
	<br/>
	You are always free to contact us for more information!<br/>
	<br/>
	With kind regards,<br/>
	All Tiles Import<br/>
	<br/>
	Pitantiestraat 90<br/>
	8792 Desselgem, Belgium<br/>
	E-mail: <a href="mailto:contact@alltilesimport.com">contact@alltilesimport.com</a><br/>
	Nr. Xavier: 0475/27.37.17<br/>
	Fax: 056/29.32.12<br/>
	BTW BE 0823 603 046<br/>
	<br/><br/><br/>
	
	</div>
	<div class="thirdcolumn">
	<a href="images/varia/viet_getrommeld.jpg"><img src="images/varia/viet_getrommeld.jpg"/></a><br/>
	<a href="images/varia/chandra_blue.jpg"><img src="images/varia/chandra_blue.jpg"/></a><br/>
	<a href="images/varia/gothiek_romeins_verband.jpg"><img src="images/varia/gothiek_romeins_verband.jpg"/></a><br/></div>
	
	
	<div class="space"></div>
	
	<?php include('includes/bottombar.php');	?>
		
	</div> <!-- main -->

	
		</div><!-- container -->
    </body>
</html>