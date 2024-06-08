	<DOCTYPE html>
	<html> lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Membuat Tabel Dengan Perulangan For</title> 	
	</head>
	<body>
		<table border="1" cellpadding="10" cellpadding="0">
		<?php
			for($i=1;$1<=2;$i++) {
				echo"<tr>";
					for($k=1;$k<=4;$k++) {
						echo"<td>$1,$k</td>";
					}
				echo"</tr>";		
					
			}		
	?>	
		</table>
	</body>
	</html>
