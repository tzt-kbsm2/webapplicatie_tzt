
<link href="../bootstrap.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<script type='text/javascript'>
    function refreshCaptcha() {
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
    }
</script>
<?php
if (isset($_POST['verzenden'])) {
    session_start();
    // Wanneer op verzenden wordt gedrukt, wordt de captcha gecontrolleerd.
    if (empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0) {
	?> <span>Helaas, de ingevoerde code is onjuist! Klik <a href="klacht.php">hier</a> om terug te gaan naar het klachtenformulier.</span> <?php
    } else {// Captcha is correct ingevuld, het formulier wordt nu verzonden.
	if (isset($_POST['verzenden'])) {
	    $ToEmail = 'eric.h@live.nl'; // Naar welke e-mail moet het idee gestuurd worden?
	    $EmailSubject = 'Klachtenformulier TZT Post'; // Onderwerp de e-mail
	    $mailheader = "From: " . 'klachten@tztpost.nl' . "\r\n"; // Omdat het ook anoniem moet kunnen, standaard afzender ingesteld.
	    $mailheader .= "Reply-To: " . 'klachten@tztpost.nl' . "\r\n";
	    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
	    // Nu komt wat er in het bericht komt te staan. Bij anonieme ingave zijn alleen het onderwerp en idee ingevuld.
	    $MESSAGE_BODY = "Naam: " . $_POST['naam'] . "<BR>";
	    $MESSAGE_BODY .= " Email: " . $_POST["email"] . "<BR>";
	    $MESSAGE_BODY .= " Onderwerp: " . $_POST["onderwerp"] . "<BR>";
	    $MESSAGE_BODY .= " Klacht: " . nl2br($_POST["klacht"]) . "<BR>";
	    // Mail verzenden
	    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die("<p> Er ging iets mis bij het verzenden van uw klacht.</p>");
	    ?> De klacht is verzonden. <?php
	}
    }
} else {
    ?>

    <div class="grootte">
        <form class="form-horizontal" method="POST" action="klacht.php">
    	<div class="form-group">
    	    <label class="col-sm-2 control-label">Naam</label>
    	    <div class="col-sm-10">
    		<input type="text" class="form-control" name="naam" placeholder="Naam">
    	    </div>
    	</div>
    	<div class="form-group">
    	    <label class="col-sm-2 control-label">Email</label>
    	    <div class="col-sm-10">
    		<input type="email" class="form-control" name="email" placeholder="Email">
    	    </div>
    	</div>
    	<div class="form-group">
    	    <label class="col-sm-2 control-label">Onderwerp*</label>
    	    <div class="col-sm-10">
    		<input type="text" class="form-control" name="onderwerp" placeholder="Onderwerp" required>
    	    </div>
    	</div>
    	<div class="form-group">
    	    <label class="col-sm-2 control-label">Klacht*</label>
    	    <div class="col-sm-10">
    		<textarea class="form-control" rows="6" name="klacht" required></textarea>
    	    </div>
    	</div>
    	<div class="form-group">
    	    <label class="col-sm-2 control-label"></label>
    	    <div class="col-sm-10">
    		<img src="captcha.php?rand=<?php echo rand(); ?>" id='captchaimg'>
    	    </div>
    	</div>
    	<div class="form-group">
    	    <label class="col-sm-2 control-label">Code*</label>


    	    <div class="col-sm-10">
    		<input id="captcha_code" name="captcha_code" type="text" class="form-control" required>
    	    </div>
    	</div>
    	<div class="form-group">
    	    <label class="col-sm-2 control-label"></label>
    	    <div class="col-sm-10">
    		Kunt u de afbeelding niet lezen? Klik <a href='javascript: refreshCaptcha();'>hier</a> om te vernieuwen.<br>
    		<i>Velden met een * zijn verplicht.</i>
    	    </div>
    	</div>

    	<div class="form-group">
    	    <div class="col-sm-offset-2 col-sm-10">
    		<button type="submit" class="btn btn-default" name="verzenden" onclick="return validate();">Verzenden</button>
    		<button type="reset" class="btn btn-default" name="annuleren">Annuleren</button>
    	    </div>
    	</div>
        </form>
    </div>
    <?php
}?>