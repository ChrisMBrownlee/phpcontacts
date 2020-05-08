<?php
	require "header.php";
?>
	<main>
		<div class="wrapper-main">
			<section class="section-default">
				<?php
					if (isset($_SESSION['userId'])){
						echo '<p class="login-status">You are logged in!</p>';
						header("Location: http://www.gtrcoders.com/zcbrownlee/contacts.php", true, 301);
						exit();
						//require "contacts.php";
					}else{
						echo '<p class="login-status">You are logged out!</p>';
					}
				 ?>
			</section>
		</div>
	</main>

<?php
	require "footer.php";
?>
