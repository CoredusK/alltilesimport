<a href="index.php"><div id="logo"><img src="assets/topleft_logo.gif" /></div></a>
	<div id="menu"><a href="login.php"><img src="assets/button_login.jpg"/></a><br/>
		<a href="index.php"><div class="buttong<?php if($page=='home') echo 'sel';?>">Home 
			<small>- <a href="../nl/index.php?ln=nl">NL</a> - <a href="../fr/index.php?ln=fr">FR</a>
			- <a href="../en/index.php?ln=en">EN</a></small> </div></a>
		<div class="space"></div>
		<a href="viet.php"><div class="buttonb<?php if($page=='viet') echo 'sel';?>">Produits de Vietnam</div></a>
		<a href="chin.php"><div class="buttonb<?php if($page=='chin') echo 'sel';?>">Produits de Chine</div></a>
		<div class="space"></div>
		<a href="carius.php"><div class="buttong<?php if($page=='carius') echo 'sel';?>">Carius</div></a>
		<a href="chandra.php"><div class="buttong<?php if($page=='chandra') echo 'sel';?>">Chandra</div></a>
		<a href="aruna.php"><div class="buttong<?php if($page=='aruna') echo 'sel';?>">Aruna</div></a>
		<a href="jalasa.php"><div class="buttong<?php if($page=='jalasa') echo 'sel';?>">Jalassa</div></a>
		<a href="janisa.php"><div class="buttong<?php if($page=='janisa') echo 'sel';?>">Janisa</div></a>
		<a href="daya.php"><div class="buttong<?php if($page=='daya') echo 'sel';?>">Daya</div></a>
		<a href="goldstone.php"><div class="buttong<?php if($page=='goldstone') echo 'sel';?>">Goldstone</div></a>
		<a href="darshana.php"><div class="buttong<?php if($page=='darshana') echo 'sel';?>">Darshana</div></a>
		<a href="candela.php"><div class="buttong<?php if($page=='candela') echo 'sel';?>">Candela</div></a>
		<a href="cremar.php"><div class="buttong<?php if($page=='cremar') echo 'sel';?>">Cremar</div></a>
		<?php if($page=='palisaden'){
		echo'<a href="palisaden.php"><div class="buttongsel">Bordures & Palissades</div></a>
		<div class="buttonsubdiv">
			<a href="#viet"><div class="buttonsub">Vietnamien</div></a>
			<a href="#chin"><div class="buttonsub">Chinois</div></a>
			<a href="#ind"><div class="buttonsub">Inde</div></a>
			<a href="#be"><div class="buttonsub">Ancienne Belgique</div></a>
		</div>
		<a href="andere_specialiteiten.php"><div class="buttono" style="margin-top:120px;">Des Autres Spécialités</div></a>';
		}
		else {
			echo '<a href="palisaden.php"><div class="buttong">Bordures & Palissades</div></a>
			<div class="space"></div>
			<a href="andere_specialiteiten.php"><div class="buttono';
			if($page=='andere') echo 'sel'; echo '">Des Autres Spécialités</div></a>';
		}?>
		
		<a href="sierkeien.php"><div class="buttono<?php if($page=='sierkeien') echo 'sel';?>">Cailloux</div></a>
		<a href="schanskorven.php"><div class="buttono<?php if($page=='schanskorven') echo 'sel';?>">Gabions</div></a>
		<a href="mozaieken.php"><div class="buttono<?php if($page=='mozaieken') echo 'sel';?>">Mosaïque</div></a>
		<a href="zwembadboorden.php"><div class="buttono<?php if($page=='zwembadboorden') echo 'sel';?>">Bordures de piscine</div></a>
		<a href="lijmkit_voegmortel.php"><div class="buttono<?php if($page=='lijm') echo 'sel';?>">ATI Silicone - Mortier de jointoyage</div></a>
		<div class="space"></div>
		<a href="fotoalbum/index.php"><div class="buttonbigalt"></div></a>
		<a href="assets/download/catalog.pdf" target="_blank"><div class="buttonbig">Catalogue</div></a>
		<a href="contact.php"><div class="buttonbig">Contactez-nous</div></a>
		<div class="clr"></div>
	</div>