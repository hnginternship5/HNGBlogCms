<!DOCTYPE html>
	<html>
		<?php include 'includes/head.php'; ?>
	<body>
		<div class="parent">
			<div class="container padd">
				<div class="row">
					<div class="col-sm-3">
						<?php include'includes/nav.php'; ?>
					</div>

					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-6">
								<h4 class="text-left my-journal">MY JOURNAL</h4>
							</div>
							<div class="col-sm-6">
								<h4 class="text-right"><a href="/" class="was-cta">Write a story</a></h4>
							</div>
						</div>
						<br><br>
						<div>
							<div class="draft-heading">
								<!-- replace 10 in sub tag with a php variable for number of published works -->
								<span class="published-link"><a href="/">Published</a><sub class="no_of_pub font-italic">10</sub></span> <a href="/" class="drafts-link">Drafts</a> <hr>
							</div>

							<div class="drafts-section">
								<!-- if there are drafts, do some php if...else statement to view drafts -->
								<!-- No drafts for now as this is a basic implementation -->
								<div class="drafts">
									<p class="text-center">You have no drafts</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>	
	
