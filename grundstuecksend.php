<?php

$datei = 'grundstueckzaehler.txt'; 
$nummer = file_get_contents($datei) + 1; 
$datum = date("d.m.Y");
$uhrzeit = date("H:i");



/* Developed by Moka, @ad7863, mgakashim.com, me@mgakashim.com */

	include("EmailAddressValidator.php"); // external class to verify email address
	$validator = new EmailAddressValidator;

	require_once('recaptchalib.php');
	  $privatekey = "6LfurN0SAAAAAKABDC2tVI8D0yrAh8NbburySvrj"; // enter your private key here
	  $resp = recaptcha_check_answer ($privatekey,
	                                $_SERVER["REMOTE_ADDR"],
	                                $_POST["recaptcha_challenge_field"],
	                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    echo "<script>javascript:Recaptcha.reload();</script>"; // reload captcha
    die("Leider gibt es Fehler bei Ihren Angaben.<br>Bitte versuchen Sie es nochmal."); // kill program and return error message
  } 

  else {
  	if(isset($_POST['contactFormSubmitted'])) {
	    // Form submission. Feel free to add more , make sure you add validation and add them to the mail line.
		$vorname = $_POST['vorname'];
		$name = $_POST['name'];
		$ort = $_POST['ort'];
		$email = $_POST['email'];
		$telefon = $_POST['telefon'];
		$nachricht = $_POST['nachricht'];
		
		// check length of name, email and message
		if (strlen($name) < 2) {
			echo "<script>javascript:Recaptcha.reload();</script>"; // reload the captcha
  			exit("Bitte füllen Sie alle erforderlichen Felder aus."); // exit program, return message
  		}
		
		// validate email address
  		if (!($validator->check_email_address($email))) { // if function returns false
            echo "<script>javascript:Recaptcha.reload();</script>"; // reload captcha
  			exit("Bitte verwenden Sie eine gültige E-Mail-Adresse."); // exit program with error message
        } // otherwise carry on
		
		// Build form content
		$formcontent="Vorname: $vorname \nName: $name \nWohnort: $ort \nE-Mail-Adresse: $email \nTelefon: $telefon \nNachricht: $nachricht";
		$message = '
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link href="http://www.windaktiv.de/assets/css/bootstrap.css" rel="stylesheet">
		<link href="http://www.windaktiv.de/assets/css/windaktiv.css" rel="stylesheet">
		
		</head>
		<body>
		<h3 class="greentype">Neuer Kontakt vom ' . $datum . " - " . $uhrzeit . ' Uhr</h3>
		<p class="lead">Antwort <strong>Nummer ' . $nummer . '</strong> auf Kontaktformular Grundstückseigentümer</p>
		<table class="table table-hover">
		
			<tr><td>Vorname</td><td>' . $vorname . '</td></tr>
			<tr><td>Familienname</td><td>' . $name . '</td></tr>
			<tr><td>Wohnort</td><td>' . $ort . '</td></tr>
			<tr><td>Email</td><td>' . $email . '</td></tr>
			<tr><td>Telefon</td><td>' . $telefon . '</td></tr>
			<tr><td>Nachricht</td><td>' . nl2br($nachricht) . '</td></tr>
			
		</table>
		<script src="http://use.edgefonts.net/source-sans-pro:n2,i2,n3,i3,n4,i4,n6,i6,n7,i7,n9,i9.js"></script>
		</body>
		<a href="mailto:' . $email . '?subject=windaktiv allgäu GmbH | Ihre Kontaktaufnahme vom ' . $datum .'"    role="button" class="btn btn-large btn-primary">Antwortschreiben verfassen</a>
		</html>';		
		
		
		
		
		
		$to = 'windaktiv allgaeu GmbH <roland.tschugg@windaktiv.de>'. ', '; // note the comma
		$to .= 'Administrator windaktiv <admin@windaktiv.de>';
//		$Cc	= 'Administrator windaktiv <admin@windaktiv.de>';
		
		// Enter your email address
//		$recipient = "windaktiv@hhhaesler.org"; "haesler@hhhaesler.org";
		// Enter a subject, only you will see this so make it useful
		$subject = "<Kontaktformular Grundstueckseigentuemer> | Nachricht von  $vorname $name";
		// 'From' mail header
		
//		$mailheader = "From: $email \r\n"; 
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		
		// Additional headers
		$headers .= "From: $email \r\n";
		$headers .= "Bcc: Administrator windaktiv <admin@windaktiv.de>" . "\r\n";
		
		
		// Send email, if something goes wrong, kill programm and return error message
		file_put_contents($datei, $nummer); 
		mail($to, $subject, $message, $headers) or die("Das hat leider nicht geklappt. Bitte versuchen Sie es nochmal.");
		
		// If all's well, return success message
		// ...and clear the message box and reload captcha
		echo "<script>$('#nachricht').val(''); $('#vorname').val(''); $('#name').val(''); $('#ort').val(''); $('#email').val(''); $('#telefon').val(''); javascript:Recaptcha.reload(); $('form#grundstueck').detach(); 
		$('#fenster_zu1').removeClass('hide');
		$('#fenster_zu1').addClass('show');
		$('div#fehlergrundstueck').removeClass('fehlermeldung');
		$('div#fehlergrundstueck').addClass('erfolg');
		</script>";
		echo "Vielen Dank. Ihre Nachricht wurde gesendet.";
		
  	}
  	}
  	
//  	sleep(10);
//  	
//  	echo "<script>$('#Grundbesitzer').modal('hide');</script>";

?>
