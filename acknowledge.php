<?php
if (isset($_POST['send'])
	&& $_POST[senderName] !="" && $_POST[contactno] !="" 
&& $_POST[senderEmail] !="" && $_POST[user_message] !="")

{
	$to = 'adarshprabhu@gmail.com';
	$subject = 'New Message from cwd.co.mz';
	$message .= 'Sender Name: ' . $_POST['senderName'] . "\r\n\r\n";
	$message .= 'Contact: ' . $_POST['contactno'] . "\r\n\r\n";
	$message .= 'Email: ' . $_POST['senderEmail'] . "\r\n\r\n";
	$message .= 'Comments: ' . $_POST['user_message'];
	
	
	
	$success = mail($to, $subject, $message);	
	}
?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<title>CW Ducker | Message | Sociedade de Auditores Moçambique</title>
		<meta name="description" content="Learn more about the people who work at CW Ducker">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="icon" type="img/png" href="favicon-32x32.png" sizes="32x32"/>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<nav>
			<ul class="flexnav">
				<li><a href="index.html"><img src="assets/logo.svg" alt="CW Ducker Logo" class="logo"></a></li>
				<li><a href="index.html" class="navLink">Home</a></li>
				<li><a href="services.html" class="navLink">Services</a></li>
				<li><a href="ourapproach.html" class="navLink">Our Approach</a></li>
				<li><a href="casestudies.html" class="navLink">Case Studies</a></li>
				<li><a href="faq.html" class="navLink">FAQs</a></li>
				<li><a href="contactus.html" class="navLink">Contact Us</a></li>
			</ul>
		</nav>
		<div id="wrapperclrd">
			<h2>Message</h2>
			<?php if (isset($success) && $success) {?>
			<img src="assets/confirm.svg" alt="Receipt Confirmed" class="smallIcon">
			<h3 class="blue"> Your  message was sent successfully</h3>
				<p>We will endeavour to respond to you as soon as possible. Thank you for your interest.</p>
			<?php }
				else { ?>
			<img src="assets/deny.svg" alt="Message Unsuccessful" class="smallIcon">
			<h3 class="blue"> Your message could not be sent</h3>
				<p>We were not able to process your details.</p> 
				<p>Please make sure you fill in all the fields. If you continue to experience issues, you may contact us via through phone</p>
			<?php } ?>
			
			
				<p>If you are interested in any of our services, you may contact us via the details or form below.</p>
				<img src="assets/address.svg" class="smallIcon" alt="Map"><p class="indented">Opening hours: 8:30am - 5:30pm</br>
				Level 1, 1028 Avenida Guerra Popular, </br>
				Maputo, Mozambique
				</p>
				
				<img src="assets/telephone.svg" class="smallIcon" alt="Map"><p class="indented">Main: + 258 21 49 35 85</br>
					Fax: + 258 21 34 67 89</br>
				</p>

				<img src="assets/email.svg" class="smallIcon" alt="EmailIcon"><p class="indented">info@cwd.co.mz</br>You may contact our executive directors</br>via LinkedIn or Email. Details are in the </br><a href="aboutus.html">'Our People'</a> section.
				</p>
				
			<h3 class="blue">Send us a message</h3>
				
			<form method="POST" action="acknowledge.php">
				<label for="name"><p class="label">Contact Name</p></label>
				<input type="text" name="senderName" id="name">
				
				<label for="email"><p class="label">E-mail Address</p></label>
				<input type="text" name="senderEmail" id="email">
				
				<label for="contactno"><p class="label">Contact Number</p></label>
				<input type="text" name="contactno" id="contactno">
				
				<lable for="comment"><p class="label">Message</p></label>
				<textarea id="comment" name="user_message"></textarea></br>
				
				<input type="submit" name="send" value="Send">
				</form>
				
				<h3 class="blue">Find us on a map</h3>
				<div class="gmaps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7174.010178168696!2d32.57077300970139!3d-25.96787345336723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee69b1d0134e001%3A0xafecc4a3f2976d95!2sAv.+Guerra+Popular%2C+Maputo%2C+Mozambique!5e0!3m2!1sen!2s!4v1453992736630" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		
			<footer>
				<a target="_blank" href="http://www.primeglobal.net/content/cw-ducker-associados-lda" alt=
				"CW Ducker is an Independent Member of Prime Global"><img src="assets/primeglobal.png" alt="CW Ducker is an Independent Member of Prime Global" class="memberLogo", srcset="assets/primeglobal.png, assets/primeglobal2x.png 2x"></a></br>
				<a href="sitemap.html" class="smallText">Sitemap</a>
				<a href="privacypolicy" class="smallText">Privacy Policy</a>
				<ul class="flexfooter">
					<li><img src="assets/footerpattern.svg" class="pattern"
						srcset="assets/footerpattern2d.svg 310w, assets/footerpattern4d.svg 614w, assets/footerpattern6d.svg 917w, assets/footerpattern8d.svg 1221w, assets/footerpattern10d.svg 1517w, assets/footerpattern18d.svg 2690w"
						sizes="(max-width: 480px) 33vw, (max-width: 1000px) 100vw, 1600px"></li>
					<li><p class="smallText">&#169; 2015. C.W. Ducker & Associados Lda. All Rights Reserved. Maputo - MOZAMBIQUE. NUIT 400004005</p></li>
					<li><a href="linkedin.com"><img src="assets/linkedin.png" class="socialIcons" alt="Visit us on LinkedIn"></a></li>
				</ul>
				</footer>
		</div>
				
				
	</body>

</html>

