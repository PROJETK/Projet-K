<html>
	<head>
		<title>
			Add Object
		</title>
	</head>



	<body>

		<div>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Cat</th>
						<th>Possesseur</th>
						<th>Appartenant</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include_once 'Object.php';

					$objectList = array();

					for ($i = 0; $i < 10; $i++) {
						$objectList[] = new Object("obj $i", "cat $i", "admin", "moi");
					}

					foreach ($objectList as $obj) {
						echo '<tr>';
						echo '<td>' . $obj->getName() . '</td>';
						echo '<td>' . $obj->getCategorie() . '</td>';
						echo '<td>' . $obj->getPossesseur() . '</td>';
						echo '<td>' . $obj->getAppartenant() . '</td>';
						echo '</tr>';
					}
					?>
				</tbody>>
			</table>
		</div>



	</body>

</html>