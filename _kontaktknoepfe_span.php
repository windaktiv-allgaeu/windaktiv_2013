<div class="span3 offset2">
<div class="thumbnail">
<div class="caption">
		<h4 class="weiss">Informationen</h4>
		<p  class="weiss">Sie sind Landwirt, Forstwirt, Grundstückseigentümer?</p>
		<p  class="weiss">Dann nutzen Sie bitte unser spezielles Kontaktformular.</p>
		
		
		<a href="#Grundbesitzer" role="button" class="btn" data-toggle="modal" id="grundbesitzertrigger">Infos anfordern</a>
		<div id="Grundbesitzer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel1">Kontaktaufnahme</h3>
			<p>Ich bin Landwirt, Forstwirt, Grundstückseigentümer und wünsche einen unverbindlichen Kontakt.</p>
		  </div>
		 <div class="modal-body">
				      	<div id="fehlergrundstueck" class="fehlermeldung">
				      	<h4 id="formResponse"><?php if($error) { echo($error); } ?></h4>
				      	<button id="fenster_zu1" class="btn" data-dismiss="modal" aria-hidden="true">Fenster schließen</button>
				      	</div>
		 
		<form action="grundstuecksend.php" class="contact-form" id="grundstueck"  method="post">
		<fieldset>
		<div class="control-group">
		  <label class="control-label" for="vorname">Ihr Vorname</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="Vorname" name="vorname" id="vorname">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="name">Ihr Familienname*</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="Familienname*" name="name" id="name">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="ort">Ihr Wohnort</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="Ort" name="ort" id="ort">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="email">Ihre E-Mail-Addresse*</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="E-Mail-Adresse*" name="email" id="email">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="telefon">Ihre Telefonnummer*</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="Telefonnummer ohne Leer- und Sonderzeichen*" name="telefon" id="telefon">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="nachricht">Weitere Mitteilungen</label>
		  <div class="controls">
		    <textarea class="input-xlarge span5" rows="5" placeholder="Weitere Mitteilungen" name="nachricht" id="nachricht"></textarea>
		  </div>
		</div>
		
		<div class="control-group">
		  <label class="control-label">Sind Sie ein Mensch?</label>
		  <div class="controls" id="recaptcha">
		    <?php
		        require_once('recaptchalib.php');
		        $publickey = "6LfurN0SAAAAAMEnVI_1ekAPwPyMn3UJqPRokT_k"; // Add your own public key here
		        echo recaptcha_get_html($publickey);
		      ?>
		      
		  </div>
		</div>
		
		<div class="btn-group">
			<button id="abbrechen" class="btn" data-dismiss="modal" aria-hidden="true">Abbrechen</button>
			<button id="grundstueckreset" class="btn" type="reset">Reset</button>
			<button id="grundstueckknopf" value="Send" name="grundstueck" type="submit" class="btn btn-primary">Informationen anfordern</button>
		</div>
		</fieldset>
		</form>
		
</div>
</div>
</div>
</div>


<div class="thumbnail">
<div class="caption">
		<h4 class="weiss">Newsletter</h4>
		<p class="weiss">Lassen Sie sich per Newsletter über die aktuellen Entwicklungen<br>im Windmarkt Allgäu informieren.</p>
		
		
		<a href="#Newsletter" role="button" class="btn" data-toggle="modal" id="newslettertrigger">Newsletter bestellen</a>
		<div id="Newsletter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel2">Newsletter bestellen</h3>
			<p>Ja, ich bestelle den Newsletter von windaktiv allgäu GmbH.<br>
				Bitte füllen Sie mindestens alle mit * gekennzeichneten Felder aus. </p>
		  </div>
		 <div class="modal-body">
				      	<div id="fehlernewsletter" class="fehlermeldung">
				      	<h4 id="formResponse2"><?php if($error) { echo($error); } ?></h4>
				      	<button id="fenster_zu2" class="btn" data-dismiss="modal" aria-hidden="true">Fenster schließen</button>
				      	</div>
		 
		<form action="newslettersend.php" class="contact-form" id="newsletter"  method="post">
		<fieldset>
		<div class="control-group">
		  <label class="control-label" for="vorname">Ihr Vorname</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="Vorname" name="vorname" id="vorname2">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="name">Ihr Familienname*</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="Familienname*" name="name" id="name2">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="ort">Ihr Wohnort</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="Ort" name="ort" id="ort2">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="email">Ihre E-Mail-Addresse*</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="E-Mail-Adresse*" name="email" id="email2">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="telefon">Ihre Telefonnummer</label>
		  <div class="controls">
		    <input type="text" class="span5" placeholder="Telefonnummer ohne Leer- und Sonderzeichen" name="telefon" id="telefon2">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="nachricht2">Weitere Mitteilungen</label>
		  <div class="controls">
		    <textarea class="input-xlarge span5" rows="5" placeholder="Weitere Mitteilungen" name="nachricht" id="nachricht2"></textarea>
		  </div>
		</div>
		
		
		
		<div class="btn-group">
			<button id="abbrechen2" class="btn" data-dismiss="modal" aria-hidden="true">Abbrechen</button>
			<button id="newsletterreset" class="btn" type="reset">Reset</button>
			<button id="newsletterknopf" value="Send" name="newsletter" type="submit" class="btn btn-primary">Newsletter bestellen</button>
		</div>
		</fieldset>
		</form>
		
</div>
</div>
</div>
</div>
</div>