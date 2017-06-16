<?
$f = fopen("requests.txt","a");
fwrite($f,$_POST["user"]."\n");
fclose($f);

?>
<p>Done.</p>