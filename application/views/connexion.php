<?php echo validation_errors(); ?>
<form action="<?php echo base_url();?>" method="post">
<input type="text" name="nickname"  placeholder="pseudo"/>
<input type="password" name="password"  placeholder="mot de passe"/>
<input type="submit" class="ui blue submit button" value="Connexion" />
</form>