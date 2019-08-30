<?php
//warna
$r      = "\n\n";
$biru   = "\x1b[1;34m";
$turkis = "\x1b[1;36m";
$ijo    = "\x1b[92m";
$putih  = "\x1b[1;37m";
$pink   = "\x1b[1;35m";
$red    = "\x1b[1;31m";
$kuning = "\x1b[1;33m";
$t      = "\n";

@system("clear");

function asw($a, $username) {
    require("cfg.php");
    $no   = rand(1, 50);
    $body = ''.$data.'';
    $ch   = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://gateway.cashzine.net/app-http/api");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

    $headers   = array ();
    $headers[] = "Content-Type: application/json";
    $headers[] = "User-Agent: Android/xiaomi/Android/9/guaguazhuan/3.39/cashzineOnline/868137033177826/fe80::3426:7ff:fe7b:a4aa%dummy0/com.sky.sea.cashzine/36:26:07:7B:A4:AA/0////e28f177782d7edf7fe3e1a03e4afe3dd";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    return $result;
}

echo $red."
       ___              _           _
      / __\  __ _  ___ | |__   ____(_) _ __    ___
     / /    / _` |/ __|| '_ \ |_  /| || '_ \  / _ \
$ijo    / /___ | (_| |\__ \| | | | / / | || | | ||  __/
$kuning    \____/  \__,_||___/|_| |_|/___||_||_| |_| \___|
 ";
echo $putih."[".$pink."==================================================".$putih."]$t";
echo $turkis."    [ ".$putih."Creator : ".$red."TEAM TUYULERS ".$turkis."]=[".$ijo." Afil Official ".$putih."]".$t;
echo $turkis."      [ ".$putih."Support : ".$ijo."MK KHAIRIL ".$turkis."]=[".$ijo." Maniac Receh ".$putih."]".$t;
echo $biru." [ ".$ijo."Official$kuning Youtube$red TEAM TUYULERS ".$turkis."]=[".$ijo." Afil Official ".$putih."]".$t;
echo $putih."                  [ ".$ijo." Bot Cashzine ".$putih."]".$t;
echo $putih." [".$pink."==================================================".$putih."]$r";
echo $ijo." [".$pink."==================== Start Bot ===================".$ijo."]$r";

$jum = (50000000);

for ($a = 0; $a < $jum; $a++) {
    sleep (15);
    $oce = asw($a, $user);
    echo "".$oce."\n";
}
?>
