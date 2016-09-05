<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->

<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->

<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->

<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->

<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

    <head>

		<?php include('includes/head.php'); ?>

    </head>

    <body OnLoad="document.deform.wachtwoord.focus();">

        <ul class="cb-slideshow">

            <li><span></span><div><small>Carius</small></div></li>

            <li><span></span><div><small>Chandra Yellow</small></div></li>

            <li><span></span><div><small>Chandra Yellow</small></div></li>

            <li><span></span><div><small>Chandra Blue</small></div></li>

            <li><span></span><div><small>Gothiek</small></div></li>

            <li><span></span><div><small>Varishna</small></div></li>

        </ul>

		<div class="container">

		<?php $page='0'; include('includes/menu.php'); ?>

		

	<div id="main">

		<div class="doublecolumn" style="margin-top:20px;">
			<h1>Mededeling</h1>
			<p>Beste klanten, ons loginsysteem is gewijzigd.</p>
			<p>U kan nu uw persoonlijke account registreren en dan daarmee inloggen.</p>
			<br/>
			<p>Om een nieuwe account te registreren, <a href="register.php">ga naar de registratiepagina</a>.</p>
			<p>Indien u reeds een account heeft aangemaakt, kan u hieronder inloggen.</p>
			<br/><br/>
			<h1>Log in</h1>

			<form method="post" action="download.php" name="deform">
			Email:<br/><br/><input type="email" name="email" tabindex="1"><br/><br/>
			Wachtwoord:<br/><br/><input type="password" name="wachtwoord" tabindex="2"><br/><br/>

			<input type="submit" name="btn" value="Log in"><br/>
			<br/><br/>
			<p>Nog geen login? <a href="register.php">Registreer</a></p>
			<br/><br/>
			</form>



			<br/>
		</div>		

		

	<?php include('includes/bottombar.php');	?>		

	</div> <!-- main -->



		

		</div> <!-- container -->



		



		

    </body>

</html>