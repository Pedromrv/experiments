<!DOCTYPE html>
<html>
	<head>
		<!--BOOTSRAP CDN-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<meta charset="utf-8">
		<title>Template</title>
	</head>
	<body>

		<!--HEAD BANNER-->
		<div class="jumbotron text-center">
			<h1>TITLE</h1>
			<p>slogan</p>
		</div>

		<!--MAIN PAGE-->
		<div class="container-fluid">
			<div class="row">

				<!--CENTER MAIN COLUMN-->
				<div class="col-sm-8 col-offset-sm-2">

					<!--FORM-->
					<form action="" method="post" class="form-horizontal">

						<!--USERNAME-->
						<div class="form-group">
							<label for="username" class="col-sm-3">Username </label>
							<div class="col-sm-8">
								<input type="text" name="username" id="username" class="form-control">
							</div>
						</div>

						<!--PASSWORD-->
						<div class="form-group">
							<label for="password" class="col-sm-3">password </label>
							<div class="col-sm-8">
								<input type="password" name="password" id="password" class="form-control">
							</div>
						</div>

						<!--REMEMBER ME-->
						<div class="form-group">
							<label for="remember_me">Remeber Me </label>
							<input type="checkbox" name="remember_me" id="remember_me">
						</div>

						<!--SUBMIT BUTTON-->
						<div class="text-center">
							<button type="submit" class="btn btn-lg">LOG IN</button>			
						</div>
					</form>
					
				</div>
				
			</div>
		</div>

		<!--FOOTER-->
		<div class="jumbotron text-center">
			<h4>Designed by Jamal Interprises</h4>
			<q><i>Because the lulz demands it</i></q>
		</div>
	</body>
</html>