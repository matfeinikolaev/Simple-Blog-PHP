<?php require 'src/partials/header.php' ?>
	<form method='POST' action='/regist' class='form-signin'>
			<h1 class="h3 mb-3 font-weight-normal">Sign up</h1><br>
		 <label for="username" class="sr-only">Username</label>
		<input type="text" name="username" id="username" placeholder="Username" class="form-control">
		<br>
		<label for="password" class="sr-only">Password</label>
		<input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
		<br>
		<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block">
	</form>
</body>
</html>
