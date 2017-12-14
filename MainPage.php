<?php
	SESSION_START();
?>
<html>
	<head>
		<style>
			a:link, a:visited{
				display: inline-block;
				background-color: red;
			} 
		</style>
	</head>
	<body>
		<?php
		$mysqli= new mysqli("localhost","porges.e","314159","porges.e");
		?>
		<a href="https://turing.gjh.sk/~souc.j/Quezeet/MainPage.php"><h1>Quezeet</h1></a></br>
		<tr>
		<th><a href="https://turing.gjh.sk/~souc.j/Quezeet/MainPage.php?filter=geo">Geografia</a></th>
		<th><a href="https://turing.gjh.sk/~souc.j/Quezeet/MainPage.php?filter=mat">Matematika</a></th>
		<th><a href="https://turing.gjh.sk/~souc.j/Quezeet/MainPage.php?filter=bio">Biologia</a></th>
		</tr>
	</body>
</html>