<?php
header('Content-Type: text/html; charset=utf-8');
?>

<link rel="stylesheet" href="style.css">

	<script language="JavaScript">
		function selectAll(source) {
			checkboxes = document.getElementsByName('formDoor[]');
			for(var i in checkboxes)
				checkboxes[i].checked = source.checked;
		}
	</script>


<?php
$videodir = 'E:\Logo\logosuz\*.{mxf,mp4,mov,mpg,MXF,MP4,MOV,MPG}';
//$videodir = 'L:\*.{mxf,mp4,mov,mpg,MXF,MP4,MOV,MPG}';
$files = glob($videodir, GLOB_BRACE);


?>
<div class="logo"></div>
<div class="ara"></div>
<div class="sablon">

	<form action="gonder.php" method="POST">
	<table>
			<tr>
				<td><input type="submit" value="Logo Bindirme Dosyası Oluştur."></td>
			</tr>
			<tr>
				<td><input type="checkbox" id="selectall" onClick="selectAll(this)" />Hepsini Seç<br><br></td>
			</tr>
			<tr>
				<td><font face="verdana" size="2" color="maroon"><b>
						<?php
						foreach ($files as $value)  {
						$value =  basename($value);
						
						

						?>
								<input type="checkbox" name="formDoor[]" value="<?php echo $value ?>"><?php echo $value ?><br>


						<?php
						}
						?>
				</td>
			</tr>
			<tr><td><input type="submit" value="Logo Bindirme Dosyası Oluştur."></td></tr>
	</table>
	
	</form>


</div>
<b>
</font>

