<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {

die("<div style='color:red'>Process Failed!!!</div><br><br>");

}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "images/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
    <img src="<?php echo $targetPath; ?>" width="100px" height="100px" />
    <?php
}
}
}
?>