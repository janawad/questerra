<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML Form</title>

<style type="text/css">

* { margin: 0; padding: 0; }

html { height: 100%; font-size: 62.5% }

body { height: 100%; background-color: #FFFFFF; font: 1.2em Verdana, Arial, Helvetica, sans-serif; }


/* ==================== Form style sheet ==================== */

form { margin: 25px 0 0 100px; width: 445px; padding-bottom: 30px }
form * { vertical-align: middle; }

fieldset { margin: 0 0 22px 0; border: 0; }
legend { font-size: 1em; font-weight: bold; }

label { float: left; display: block; width: 100px; margin-top: 4px; clear: left; }
label.choose { width: 162px; }
label.spam-protection { display: inline; width: auto; }

input.text, textarea, input.choose, input.answer { border: 1px solid #909090; padding: 3px; }
input.text { width: 300px; margin: 0 0 8px 0; }
textarea { width: 400px; margin: 0 0 12px 0; display: block; }

select { width: 250px; border: 1px solid #909090; padding: 2px;  margin: 0 0 8px 0; }

input.choose { margin: 0; }
input.answer { width: 40px; margin: 0 0 0 10px; }
input.submit-text { font: 1.4em Georgia, "Times New Roman", Times, serif; letter-spacing: 1px; display: block; margin: 23px 0 0 0; }

hr.formik { height: 1px; color: gray; background-color: gray; border: 0 solid gray; margin: 3px 0 20px 0; }
form br { display: none; }

/* ==================== Form style sheet END ==================== */

</style>

<!--[if lte IE 7]>
<style type="text/css">

/* ==================== Form style sheet for IE 7 and lower ==================== */

legend { position: relative; top: 6px; left: -7px; }

/* ==================== Form style sheet for IE end ==================== */

</style>
<![endif]-->
</head>


<body>
	
	
	<form action="" method="post">
		<h2 style="text-align:center;padding-bottom:20px;">Questerra form</h2><br/>
		<!-- ============================== Fieldset 1 ============================== -->
		<br><fieldset>
				<label for="name"><strong>Name </strong></label><br />
				<input name="name" type="text"  class="text" placeholder="Name" /><br />
		</fieldset>
		
		<fieldset>
				<label for="email"><strong>Email Address </strong></label><br />
				<input name="email" type="email" id="email" class="text" placeholder="Email Address" />
		</fieldset>
		
		<fieldset>
				<label for="gender"><strong>Gender </strong></label>
				<input type="radio" name="gender" value="male"> Male
				<input type="radio" name="gender" value="female"> Female
		</fieldset>
		
		<fieldset>
				<label for="Date of Birth"><strong>Date of Birth </strong></label>
				<input class="text" name="dob" type="text" placeholder="Date of Birth"/>
		</fieldset>
		
		<fieldset>
				<label for="nationality"><strong>Nationality </strong></label>
				<input class="text" name="nationality" type="text" placeholder="Nationality"/>
		</fieldset>
		
		<fieldset>
				<label for="number"><strong>Mobile Number </strong></label>
				<input class="text" name="number" type="text" placeholder="Mobile Number"/>
		</fieldset>
		
		<fieldset>
				<label for="education" style="width:auto;"><strong>Educational Qualification </strong></label>
				<textarea name="education" id="message" cols="20" rows="10" placeholder="Educational Qualification ....."></textarea>
		</fieldset>
		
		<fieldset>
				<label for="role" style="width:auto;"><strong>Current/Last Professional Role </strong></label>
				<textarea name="role" id="message" cols="20" rows="10" placeholder="Current/Last Professional Role ....."></textarea>
		</fieldset>
		
		<fieldset>
				<label for="domain" style="width:auto;"><strong>What domain are you looking for </strong></label>
				<textarea name="domain" id="message" cols="20" rows="10" placeholder="What domain are you looking for ....."></textarea>
		</fieldset>
		
		<h2 style="text-align:center;padding-bottom:20px;">General Questions</h2>
		
		<fieldset>
				<legend><strong>Have you ever been to India before?</strong></legend>
				<input type="radio" name="country" value="Yes"> Yes
				<input type="radio" name="country" value="No"> No
		</fieldset>
		
		<fieldset>
				<label for="message" style="width:auto;"><strong>What excites you about India? </strong></label>
				<textarea name="message" id="message" cols="20" rows="10" placeholder="What excites you about India? ....."></textarea>
		</fieldset>
		
		<fieldset>
				<label for="message" style="width:auto;"><strong>What excites you about your Domain? </strong></label>
				<textarea name="message1" id="message" cols="20" rows="10" placeholder="What excites you about your Domain? ....."></textarea>
		</fieldset>
		
		<fieldset>
				<label for="message" style="width:auto;"><strong>5 experiences of a tour that make a good tour even better for you </strong></label>
				<textarea name="message2" id="message" cols="20" rows="10" placeholder="5 experiences of a tour that make a good tour even better for you ....."></textarea>
		</fieldset>
		
		<fieldset>
				<label for="message" style="width:auto;"><strong>What makes you suitable for the tour? </strong></label>
				<textarea name="message3" id="message" cols="20" rows="10" placeholder="What makes you suitable for the tour? ....."></textarea>
		</fieldset>
		
		<fieldset>
				<label for="message" style="width:auto;"><strong>How do you think this tour will help you grow? (Individual level/Professional level). </strong></label>
				<textarea name="message4" id="message" cols="20" rows="10" placeholder="How do you think this tour will help you grow? (Individual level/Professional level). ....."></textarea>
		</fieldset>
		
		<fieldset>
				<label for="message" style="width:auto;"><strong>Where did you hear about us? </strong></label>
				<textarea name="message5" id="message" cols="20" rows="10" placeholder="Where did you hear about us? ....."></textarea>
		</fieldset>
		
		<fieldset>
				<label for="message" style="width:auto;"><strong>Anything Else you think we should know? </strong></label>
				<textarea name="message6" id="message" cols="20" rows="10" placeholder="Anything Else you think we should know? ....."></textarea>
		</fieldset>
		
		<!--<p><input type="submit" alt="SUBMIT" name="Submit" value="SUBMIT" class="submit-text" /></p>-->
	</form>

</body>
</html>

