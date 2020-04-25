<!DOCTYPE html>
<html>
<head>
	<title>covid-19</title>
</head>
<body>
		<FORM ACTION="proses.php" method="post" name="input">
			<select name="wilayah">
				<option value="dki jakarta">dki jakarta</option>
				<option value="banten">banten</option>
				<option value="jawa barat">jawa barat</option>
				<option value="jawa tengah">jawa tengah</option>
			</select><br>
			<?php 
			date_default_timezone_set('asia/jakarta');
			echo date('d-m-Y H:i:s');
			 ?><br>
			  <label>nama operator</label>
			 <input type="text" name="namaoperator"><br>
			 <label>nim</label>
			 <input type="text" name="nim"><br>
			 <label>positif</label>
			 <input type="text" name="positif"><br>
			 <label>dirawat</label>
			 <input type="text" name="dirawat"><br>
			 <label>sembuh</label>
			 <input type="text" name="sembuh"><br>
			 <label>Meninggal</label>
			 <input type="text" name="meninggal"><br>
			<input type="submit" name="pilih" value="pilih">
		</FORM>
</body>
</html>