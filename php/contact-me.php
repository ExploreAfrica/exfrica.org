<?php
 
    $to = "support@exfrica.org"; //Change email here
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name'];
	$intrest = $_REQUEST['intrest'];  
    $headers = "From: $from"; 
    $subject = "You have a message sent from your site"; 
 
    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"email"} = "email"; 
    $fields{"message"} = "message";
	$fields{"intrest"} = "intrest";
	$fields{"country"} = "country";
	
    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);
 
?>