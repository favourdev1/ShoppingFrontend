<!DOCTYPE html>
<html lang="en">


<?php include_once('header.php')?>

<body>
	<!-- main -->
	<!-- navbar -->

	<?php include_once('navbar.php');?>


	<div class="main-wrapper">
		<!-- navbar vertical -->
		<!-- navbar -->
	   <?php include_once('sidebar.php')?>


<nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1" id="offcanvasExample">
	<div class="navbar-vertical">
		<div class="px-4 py-5 d-flex justify-content-between align-items-center">
			<a href="../index-2.html" class="navbar-brand">
				<img src="../assets/images/logo/freshcart-logo.svg" alt="" />
			</a>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="navbar-vertical-content flex-grow-1" data-simplebar="">
			<ul class="navbar-nav flex-column">
				<li class="nav-item">
					<a class="nav-link " href="index.html">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-house"></i></span>
							<span>Dashboard</span>
						</div>
					</a>
				</li>
				<li class="nav-item mt-6 mb-3">
					<span class="nav-label">Store Managements</span>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="products.html">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-cart"></i></span>
							<span class="nav-link-text">Products</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="categories.html">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
							<span class="nav-link-text">Categories</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navOrders" aria-expanded="false" aria-controls="navOrders">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-bag"></i></span>
							<span class="nav-link-text">Orders</span>
						</div>
					</a>
					<div id="navOrders" class="collapse " data-bs-parent="#sideNavbar">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link " href="order-list.html">List</a>
							</li>
							<!-- Nav item -->
							<li class="nav-item">
								<a class="nav-link " href="order-single.html">Single</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="vendor-grid.html">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-shop"></i></span>
							<span class="nav-link-text">Sellers / Vendors</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="customers.html">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-people"></i></span>
							<span class="nav-link-text">Customers</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  active " href="reviews.html">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-star"></i></span>
							<span class="nav-link-text">Reviews</span>
						</div>
					</a>
				</li>
				<li class="nav-item mt-6 mb-3">
					<span class="nav-label">Site Settings</span>
					<span class="badge bg-light-info text-dark-info">Coming Soon</span>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#!">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-newspaper"></i></span>
							<span class="nav-link-text">Blog</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-images"></i></span>
							<span class="nav-link-text">Media</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#!">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-gear"></i></span>
							<span class="nav-link-text">Store Settings</span>
						</div>
					</a>
				</li>
				<li class="nav-item mt-6 mb-3">
					<span class="nav-label">Support</span>
					<span class="badge bg-light-info text-dark-info">Coming Soon</span>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#!">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-headphones"></i></span>
							<span class="nav-link-text">Support Ticket</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-question-circle"></i></span>
							<span class="nav-link-text">Help Center</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#!">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-infinity"></i></span>
							<span class="nav-link-text">How FreshCart Works</span>
						</div>
					</a>
				</li>

				<li class="nav-item mt-6 mb-3">
					<span class="nav-label">Our Apps</span>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#!">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-apple"></i></span>
							<span class="nav-link-text">Apple Store</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#!">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-google-play"></i></span>
							<span class="nav-link-text">Google Play Store</span>
						</div>
					</a>
				</li>
				<li id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a
								class="nav-link "
								href="#"
								data-bs-toggle="collapse"
								data-bs-target="#navMenuLevelSecond2"
								aria-expanded="false"
								aria-controls="navMenuLevelSecond2"
							>
								Two Level
							</a>
							<div id="navMenuLevelSecond2" class="collapse" data-bs-parent="#navMenuLevel">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link " href="#">NavItem 1</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="#">NavItem 2</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a
								class="nav-link  collapsed "
								href="#"
								data-bs-toggle="collapse"
								data-bs-target="#navMenuLevelThree2"
								aria-expanded="false"
								aria-controls="navMenuLevelThree2"
							>
								Three Level
							</a>
							<div id="navMenuLevelThree2" class="collapse " data-bs-parent="#navMenuLevel">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a
											class="nav-link  collapsed "
											href="#"
											data-bs-toggle="collapse"
											data-bs-target="#navMenuLevelThree3"
											aria-expanded="false"
											aria-controls="navMenuLevelThree3"
										>
											NavItem 1
										</a>
										<div id="navMenuLevelThree3" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
											<ul class="nav flex-column">
												<li class="nav-item">
													<a class="nav-link " href="#">NavChild Item 1</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="#">Nav Item 2</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

			<!-- main -->
			<main class="main-content-wrapper">
				<div class="container">
					<div class="row mb-8">
						<div class="col-md-12">
							<div>
								<!-- page header -->
								<h2>Reviews</h2>
							
							</div>
						</div>
					</div>
					<!-- row -->
					<div class="row">
						<div class="col-xl-12 col-12 mb-5">
							<!-- card -->
							<div class="card h-100 card-lg">
								<div class="p-6">
									<div class="row justify-content-between">
										<div class="col-md-4 col-12 mb-2 mb-md-0">
											<!-- form -->
											<form class="d-flex" role="search">
												<input class="form-control" type="search" placeholder="Search Reviews" aria-label="Search" />
											</form>
										</div>
										<div class="col-lg-2 col-md-4 col-12">
											<!-- main -->
											<select class="form-select">
												<option selected>Select Rating</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
												<option value="4">Four</option>
												<option value="5">Five</option>
											</select>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body p-0">
									<!-- table -->
									<div class="table-responsive">
										<table class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
											<thead class="bg-light">
												<tr>
													<th>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="checkAll" />
															<label class="form-check-label" for="checkAll"></label>
														</div>
													</th>
													<th>Product</th>
													<th>Name</th>
													<th>Reviews</th>
													<th>Rating</th>
													<th>Date</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewOne" />
															<label class="form-check-label" for="reviewOne"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Haldiram's Sev Bhujia</a></td>
													<td>Barry McKenzie</td>

													<td>
														<span class="text-truncate">Nice & fresh oranges with value for money..</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewTwo" />
															<label class="form-check-label" for="reviewTwo"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">NutriChoice Digestive</a></td>
													<td>Dale Jenkins</td>

													<td>
														<span class="text-truncate">Nice product 👌 quality 👌...</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="checkAllThree" />
															<label class="form-check-label" for="checkAllThree"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Cadbury 5 Star Chocolate</a></td>
													<td>Michael Phillips</td>

													<td>
														<span class="text-truncate">Good quality product delivered...</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewFour" />
															<label class="form-check-label" for="reviewFour"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Onion Flavour Potato</a></td>
													<td>James Parker</td>

													<td>
														<span class="text-truncate">Excellent Quality by an Indian company..</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewFive" />
															<label class="form-check-label" for="reviewFive"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Salted Instant Popcorn</a></td>
													<td>William Hansen</td>

													<td>
														<span class="text-truncate">Very expensive. Cheaper at local stores...</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewSix" />
															<label class="form-check-label" for="reviewSix"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Blueberry Greek Yogurt</a></td>
													<td>Helen Speller</td>

													<td>
														<span class="text-truncate">Etiam in felis eget eros dictum</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewSeven" />
															<label class="form-check-label" for="reviewSeven"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Britannia Cheese Slices</a></td>
													<td>Larry Anderson</td>

													<td>
														<span class="text-truncate">is good but had to wait for a late delivery.</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewEight" />
															<label class="form-check-label" for="reviewEight"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Kellogg's Original Cereals</a></td>
													<td>William McCulloch</td>

													<td>
														<span class="text-truncate">Very expensive. Cheaper at local stores</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewNine" />
															<label class="form-check-label" for="reviewNine"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Slurrp Millet Chocolate</a></td>
													<td>Louise Brown</td>

													<td>
														<span class="text-truncate">My toddler loved the flavor and enjoys...</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pe-0">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="reviewTen" />
															<label class="form-check-label" for="reviewTen"></label>
														</div>
													</td>

													<td><a href="#" class="text-reset">Amul Butter - 500 g</a></td>
													<td>John Meyer</td>

													<td>
														<span class="text-truncate">Good Product but packaging needs...</span>
													</td>
													<td>
														<div>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-warning"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
															<span><i class="bi bi-star-fill text-light"></i></span>
														</div>
													</td>
													<td>23 Nov,2022</td>
													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="border-top d-md-flex justify-content-between align-items-center p-6">
										<span>Showing 1 to 8 of 12 entries</span>
										<nav class="mt-2 mt-md-0">
											<ul class="pagination mb-0">
												<li class="page-item disabled"><a class="page-link" href="#!">Previous</a></li>
												<li class="page-item"><a class="page-link active" href="#!">1</a></li>
												<li class="page-item"><a class="page-link" href="#!">2</a></li>
												<li class="page-item"><a class="page-link" href="#!">3</a></li>
												<li class="page-item"><a class="page-link" href="#!">Next</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>

		<!-- Libs JS -->
<!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>

	</body>

<!-- Mirrored from freshcart.codescandy.com/dashboard/reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 01:18:33 GMT -->
</html>
