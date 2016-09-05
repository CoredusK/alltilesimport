<?php 
session_start();

$code = isset($_POST["code"]) ? $_POST["code"] : '';
$email = isset($_POST["regmail"]) ? $_POST["regmail"] : '';
$pass = isset($_POST["regpw"]) ? $_POST["regpw"] : '';

$codeok = false;
if($code == 'alain705') $codeok = true;

$errmsg = "";
$errmsgcolor = "red";

if(isset($_POST["regmail"]) && $_POST["regmail"] != ""
&& isset($_POST["regpw"]) && $_POST["regpw"] != "" && $codeok) {
	$email = $_POST["regmail"];
	$pass = $_POST["regpw"];
	$con = mysqli_connect("alltilesimport.com.mysql", "alltilesimport_", "FeuMdzkh", "alltilesimport_");

	if ($con->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	    $errmsg = "Connection failed: " . $conn->connect_error;
	} 


	// First check if entry already exists
	$q = "SELECT * FROM login WHERE email='" .$email. "'";
	$result = mysqli_query($con, $q);

	$row = mysqli_fetch_assoc($result);
	$row = "{$row['email']}";

	$exists = ($row != '');

	// Insert entry to table
	if(!$exists) {
		$q = "INSERT INTO login (email, password) VALUES('" . $email . "', '" . md5($pass) . "')";

		if ($con->query($q) === TRUE) {
			mail("contact@alltilesimport.com", "Registratie " . $email, 
				$email . " heeft een login aangemaakt op de website op " 
				. date("d-m-Y H:i:s"));

		    $errmsg = "Registratie succesvol! U kan vanaf nu inloggen met uw account " . $email;
		    $errmsgcolor = "#78AF2C";
		} else {
		    $errmsg =  "Error: " . $sql . "<br>" . $conn->error;
		}

	}
	else $errmsg = "Gebruikersnaam reeds in gebruik, kies een andere";
}

if(isset($_POST["btn"]) && ($_POST["regmail"] == '' || $_POST["regpw"] == '')) 
	$errmsg = "Gelieve alle velden in te vullen";

if(!$codeok && isset($_POST["btn"])) $errmsg = "Onjuiste code";

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

			<h1>Registreer</h1>
			<p>Hier kan u uw persoonlijke account registreren.</p>
			<br/>
			<?php if($errmsgcolor=="#78AF2C") echo "<a href='login.php'>Terug naar login</a><br/><br/>"; ?>

			<form method="post" action="register.php" name="registerform">
			Email:<br/> <em>Vul hier uw persoonlijk e-mailadres in</em><br/><input type="email" name="regmail" tabindex="1" value="<?php echo htmlentities($email); ?>"><br/><br/>
			Wachtwoord:<br/> <em>Vul hier uw zelf gekozen wachtwoord in</em><br/><input type="password" name="regpw" tabindex="2" value="<?php echo htmlentities($pass); ?>"><br/><br/>
			Code:<br/> <em>Gebruik uw oude code handelaar</em><br/><input type="password" name="code" tabindex="3" value="<?php echo htmlentities($code); ?>"><br/>
			

			<br/><br/>
			<input type="submit" name="btn" value="Registreer"><br/><br/><br/>

			<span style="color:<?php echo htmlentities($errmsgcolor); ?>">
			<?php echo htmlentities($errmsg); ?></span>
			<br/>
			<a href="login.php">Terug naar Login</a>
			<br/><br/>
			

			</form>


			<br/>
		</div>		

		

	<?php include('includes/bottombar.php');	?>		

	</div> <!-- main -->


	</div> <!-- main -->

		</div> <!-- container -->

    </body>

</html>