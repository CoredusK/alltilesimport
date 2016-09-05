<a href="index.php"><div id="logo"><img src="assets/topleft_logo.gif" /></div></a>
	<div id="menu">
		<a href="login.php"><div class="login buttong">Log in Handelaar</div></a><br/>

		<div class="languageselection"><small><a href="../nl/index.php?ln=nl">NL</a>
			- <a href="../fr/index.php?ln=fr">FR</a>
			- <a href="../en/index.php?ln=en">EN</a></small></a>	
		</div>
		<p class="menutitle">Standaard gamma's</p>
		<a href="viet.php"><div class="buttonb<?php if($page=='viet') echo 'sel';?>">Standaard Gamma Vietnamees</div></a>
		<a href="chin.php"><div class="buttonb<?php if($page=='chin') echo 'sel';?>">Standaard Gamma Chinees</div></a>
		<div class="space"></div>
		<p class="menutitle">Specialiteiten</p>
		<a href="carius.php"><div class="buttong<?php if($page=='carius') echo 'sel';?>">Carius</div></a>
		<a href="chandra.php"><div class="buttong<?php if($page=='chandra') echo 'sel';?>">Chandra</div></a>
		<a href="aruna.php"><div class="buttong<?php if($page=='aruna') echo 'sel';?>">Aruna</div></a>
		<a href="jalasa.php"><div class="buttong<?php if($page=='jalasa') echo 'sel';?>">Jalassa</div></a>
		<a href="daya.php"><div class="buttong<?php if($page=='daya') echo 'sel';?>">Daya</div></a>
		<a href="darshana.php"><div class="buttong<?php if($page=='darshana') echo 'sel';?>">Darshana</div></a>
		<a href="candela.php"><div class="buttong<?php if($page=='candela') echo 'sel';?>">Candela</div></a>
		<a href="palisaden.php"><div class="buttong<?php if($page=='palisaden') echo 'sel';?>">Traptreden, Borduren & Palisaden</div></a>
		<div class="buttonsubdiv">
			<a href="palisaden.php#viet"><div class="buttonsub">Vietnamees</div></a>
			<a href="palisaden.php#chin"><div class="buttonsub">Chinees</div></a>
			<a href="palisaden.php#ind"><div class="buttonsub">Indisch</div></a>
		</div>
		<?php /* if($page=='palisaden'){
		echo'<a href="palisaden.php"><div class="buttongsel">Traptreden, Borduren & Palisaden</div></a>
		<div class="buttonsubdiv">
			<a href="#viet"><div class="buttonsub">Vietnamees</div></a>
			<a href="#chin"><div class="buttonsub">Chinees</div></a>
			<a href="#ind"><div class="buttonsub">Indisch</div></a>
			<a href="#be"><div class="buttonsub">Oud Belgisch</div></a>
		</div>
		<a href="andere_specialiteiten.php"><div class="buttono" style="margin-top:120px;">Andere Specialiteiten</div></a>';
		}
		else {
			echo '<a href="palisaden.php"><div class="buttong">Traptreden, Borduren & Palisaden</div></a>
			<div class="space"></div>
			<a href="andere_specialiteiten.php"><div class="buttono'; 	if($page=='andere') echo 'sel'; echo '">Andere Specialiteiten</div></a>';
		}*/?>

		<p class="menutitle">Ook in ons aanbod</p>

		<a href="sierkeien.php"><div class="buttono<?php if($page=='sierkeien') echo 'sel';?>">Sierkeien & Siergrind</div></a>
		<a href="schanskorven.php"><div class="buttono<?php if($page=='schanskorven') echo 'sel';?>">Schanskorven</div></a>
		<a href="mozaieken.php"><div class="buttono<?php if($page=='mozaieken') echo 'sel';?>">Mozaieken</div></a>
		<a href="zwembadboorden.php"><div class="buttono<?php if($page=='zwembadboorden') echo 'sel';?>">Zwembadboorden</div></a>
		<a href="lijmkit_voegmortel.php"><div class="buttono<?php if($page=='lijm') echo 'sel';?>">ATI Lijmkit - ATI Voegmortel</div></a>
		<div class="space"></div>
		<a href="fotoalbum/index.php"><div class="buttonbigalt"></div></a>
		<a href="assets/download/catalog.pdf" target="_blank"><div class="buttonbig">Catalogus</div></a>
		<a href="contact.php"><div class="buttonbig">Contacteer ons</div></a>
		<div class="clr"></div>
	</div>