<!DOCTYPE html>
<html>

<head>

<title>Monitorowanie</title>
<link rel="stylesheet" href="styl.css" type="text/css" />
</head>

<body>
<ul>
  <li><a class="active" href="s.glowna.html">Strona główna</a></li>
  <li><a href="strona1.php">Narzędzia do monitorowania</a></li>
  <li><a href="zastosowanie.html">Technologie monitorowania sieci</a></li>
   <li><a href="strona2.php">Kontakt</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Kontakt </h2>
  <h3></h3>
  <p></p>

</div>

 <?php 
$conn = new mysqli("localhost", "root", " ", "kontakty") or die("blad");

$wynik = $conn->query("SELECT * FROM kontakt1");

if($wynik->num_rows > 0){
	
	while( $wiersz = $wynik->fetch_assoc() ){
		
		echo "Imie: " . $wiersz["Imie"] . "; ";
		echo "Nazwisko: " . $wiersz["Nazwisko"] . "; ";
		echo "E-mail: " . $wiersz["E-mail"] . "; ";
		echo "Telefon: " . $wiersz["Telefon"] . ";<br>";
	}
	
}else {
	echo "baza pusta";
}


$conn->close(); 

?> 


</body>
</html>