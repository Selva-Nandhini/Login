<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="login.php" method="POST">
            <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<label for="username"></label>
					<input type="text" class="login__input" name="uname" id="username" placeholder="User name" autocomplete autofocus required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<label for="password"></label>
					<input type="password" class="login__input" name="password" id="password" placeholder="Password" required>
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		 <div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
	</div>
</div>