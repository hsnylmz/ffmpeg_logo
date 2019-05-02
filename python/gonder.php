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
$sabitsatirlar_acma = "import ftplib

server='212.175.166.122'
username='izmirftp'
password='Izmir2014'
ftp_connection=ftplib.FTP(server, username, password)
remote_path='TRT_IZMIR/Transfer'
ftp_connection.cwd(remote_path)\n";

$sabitsatirlar_kapama="fh.close()";

$ilk_kelime = 'fh=open(';

$ikinci_satir_ilk_kelime = "ftp_connection.storbinary('STOR";



$bitendir = 'E:\\Logo\\logolu';
$videodir = 'E:\Logo\logolu\*.{mxf,mp4,mov,mpg,MXF}';
//$videodir = 'L:\*.{mxf,mp4,mov,mpg,MXF}';
$batfile = 'C:\\xampp\\htdocs\\Logo\\python\\FTPyeAT.py';
$logofile = 'E:\\Logo\\belgesel_hd_new.png';

$myfile = fopen("$batfile", "w") or die("Unable to open file!");
fwrite($myfile, $sabitsatirlar_acma);
    $N = count($aDoor);
    
    for($i=0; $i < $N; $i++)

    {

    $value= $aDoor[$i];
    
  $txt = "$ilk_kelime\"E:/Logo/logolu/$value\",'rb') \n";
    fwrite($myfile, $txt);
  $txt_2 = "$ikinci_satir_ilk_kelime $value', fh) \n";
    fwrite($myfile, $txt_2);
      

      echo($aDoor[$i] . " ");
      echo "<br>";

    }
fwrite($myfile, $sabitsatirlar_kapama);
  }
fclose($myfile);
?>
    
    </td>
  </tr>
<tr><td>Yukarıdaki dosyalar için PYTHON dosyası oluşturuldu...</td></tr>
<tr><td><a href="FTPyeAT.py">indir</td></tr>
</table>

</div>
</td>
</font>