<?
$ch = curl_init();
$u = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER['PHP_SELF']) . "/trolley.php?id=".$_GET["id"]."&pull=yes";
curl_setopt($ch,CURLOPT_URL,"https://graph.facebook.com/?id=".urlencode($u)."&scrape=true");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POST, true);
echo curl_exec($ch);
curl_close($ch);

$ch = curl_init();
$u = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER['PHP_SELF']) . "/trolley.php?id=".$_GET["id"]."&pull=no";
curl_setopt($ch,CURLOPT_URL,"https://graph.facebook.com/?id=".urlencode($u)."&scrape=true");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POST, true);
echo curl_exec($ch);
curl_close($ch);
?>