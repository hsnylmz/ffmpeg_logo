<!DOCTYPE html>
<html>
<head>
	<title>Thumbnail Programi</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><input type="submit" name="submit" value="UPLOAD">
</form>

<?php
if(isset($_POST['submit']))
{
$ffmpeg ="E:\\Logo\\ffmpeg";
$videoFile= $_FILES["file"]["tmp_name"];
$size ="1920x1080";

for ($num=1; $num < 10 ; $num++) { 
	$interval = $num +3;
	echo "$ffmpeg -i $videoFile -an -ss $interval -s $size $num.jpg";
	//shell_exec("$ffmpeg -i $videoFile -an -ss $interval -s $size $num.jpg");
	echo "Thumbnailler başarıyla oluşturuldu!!!  - $num.jpg<br />";
}

}
?>


</body>
</html>