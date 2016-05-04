<!DOCTYPE html>
<html lang="en">
  
<? include 'includes/meta.php'; ?>

  <body>
	<? include 'includes/navbar.php'; ?>

    <div class="container" id="main_content">
		<div class="row">
	        <div class="col-md-8 col-sm-12">

	          <h2>Please fill out the form</h2>
				<form method='post'>
					<div class="form-group">
					<label for="username">Name</label>
					<input class="form-control" type="text" id="uName" name="username" placeholder="Name" value="" maxlength="15" />
					</div>
					<br>
					<label for="message">Message</label>
					<div class="form-group">
					<input class="form-control" type="text" id="uMessage" name="message" placeholder="Message" value="" maxlength="100" />
					</div>
					<br>
					<button class="btn btn-primary" id="submit" type="submit">Submit!</button>
					<button class="btn btn-default" type="reset">Clear!</button>
				</form>


			</div>
			<? include 'includes/side.php'; ?>

		</div>	

    </div><!-- /.container -->

	<!-- FOOTER -->
	<? include 'includes/footer.php'; ?>
	<? include 'includes/javascript.php'; ?>
    
  </body>
</html>
