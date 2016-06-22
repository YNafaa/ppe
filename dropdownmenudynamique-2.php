<?php
				@mysql_connect("localhost", "root" , "");

				mysql_select_db("bdpartiel");
?>


<!Doctype html>

<html>

<head>
<meta charset="utf8">
<title>Liste trouvée</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">



</head>

<body>

<center><h1>Liste trouvée</h1></center>

<center>
<table border=1>
<tr><th>ID</th><th>Nom</th><th>Nom generique</th></tr>
<?php
		
		$req ='select a.id,a.nom as anom , g.nom as gnom from animal a, generique g where a.id_generique = g.id and g.nom = "'.$_POST["propriete"].'"';		//On fait la requete
				$resultat = mysql_query($req);
				$ligne=mysql_fetch_assoc($resultat);
				if(!$resultat) echo mysql_error();
				
				while($ligne)
				{	

					echo"<tr>";
					echo "<td>".$ligne["id"]."</td><td>".$ligne["anom"]."</td><td>".$ligne["gnom"]."</td><td>" ;
					echo"</tr>";
					$ligne=mysql_fetch_assoc($resultat);
				}

?>
</table>
</center>
</body>

</html>