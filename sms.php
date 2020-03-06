

<?php
extract($_POST);

if(isset($send))
{
	//post
	$url="https://www.sms4india.com/api/v1/sendCampaign";
	$message = urlencode($message);// urlencode your message
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
	curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=TCNK2N00SMHLPB905W1VIG89MJA4GCNV&secret=YGV59KB25ME6GGKA&usetype=stage&phone=$mobile&senderid=rsoham00@gmail.com&message=$message");// post data
	// query parameter values must be given without squarebrackets.
	 // Optional Authentication:
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);
	echo $result;
}

?>
