<?php
	$ln = isset($_GET["ln"]) ? $_GET["ln"] : '';
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
        <div></div>

		<div class="container">

		<?php $page='home'; include('includes/menu.php'); ?>

		<link rel="stylesheet" type="text/css" href="bower_components/jquery-toast-plugin/dist/jquery.toast.min.css"/>

	<div id="main">
	<div class="doublecolumn">
		
	<img src="images/varia/hoofd.jpg" style="width:600px; margin-left:20px;" />	

	<br/>
    	
	Welkom op de website van <span class="green">AllTilesImport</span>!<br/>

	<br/>
	<div class="kaderke"><i>Bent u op zoek naar dat net ietsje anders? Dan is dit het juiste adres voor exclusieve natuursteen!</i></div>
	<br/>
	<br/>
	All Tiles Import is een groothandel in natuursteen.<br/>
	Wij richten ons enkel tot de handelaar in bouwmaterialen en/of tegels.<br/>
	Over een toonzaal beschikken is daarom een absolute must.<br/>
	<br/>
    AS-Tegel heeft in het jaar 2010 All Tiles Import opgericht, voor uitsluitende verkoop naar handelaars in bouwmaterialen. 
	Wij zijn in 2011 uitgebreid naar een opslagruimte van 34000m2! <br/>
	<br/>
	<a href="a_aankoopvoorwaarden.php">Klik hier voor onze aankoopvoorwaarden.</a><br/>
	Neem vrijblijvend contact met ons op indien u meer info wenst. <br/>
	</br>
	
	
	<br/>
	Vriendelijke groeten,<br/>
	All Tiles Import<br/>
	<br/>
	Pitantiestraat 90<br/>
	8792 Desselgem, Belgium<br/>
	E-mail: <a href="mailto:contact@alltilesimport.com">contact@alltilesimport.com</a><br/>
	Nr. Xavier: 0475/27.37.17<br/>
	Fax: 056/29.32.12<br/>
	BTW BE 0823 603 046<br/>
	<br/>


	<br/>
	<h1>Onze site</h1>
	U kan steeds navigeren naar de producten die u wenst te zien in de <span class="green">linker kolom</span>.<br/><br/>
		U kan ook steeds een kijkje nemen in ons <span class="green">foto-album</span>! Dit vindt u onderaan de linker kolom.<br/><br/>
	Onderaan elke pagina vindt u ook enkele handige links!<br/><br/><br/>
	</div>
	<div class="thirdcolumn" style="margin-top:300px;">
	<a href="images/varia/viet_getrommeld.jpg"><img src="images/varia/viet_getrommeld.jpg"/></a><br/>
	<a href="images/varia/chandra_blue.jpg"><img src="images/varia/chandra_blue.jpg"/></a><br/>
	<a href="images/varia/gothiek_romeins_verband.jpg"><img src="images/varia/gothiek_romeins_verband.jpg"/></a><br/></div>
	
	
	<div class="space"></div>
	
	<?php include('includes/bottombar.php');	?>
		
	</div> <!-- main -->

	
		</div><!-- container -->

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<!-- <script src="bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script> -->

	<!-- <script src="js/scripts.js"></script> -->
    </body>
</html>