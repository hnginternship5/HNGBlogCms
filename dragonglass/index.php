<?php include('common.php') ?>

<!DOCTYPE html>
<html>
	<?php include 'includes/head.php'; ?>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<div class="parent">
		<div class="container padd">
			<div class="row">
				<div class="col-sm-3">
					<?php include'includes/nav.php'; ?>
				</div>

				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-12 status-area">
								<div class="toolbar">
									<button class="tool fa fa-underline"  onclick="document.execCommand('underline', false, '');"></button>
									<button class="tool fa fa-italic" onclick="document.execCommand('italic', false, '');"></button>
									<button class="tool fa fa-bold" onclick="document.execCommand('bold', false, '');"></button>
									<button class="tool fa fa-scissors" onclick="document.execCommand('cut',false,'')"></button>
									<button class="tool fa fa-strikethrough" onclick="document.execCommand('strikeThrough',false,'')"></button>
									<button class="tool fa fa-trash" onclick="document.execCommand('delete',false,'')"></button>
									<button class="tool fa fa-scribd" onclick="document.execCommand('selectAll',false,'')"></button>
									<button class="tool fa fa-align-center" onclick="document.execCommand('justifyCenter',false,'')"></button>
									<button class="tool fa fa-align-left" onclick="document.execCommand('justifyLeft',false,'')"></button>
									<button class="tool fa fa-align-right" onclick="document.execCommand('justifyRight',false,'')"></button>
								</div>
								<div class="editor" contentEditable=true data-text="Please enter a post"></div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12">
										<h1>LATEST STORIES</h1>
									</div>
								</div>
								<div class="row post">
									<div class="col-sm-2">
										<img class="img-responsive profile-pic" src="images/fiverr.jpg" alt="author picture">
									</div>
									<div class="col-sm-10">
										<h6>April 10th, 2019</h6>
										<p>We need to ask whether our technological progress is antagonistic to the place that we call home. was recently revealed that Coca-Cola currently produces three million tonnes of plastic packaging a year which was.....</p>

										<div class="col-sm-12">
										<div class="row">
											<div class="col-xs-6 text-left"><div class="row"><h6>The verge</h6></div></div>
											<div class="col-xs-6 text-right"><h6>Comments</h6></div>
										</div>
									</div>
									</div>
								</div>

								<div class="row post">
									<div class="col-sm-2">
										<img class="img-responsive profile-pic" src="images/fiverr.jpg" alt="author picture">
									</div>
									<div class="col-sm-10">
										<h6>April 10th, 2019</h6>
										<p>We need to ask whether our technological progress is antagonistic to the place that we call home. was recently revealed that Coca-Cola currently produces three million tonnes of plastic packaging a year which was.....</p>

										<div class="col-sm-12">
										<div class="row">
											<div class="col-xs-6 text-left"><div class="row"><h6>The verge</h6></div></div>
											<div class="col-xs-6 text-right"><h6>Comments</h6></div>
										</div>
									</div>
									</div>
								</div>

								<div class="row post">
									<div class="col-sm-2">
										<img class="img-responsive profile-pic" src="images/fiverr.jpg" alt="author picture">
									</div>
									<div class="col-sm-10">
										<h6>April 10th, 2019</h6>
										<p>We need to ask whether our technological progress is antagonistic to the place that we call home. was recently revealed that Coca-Cola currently produces three million tonnes of plastic packaging a year which was.....</p>

										<div class="col-sm-12">
										<div class="row">
											<div class="col-xs-6 text-left"><div class="row"><h6>The verge</h6></div></div>
											<div class="col-xs-6 text-right"><h6>Comments</h6></div>
										</div>
									</div>
									</div>
								</div>

								<div class="row post">
									<div class="col-sm-2">
										<img class="img-responsive profile-pic" src="images/fiverr.jpg" alt="author picture">
									</div>
									<div class="col-sm-10">
										<h6>April 10th, 2019</h6>
										<p>We need to ask whether our technological progress is antagonistic to the place that we call home. was recently revealed that Coca-Cola currently produces three million tonnes of plastic packaging a year which was.....</p>

										<div class="col-sm-12">
										<div class="row">
											<div class="col-xs-6 text-left"><div class="row"><h6>The verge</h6></div></div>
											<div class="col-xs-6 text-right"><h6>Comments</h6></div>
										</div>
									</div>
									</div>
								</div>

								<div class="row post">
									<div class="col-sm-2">
										<img class="img-responsive profile-pic" src="images/fiverr.jpg" alt="author picture">
									</div>
									<div class="col-sm-10">
										<h6>April 10th, 2019</h6>
										<p>We need to ask whether our technological progress is antagonistic to the place that we call home. was recently revealed that Coca-Cola currently produces three million tonnes of plastic packaging a year which was.....</p>

										<div class="col-sm-12">
										<div class="row">
											<div class="col-xs-6 text-left"><div class="row"><h6>The verge</h6></div></div>
											<div class="col-xs-6 text-right"><h6>Comments</h6></div>
										</div>
									</div>
									</div>
								</div>
							<div class="col-sm-6"></div>
							<div class="col-sm-6"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	</div>

	<script src="app.js"></script>
</body>
</html>
