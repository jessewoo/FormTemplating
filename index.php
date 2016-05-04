<!DOCTYPE html>
<html lang="en">
  
<? include 'includes/meta.php'; ?>
  <body>

	<? include 'includes/navbar.php'; ?>

    <div class="container" id="main_content">
		<div class="row">
	        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="well well-sm text-center" id="instructionIWA">
					This is where the IWA widget will be placed
				</div>

				<div id="ErrorMessageContainer"></div>

				<div id="WidgetContainer">
					<form role="form">

					</form>
				</div>

				<!-- Pagination -->
				<nav class="hide text-center" id="questionsPagination">
					<ul class="pagination">
						<li id="firstname-question">
							<a href="#firstname-question">1: First Name</a>
						</li>
						<li id="homeaddress-question">
							<a href="#homeaddress-question">2: Home Address</a>
						</li>
						<li id="city-question">
							<a href="#city-question">3: City of Residence</a>
						</li>
					</ul>
				</nav>

			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<? include 'includes/side.php'; ?>
			</div>

		</div>
    </div><!-- /.container -->

	<!-- FOOTER -->
	<? include 'includes/footer.php'; ?>
	<? include 'includes/javascript.php'; ?>
  </body>
</html>
