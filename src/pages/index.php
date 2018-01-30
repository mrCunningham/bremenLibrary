<!DOCTYPE html>
<html>
<head>
	<title>Bremen Public Library</title>

	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php include "../includes/css.php" ?>

</head>
<body>
	<div class="container">
		<div class="row">
			<?php include "../includes/partials/navbar.php" ?>
		</div>
		<div class="row pt-3">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8 col-lg-8">
						<?php include "../includes/partials/carousel.php" ?>
					</div>
					<div class="col-md-4 col-lg4">
						<div class="dropdown">
  							<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    							eBooks &amp; Digital Materials
  							</button>
			  				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    				<a class="dropdown-item" href="digital.htm">eBooks &amp; Digital Materials</a>
			    				<a class="dropdown-item" href="http://iddc.lib.overdrive.com/">OverDrive</a>
			    				<a class="dropdown-item" href="http://hoopladigital.com">Hoopla</a>
			    				<a class="dropdown-item" href="#">Help Sheets &amp; Handouts</a>
			    				<a class="dropdown-item" href="https://meet.libbyapp.com/">Libby</a>
			  				</div>
						</div>		
						<h3>Upcoming Events</h3>
						<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=bremenpubliclibrary%40gmail.com&amp;color=%233ea739&amp;ctz=America%2FNew_York" style="border-width:0" scrolling="no"  id="calendar" >
						</iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php include "../includes/partials/footer.php" ?>
			</div>
		</div>
	</div>
	<?php include "../includes/scripts.php" ?>
</body>
</html>