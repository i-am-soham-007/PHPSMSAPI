
<?php
echo 'STEPS FOR SMS API
--------------

1. https://www.way2sms.com/ (Register Account)
2. Login Account
3. SELECT API
4. COPY CODE ANY LANGUAGE
5. Create FILE sms.php (set variable)
	example:';
		$message = urlencode($message);// urlencode your message
														
		curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=(HERE YOUR API KEY)secret=(HERE YOUR SECRET KEY)&usetype=stage&phone=$mobile&senderid=(YOUR EMAIL ID)&message=$message");
		// post data
		// query parameter values must be given without squarebrackets.

		?>