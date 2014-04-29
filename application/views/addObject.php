<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Ajout d'un objet</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="ajouter un objet" />
</head>
<body>
	<div>
		<?php echo validation_errors(); ?>
		<form action="<?php echo base_url('home/ajouterObjet');?>" method="post">
			utilisateur : <input type="text" name="user"/><br/>
			nom de l'objet : <input type="text" name="name"/><br/>
			<input type="submit" value="envoyer"/>
		</form>
	</div>
</body>
</html>