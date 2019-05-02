<?php
header('Content-Type: text/html; charset=utf-8');
?>

<link rel="stylesheet" href="style.css">

<?php
$logosuz_dir = 'D:\Logo\logosuz\*.{mxf,mp4,mov,mpg,MXF,MP4,MOV,MPG}';
$logolu_dir = 'D:\Logo\logolu\*.{mxf,mp4,mov,mpg,MXF,MP4,MOV,MPG}';

$python_sabit_satirlar = "import os
import shutil\n\n";

$move="MAIN=r'D:/Logo/biten/'
DIRS=r'D:/Logo/logosuz/'
for root,subdirs,files in os.walk(DIRS):
    print('root',root)
    print('subdirs',subdirs)
    print('files',files)
for file in files:
	path=os.path.join(root,file)
	shutil.move(path,MAIN)
";

$cmd_ilk_satir = "cmd=('";
$cmd_son_satir="os.system(cmd)\n\n";

$python_file = 'C:\\xampp\\htdocs\\Logo\\robot\\robot.py';
$logofile = 'D:/Logo/belgesel_hd_new.png';
$ftp ="os.system('winscp.com /script=SyncToRemoteScript.txt')\n\n";

$dosyalar = glob($logosuz_dir, GLOB_BRACE);
print_r($dosyalar);
fopen($python_file, "w") or die("Unable to open file!");
$myfile = fopen($python_file, "a") or die("Unable to open file!");


fwrite($myfile, $python_sabit_satirlar);

	foreach ($dosyalar as $dosyaadi)  {
	$dosyaadi =  basename($dosyaadi);
	fwrite($myfile, $cmd_ilk_satir);

	$ffmpeg_txt = "D:/Logo/ffmpeg.exe -i \"D:/Logo/logosuz/$dosyaadi\" -i $logofile -filter_complex \"[0:v][1:v] overlay=40:40\"  \"D:/logo/logolu/$dosyaadi"."_logolu.mp4\"' )\n";

    fwrite($myfile, $ffmpeg_txt);
	fwrite($myfile, $cmd_son_satir);
					
	}

fwrite($myfile, $ftp);
fwrite($myfile, $move);

fclose($myfile);



// İş bitiminde yapılan işi raporla -- py dosyasında değil o yüzden calışmıyor...
$biten_dosyalar_directory="D:\Logo\biten\*.{mxf,mp4,mov,mpg,MXF,MP4,MOV,MPG}";

$dosyalar_listele = glob($biten_dosyalar_directory, GLOB_BRACE);
$rapor_file = fopen("rapor.txt", "w") or die("dosya acilamadi");

	foreach ($dosyalar_listele as $biten_dosyaadi)  {
		$biten_dosyaadi =  basename($biten_dosyaadi);
		fwrite($rapor_file, $biten_dosyaadi.chr(13)."".chr(10));
	}
// rapor sonu
?>

