<?php require_once("top.php"); ?>
<section id="login">
<h1 class="one">Welcome to Breshna MIS</h1>
<form method="post"action="admin_panel.php">
<section class="input-group">
<span class="input-group-addon">
	Username:
	</span>
	<input class="form-control" type="text"name="username">
	</section>
	
	<section class="input-group">
<span class="input-group-addon">
	Password:
	</span>
	<input  class="form-control"  type="password"name="password">
	</section>
	<input class="btn btn-primary" type="submit"value="Register">
	</form>
</section>
<?php require_once("footer.php"); ?>

