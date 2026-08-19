<?
	include ('../../_includes/mobile_check.php');

	$seo_title = "Stofferen in de Horeca – Terras & Binnen | Stam Stoffeeratelier";
	$meta_description = "Geef jouw horecazaak een nieuwe look met Stam Stoffeeratelier. Professioneel stoffeerwerk voor terras en interieur, met duurzame materialen, perfecte afwerking en maatwerk voor elke stijl.";
	$h1 = "Stofferen in de Horeca";
	$image = "categorie-horeca-beeld01.jpg";

	$intro = "In horecazaken is het belangrijk dat gasten comfortabel kunnen zitten en dat de ruimte de juiste sfeer uitstraalt. Goed gestoffeerd meubilair maakt het verschil: op het terras, in het restaurant of in de hotelbar. Met duurzame stoffen, sterke vullingen en een afwerking die tegen intensief gebruik kan, blijft jouw interieur langer mooi én voelt het uitnodigend aan. Hieronder lees je waar de investering in horeca‑stoffeerwerk van afhangt.";

	$toon_prijs = "nee";
	$prijsblok_label = "Wat kost het?";
	$prijs_van = "xx";
	$prijs_tot = "xx";
	$prijs_context = "Richtprijs per tuinkussen, inclusief buitenstof en vulling. De prijs hangt af van het formaat, de vorm en het aantal kussens.";

	$cta_form_beneden = "Wil jij jouw horecazaak een frisse, nieuwe look geven?";

if ($device == 'desktop') {
    $klanten_image = "../../_images/categorie-horeca-klanten-D.jpg";
} else {
    $klanten_image = "../../_images/categorie-horeca-klanten-M.jpg";
}

	$body = <<<EOD
		<h2>Waar hangt de investering van af?</h2>
		<p>Bij horeca‑stoffeerwerk spelen gebruiksintensiteit en materiaalkeuze een grote rol. Terrasstoelen moeten bestand zijn tegen zon, regen en dagelijks verplaatsen, terwijl binnenmeubilair vooral moet scoren op comfort, uitstraling en slijtvastheid. De keuze voor stof of kunstleer bepaalt niet alleen de look, maar ook hoe lang het meubilair mooi blijft.</p>

		<p>Daarnaast telt de constructie van het meubel mee. Een eenvoudige stoel is sneller opnieuw gestoffeerd dan een bank met rondingen, capitonnering of speciale details. Ook de vulling is belangrijk: hoogwaardige schuimen zorgen voor langdurig zitcomfort, zelfs bij drukke piekuren.</p>
		<img src="../../_images/categorie-horeca-beeld03.jpg" class="border-S" style="width:100%;">

<h2>Duurzame stoffen voor intensief gebruik</h2>
		<p>In de <a href="../../stoffenkiezer/">Stoffenkiezer</a> vind je sterke horeca‑stoffen die geschikt zijn voor dagelijks gebruik. Denk aan slijtvaste projectstoffen, kunstleer dat makkelijk schoon te houden is en outdoor‑stoffen voor terrassen die het hele seizoen buiten staan.</p>

		<h2>Een offerte op maat</h2>
		<p>Elke horecazaak is anders. Stuur foto’s, aantallen en afmetingen van jouw meubilair door, dan maak ik graag een offerte op maat. Passend bij jouw stijl, gebruiksintensiteit en budget.</p>
		<img src="../../_images/categorie-horeca-beeld02.jpg" class="border-S" style="width:100%;">

		<h2>Waar je kunt zitten op mijn stoffen</h2>
		<img src="$klanten_image" style="width:100%;">

EOD;
?>


	<? include('../artikel.php');?>
