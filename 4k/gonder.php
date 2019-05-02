<?php
  
error_reporting(0);
ini_set('display_errors', 0);
?>
<font face="verdana" size="2" color="maroon">
<link rel="stylesheet" href="style.css">
<div class="logo"></div>

<table align="center">
  <tr>
    <td>
</div>  

<div class="ara"></div>
<div class="sablon">

<?php

  $aDoor = $_POST['formDoor'];
  if(empty($aDoor))
  {
    echo("Dizinde video yok veya varsa da hiçbiri seçilmedi.");
  }
  else
  {
$date = date('Y-m-d-h-i-sa');
$ffmpegfile = 'E:\\Logo\\ffmpeg';
$bitendir = 'E:\\Logo\\logolu';
$videodir = 'E:\Logo\logosuz\*.{mxf,mp4,mov,mpg,MXF}';
//$videodir = 'L:\*.{mxf,mp4,mov,mpg,MXF}';
$batfile = 'C:\\xampp\\htdocs\\Logo\\4k\\'.$date.'logobindir4K.bat';
$logofile = 'E:\\Logo\\belgesel_hd.png';

$myfile = fopen("$batfile", "w") or die("Unable to open file!");

    $N = count($aDoor);
    
    for($i=0; $i < $N; $i++)

    {

    $value= $aDoor[$i];
    
  $txt = "$ffmpegfile -i \"E:\\Logo\\logosuz\\$value\" -vf scale=1920:1080 \"$bitendir\\$value"."_4kto1080p.mp4\" \n $ffmpegfile -i \"E:\\Logo\\logolu\\$value"."_4kto1080p.mp4\" -i $logofile -filter_complex \"[0:v][1:v] overlay=60:50\"  \"$bitendir\\$value"."_logolu.mp4\" \n del \"E:\\Logo\\logolu\\$value"."_4kto1080p.mp4\" \n";
//$txt = "$ffmpegfile -i \"L:\\$value\" -i $logofile -filter_complex \"[0:v][1:v] overlay=60:50\"  \"$bitendir\\$value"."_logolu.mp4\" \n";

    fwrite($myfile, $txt.chr(13)."".chr(10));
  //echo  "$value<br>";

      echo($aDoor[$i] . " ");
      echo "<br>";

    }

  }
fclose($myfile);
?>
    
    </td>
  </tr>
<tr><td>Yukarıdaki dosyalar için HD Logo bindirme dosyası oluşturuldu...</td></tr>
<tr><td><a href="<?php echo $date.'logobindir4K.bat'; ?>">indir</td></tr>

</table>

</div>
</td>
</font>