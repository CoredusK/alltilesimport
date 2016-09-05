<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
		<title>All Tiles Import</title>
		<meta property="og:title" content="All Tiles Import"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://www.alltilesimport.com"/>
		<meta property="og:image" content="assets/logo.gif"/>
		<meta property="og:site_name" content="All Tiles Import"/>
		<meta property="og:description"  content="All Tiles Import - Import van Natuursteen">
		<meta name="keywords" content="all, tiles, import, alltilesimport, tegels, natuursteen, carius, chandra, palisaden, borduren, blauwsteen, belgie" />
		<meta name="robots" content="all" />
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<link rel="image_src" href="assets/favicon.gif"/>
		<link rel="icon" type="image/gif" href="assets/favicon.gif" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

		<link rel="stylesheet" type="text/css" href="css/print.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
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
		<script>
		function myFunction()
		{
		alert("Gelieve even geduld te hebben terwijl de pagina laadt. Druk deze pagina af.");
		}
		</script>

		<?php foreach (glob("*.php") as $filename)
			{
				include $filename;
			}	
		?>

		

		
		</div> <!-- container -->

		

		
    </body>
</html>