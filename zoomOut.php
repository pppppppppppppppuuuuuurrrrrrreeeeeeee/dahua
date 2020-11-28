<?php
// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi");
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=start&channel=0&code=Position&arg1=0&arg2=0&arg3=-10');
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);     
