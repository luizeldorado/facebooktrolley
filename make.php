<?

//make image
$img = imagecreatefrompng('trolley.png');
$black = imagecolorallocate($img,0,0,0);

putenv('GDFONTPATH='.realpath('.'));
$f = "NotoSans-Regular";

imagettftext($img,11,0,312,96,$black,$f, $_GET["p0"]);

imagettftext($img,11,0,256+0*24,156+0*20,$black,$f, $_GET["p1"]);
imagettftext($img,11,0,256+1*24,156+1*20,$black,$f, $_GET["p2"]);
imagettftext($img,11,0,256+2*24,156+2*20,$black,$f, $_GET["p3"]);
imagettftext($img,11,0,256+3*24,156+3*20,$black,$f, $_GET["p4"]);
imagettftext($img,11,0,256+4*24,156+4*20,$black,$f, $_GET["p5"]);

$filename = $_GET["id"];
$version = 0;
while(file_exists("data/".$filename.".png")) {
	$version += 1;
	$filename = $_GET["id"]."v".$version;
}

//save img to file
imagepng($img,"data/".$filename.".png");
echo $filename;

//flush facebook
/*
ob_start();
include("flush.php?id=".$_GET["id"]."v".$version);
ob_end_clean();
*/
//not needed anymore
?>