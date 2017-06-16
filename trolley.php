<!doctype html>

<?

if (!(isset($_GET["id"])) || $_GET["id"]=="") {
	$title = "Facebook trolley problem generator";
	$img = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER['PHP_SELF']) . "/icon.png";
} else {
	$id = $_GET["id"];
	$img = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER['PHP_SELF']) . "/data/".$id.".png";

	//title and description
	if ($_GET["pull"]==="yes") {
		$title = "I would pull the lever!";
	} else {
		$title = "I would NOT pull the lever!";
	}
}

$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$desc = "Make a trolley problem with friends from Facebook and decide to pull the lever or not.";

?>

<meta property="og:title" content="<?=$title;?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?=$url;?>" />
<meta property="og:description" content="<?=$desc;?>" />
<meta property="og:image" content="<?=$img;?>" />

<title>Facebook trolley problem generator</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<h1>Facebook trolley problem generator</h1>

<p><a href="index.html">Click here to generate your trolley problem</a></p>