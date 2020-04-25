<?php
echo "<form method=post action=input.php>";
echo "<button type=submit>INPUT</button>";        
echo "</form> ";    
if (isset($_POST['pilih'])) {
	$wl=$_POST['wilayah'];
	$namaoperator=$_POST['namaoperator'];
	$nim=$_POST['nim'];
	$positif=$_POST['positif'];
	$dirawat=$_POST['dirawat'];
	$sembuh=$_POST['sembuh'];
	$meninggal=$_POST['meninggal'];
	
    echo "data pemantauan covid19 wilayah <b>$wl</br>";
	echo date('d-m-Y H:i:s');
	echo "<br>$namaoperator</b>/<b>$nim</br>";
echo "<table border=1>";
    echo "<tr><th>POSITIF</th><th>DIRAWAT</th><th>SEMBUH</th><th>MENINGGAL</th></tr>";
  
  
        echo "<tr>
            <td>".$positif."</td>      
            <td>".$dirawat."</td>
            <td>".$sembuh."</td>
            <td>".$meninggal."</td>
              </tr>";
  
echo "</table>";

}
 ?>