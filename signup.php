<?php
	require "header.php";
?>
	<main>
    <div class="wrapper-main">
		    <section class="section-default">
        <h1>Signup</h1>
				<?php
				if (isset($_GET['error'])){
					if ($_GET['error'] == "emptyfields"){
						echo '<p class="signup-error">Fill in all fields</p>';
					}
					else if(isset($_GET['error']) == 'invalidmailuid'){
						echo '<p class="signup-error">Invalid username and email</p>';
					}
					else if(isset($_GET['error']) == 'invaliduid'){
						echo '<p class="signup-error">Invalid username</p>';
					}
					else if(isset($_GET['error']) == 'invalidmail'){
						echo '<p class="signup-error">Invalid email</p>';
					}
					else if(isset($_GET['error']) == 'passwordcheck'){
						echo '<p class="signup-error">Passwords do not match</p>';
					}
					else if(isset($_GET['error']) == 'usertaken'){
						echo '<p class="signup-error">Username has been taken</p>';
					}
				}else if(isset($_GET['signup']) == 'success'){
					echo '<p class="signup-success">Signup successful</p>';
				}
				 ?>
        <form class="form-signup" action="includes/signup.inc.php" method="post">
          <input type="text" 		 name="uid" 			placeholder="Username">
          <input type="text" 		 name="mail" 			placeholder="Email">
          <input type="password" name="pwd" 			placeholder="Password">
          <input type="password" name="pwd-check" placeholder="Repeat password">
          <button type="submit"  name="signup-submit">Signup</button>
        </form>
      </section>
    </div>
	</main>

<?php
	require "footer.php";
?>
