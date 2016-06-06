<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {

die("<div style='color:red'>Process Failed!!!</div><br><br>");

}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
 
$targetPath = "images/".$_FILES['userImage']['name'];
$imgType = pathinfo($targetPath, PATHINFO_EXTENSION);
$imgType = strtolower($imgType);
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
    <img src="<?php echo $targetPath; ?>" width="100px" height="100px" />
	
<?php
echo "&emsp;Image Uploaded Successfully";
}
}
}


if ($imgType === "jpg") {
	$filename = $targetPath;
	$newPath= $_FILES['userImage']['name'];
	$image = imagecreatefromjpeg($filename);
	$dest="images/reduceSize/".$newPath;
	imagejpeg($image, $dest, 40);
}

elseif($imgType  === "png") {
	$filename = $targetPath;
	$newPath= $_FILES['userImage']['name'];
	$image = imagecreatefrompng($filename);
	$dest="images/reduceSize/".$newPath;
	imagepng($image, $dest, 4);	
}

else {
	echo "&emsp;Please upload .jpg or .png format image";
}


?>

