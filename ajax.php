<?php

// contact form code
if($_REQUEST['ftype1']=='contact-us-1'):
	if($_REQUEST['name1'] && $_REQUEST['email1'] && $_REQUEST['phone1'] && $_REQUEST['msg1']):
		
		if(!filter_var($_REQUEST['email1'], FILTER_VALIDATE_EMAIL)):
			echo '0|<div class="alert-danger p-2 px-3 mt-2">Please enter valid email address !</div>';
			exit;
		endif;
		
		$to = '';
		$subject = 'Contact Enquiry';				
		$message = 'Name:'.$_REQUEST['name1'].'<br/>';				
		$message .= 'Phone:'.$_REQUEST['phone1'].'<br/>';		
		$message .= 'Email:'.$_REQUEST['email1'].'<br/>';		
		$message .= 'Subject:'.$_REQUEST['sub1'].'<br/>';		
		$message .= 'Message:'.$_REQUEST['msg1'].'<br/>';		
		$headers = '' . "\r\n" .
					   'X-Mailer: PHP/' . phpversion();
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		mail($to, $subject, $message, $headers);
		
		echo '1|<div class="alert-success p-2 px-3 mt-2">Enquiry submitted successfully, we will back to you soon.</div>';
	else:
		echo '0|<div class="alert-danger p-2 px-3 mt-2">Please fill form to submit your Enquiry !</div>';
	endif;
endif;

?>