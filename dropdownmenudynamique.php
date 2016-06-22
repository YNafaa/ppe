<body>
<h1>Application de gestion</h1>

<h2>Afficher les animaux par espece</h2>
	<form action="Listeparespece.php" method="post"><select name="propriete">
		<?php
				@mysql_connect("localhost", "root" , "");

				mysql_select_db("bdd");
		
		$req ='select * from table';		//On fait la requete
				$resultat = mysql_query($req);
				$ligne=mysql_fetch_assoc($resultat);
				if(!$resultat) echo mysql_error();
				
				while($ligne)
				{
					echo '<option>'.$ligne[nom].'</option>';
					$ligne=mysql_fetch_assoc($resultat);
				}

		?>
		<input type="submit" name="Valider">

	</select></form>

</body>
</center>


</html>