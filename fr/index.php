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
	    
	     <script type='text/javascript'>alert("Notre magasins sont fermé du 18 Juillet au 12 Août !");</script>
	<div class="doublecolumn">
	<h1>Bienvenue!</h1>
	Ce site s'adresse uniquement aux négociants de matériaux de constructon et carrelages.<br/>
	Nous ne vendons pas à des entrepreneurs ou particuliers.<br/>
	<br/>
	Si vous êtes intéressé, n'hésitez pas à nous contacter!<br/>
	Nous vous enverrons notre représentant dans les meilleurs délais.<br/>
	<br/>
	<a href="a_aankoopvoorwaarden.php">Clicquez ici pour les conditions d'achat.</a><br/>
	<br/>

	Meilleures salutations,<br/>
	All Tiles Import<br/>
	<br/>
	Pitantiestraat 90<br/>
	8792 Desselgem, Belgium<br/>
	E-mail: <a href="mailto:contact@alltilesimport.com">contact@alltilesimport.com</a><br/>

	Nr. Xavier: 0475/27.37.17<br/>
	Fax: 056/29.32.12<br/>
	BTW BE 0823 603 046<br/>
	<br/>
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