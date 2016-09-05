<?php 
session_start();
$errmsg = "";

$_SESSION["toegang"] = 0;

if(isset($_POST["wachtwoord"]) && $_POST["wachtwoord"] != ""
 && isset($_POST["email"]) && $_POST["email"] != "")
{
	$email = $_POST["email"];
	$pass = $_POST["wachtwoord"];
	$con = mysqli_connect("alltilesimport.com.mysql", "alltilesimport_", "FeuMdzkh", "alltilesimport_");

	$errmsg = "";

	if ($con->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	    $errmsg = "Connection failed: " . $conn->connect_error;
	} 

	$q = "SELECT COUNT(*) AS total FROM login WHERE email='"
	 . $email . "' AND password='" . md5($pass) . "'";

	$result = mysqli_query($con, $q); 
	$row = mysqli_fetch_assoc($result);

	$_SESSION["toegang"] = $row['total'];

	if(!$_SESSION["toegang"]) {
		$errmsg = "Onjuiste combinatie van gebruikersnaam en wachtwoord";
	}
	else {
		// Get login count for this user
		$q = "SELECT logincount FROM login WHERE email='" .$email. "'";
		$result = mysqli_query($con, $q);
		$row = mysqli_fetch_assoc($result);
		
		$logincount = $row['logincount'];

		// Now update the count
		$logincount++;

		$q = "UPDATE login SET logincount=" . $logincount . " WHERE email='". $email . "'";
		if ($con->query($q) === TRUE) {
		    //echo "Record updated successfully";
		} else {
		   // echo "Error updating record: " . $conn->error;
		}

	}
	

} 
else $errmsg = "Gelieve alle velden in te vullen";
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
		<?php include('includes/head.php'); ?>
		<meta name="robots" content="noindex">
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
		<?php $page='0'; include('includes/menu.php'); ?>
		
	<div id="main">
		<div class="fullwidth" style="margin-top:20px;">
			<?php if($_SESSION["toegang"]){
			echo 'U bent ingelogd. Hieronder vindt u onze prijslijsten.<br/><br/>

			<iframe src="https://docs.google.com/spreadsheets/d/1_kmnN_lrdM553vP2NnRLuT_EfF2YsSswpWq8l7rLgZM/pubhtml?widget=true&amp;headers=false" width="620" height="1500"></iframe>
			
			';
			}
			else echo '<span style="color:red">Error: ' . htmlentities($errmsg) . '</span>
			<br/><br/><a href="login.php">Terug naar Login-pagina</a><br/><br/>';
			
			
			?>

			<br/><br/><br/><br/>
		</div>		
		
	<?php include('includes/bottombar.php');	?>		
	</div> <!-- main -->

		
		</div> <!-- container -->

		

		
    </body>
</html>