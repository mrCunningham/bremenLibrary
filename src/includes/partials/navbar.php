<!-- Header Above Navbar -->
	<div class="col-sm-12 col-md-12">
		<div class="header">
			<div class="row">
				<div class="col-sm-6 col-md-7 col-lg-8">
					<a href="index.php">
						<img src="../assets/header/bpllogo.png">
					</a>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4 pt-1">
					<div class="row">
						<div class="col pt-1`">
							<button class="btn d-none d-lg-block btn-sm">Your Account</button>
							<div class="col d-none d-lg-block" id="search">
								<form id="searchBar">
									<div class="form-group row no-gutters" id="search">
										<div class="col">
										<input class="form-control form-control-sm" type="text" placeholder="Search" aria-label="Search">
										</div>
										<button type="submit" class="btn btn-gray btn-sm"><i class="fa fa-play fa-3" aria-hidden="true"></i></button>
									</div>
									<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="searchCatalog" id="searchCatalog" value="catalog">
											<label class="form-check-label" for="searchCatalog">Catalog</label>
									</div>
									<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="searchWebsite" id="searchWebsite" value="website">
											<label class="form-check-label" for="searchWebsite">Website</label>
									</div>
								</form>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>

	<!-- Navbar -->
	<div class="col-sm-12 col-md-12">
		<nav class="navbar navbar-expand-lg navbar-light bg-library">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSearchToggle">
				<span><i class="fa fa-search" aria-hidden="true"></i></span>
			</button>

			<button class="btn d-block d-lg-none btn-sm">Your Account</button>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarToggle">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown">About</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item" href="depts.php">Our Collection</a>
							<a class="dropdown-item" href="#">eBooks &amp; Digital Materials</a>
							<a class="dropdown-item" href="#">Hours</a>
							<a class="dropdown-item" href="#">Location</a>
							<a class="dropdown-item" href="#">Policies</a>
							<a class="dropdown-item" href="#">Computer &amp; Internet</a>
							<a class="dropdown-item" href="#">Staff &amp; Board</a>
							<a class="dropdown-item" href="#">Services We Provide</a>
							<a class="dropdown-item" href="#">Library History</a>
							<a class="dropdown-item" href="#">Our Mission</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown">Research</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item" href="#">Catalog</a>
							<a class="dropdown-item" href="#">Databases</a>
							<a class="dropdown-item" href="#">Gale Online Classes</a>
							<a class="dropdown-item" href="#">Lynda.com Tutorials</a>
							<a class="dropdown-item" href="#">Genealogy</a>
							<a class="dropdown-item" href="#">Inspire Online Library</a>
							<a class="dropdown-item" href="#">High School, College</a>
							<a class="dropdown-item" href="#">Homework Hotline</a>
							<a class="dropdown-item" href="#">WorldCat</a>
							<a class="dropdown-item" href="#">Federal Government</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown">Kids</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item" href="#">Programs</a>
							<a class="dropdown-item" href="#">Special Features</a>
							<a class="dropdown-item" href="#">Computers</a>
							<a class="dropdown-item" href="#">Internet Links for Kids</a>
							<a class="dropdown-item" href="#">Items to Check Out</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown">Young Adults</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item" href="#">Blog</a>
							<a class="dropdown-item" href="#">Young Adult Volunteer Team</a>
							<a class="dropdown-item" href="#">Computers</a>
							<a class="dropdown-item" href="#">YA Staff Picks</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown">Get Connected</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item" href="#">Contact Us</a>
							<a class="dropdown-item" href="#">Book Discussions</a>
							<a class="dropdown-item" href="#">Recommended Titles</a>
							<a class="dropdown-item" href="#">Text Alerts</a>
							<a class="dropdown-item" href="#">Social Media</a>
							<a class="dropdown-item" href="#">Blog</a>
							<a class="dropdown-item" href="#">Our Community</a>
							<a class="dropdown-item" href="#">Mobile Printing</a>
						</div>
					</li>

					<li class="nav-item">
		              <a class="nav-link" href="#">Friends</a>
		            </li>

		            <li class="nav-item">
		              <a class="nav-link" href="#">Calendar</a>
		            </li>
				</ul>
		    </div>

		    <div class="collapse navbar-collapse" id="navbarSearchToggle">
				<div class="d-block d-lg-none pt-2">
					<?php include "../includes/partials/header-search.php" ?>
				</div>
			</div>
		</nav>
	</div>