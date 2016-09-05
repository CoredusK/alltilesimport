<a href="index.php"><div id="logo"><img src="assets/topleft_logo.gif" /></div></a>
	<div id="menu"><a href="login.php"><img src="assets/button_login.jpg"/></a><br/>
		<a href="index.php"><div class="buttong<?php if($page=='home') echo 'sel';?>">Home 
			<small>- <a href="../nl/index.php?ln=nl">NL</a> - <a href="../fr/index.php?ln=fr">FR</a>
			- <a href="../en/index.php?ln=en">EN</a></small> </div></a>
		<div class="space"></div>
		<a href="viet.php"><div class="buttonb<?php if($page=='viet') echo 'sel';?>">Products from Vietnam</div></a>
		<a href="chin.php"><div class="buttonb<?php if($page=='chin') echo 'sel';?>">Products from China</div></a>
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
		echo'<a href="palisaden.php"><div class="buttongsel">Borders, Palisades & Step stones</div></a>
		<div class="buttonsubdiv">
			<a href="#viet"><div class="buttonsub">Vietnamese</div></a>
			<a href="#chin"><div class="buttonsub">Chinese</div></a>
			<a href="#ind"><div class="buttonsub">Indian</div></a>
			<a href="#be"><div class="buttonsub">Old Belgium</div></a>
		</div>
		<a href="andere_specialiteiten.php"><div class="buttono" style="margin-top:120px;">Other specialities</div></a>';
		}
		else {
			echo '<a href="palisaden.php"><div class="buttong">Borders, Palisades & Step stones</div></a>
			<div class="space"></div>
			<a href="andere_specialiteiten.php"><div class="buttono'; 	if($page=='andere') echo 'sel'; echo '">Other specialities</div></a>';
		}?>
		
		<a href="sierkeien.php"><div class="buttono<?php if($page=='sierkeien') echo 'sel';?>">Pebbles & Ornamental Pebbles</div></a>
		<a href="schanskorven.php"><div class="buttono<?php if($page=='schanskorven') echo 'sel';?>">Gabions</div></a>
		<a href="mozaieken.php"><div class="buttono<?php if($page=='mozaieken') echo 'sel';?>">Mosaics</div></a>
		<a href="zwembadboorden.php"><div class="buttono<?php if($page=='zwembadboorden') echo 'sel';?>">Pool Borders</div></a>
		<a href="lijmkit_voegmortel.php"><div class="buttono<?php if($page=='lijm') echo 'sel';?>">ATI Gluekit - ATI Joint Mortar</div></a>
		<div class="space"></div>
		<a href="fotoalbum/index.php"><div class="buttonbig">Photo Album</div></a>
		<a href="assets/download/catalog.pdf" target="_blank"><div class="buttonbig">Catalog</div></a>
		<a href="contact.php"><div class="buttonbig">Contact us</div></a>
		<div class="clr"></div>
	</div>