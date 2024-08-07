<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta content="Stargames Admin portal, Private" name="description">
		<meta content="Stargames" name="author">
		<meta name="keywords" content="Stargames admin portal"/>

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}') }}" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

		<!-- Title -->
		<title>{{ $general->siteName($pageTitle ?? '') }}</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

		<!-- Dashboard css -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

		<!-- Sidemenu css -->
		<link href="{{ asset('assets/plugins/toggle-sidebar/full-sidemenu-dark.css') }}" rel="stylesheet" />

		<!--Daterangepicker css-->
		<link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

		<!-- Sidebar Accordions css -->
		<link href="{{ asset('assets/plugins/accordion1/css/easy-responsive-tabs.css') }}" rel="stylesheet">

		<!-- Rightsidebar css -->
		<link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!---Font icons css-->
		<link href="{{ asset('assets/plugins/iconfonts/plugin.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/iconfonts/icons.css') }}" rel="stylesheet" />
		<link  href="{{ asset('assets/fonts/fonts/font-awesome.min.css') }}" rel="stylesheet">

        @stack('style-lib')
        @stack('style')


	</head>
	<body class="app sidebar-mini rtl">
        <!--Global-Loader-->
		<div id="global-loader">
			<img src="{{ asset('assets/images/icons/loader.svg') }}" alt="loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!--app-header-->
				<div class="app-header header d-flex">
					<div class="container-fluid">
						<div class="d-flex">
						    <a class="header-brand" href="index.html">
								<img src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}" class="header-brand-img main-logo" alt="logo">
								<img src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}" class="header-brand-img icon-logo" alt="logo">
							</a><!-- logo-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<a href="#" data-toggle="search" class="nav-link nav-link  navsearch"><i class="fa fa-search"></i></a><!-- search icon -->
							<div class="header-form">
								<form class="form-inline">
									<div class="search-element mr-3">
										<input class="form-control" type="search" placeholder="Search" aria-label="Search">
										<span class="Search-icon"><i class="fa fa-search"></i></span>
									</div>
								</form><!-- search-bar -->
							</div>
							<ul class="nav navbar-nav horizontal-nav header-nav">
								<li class="mega-dropdown nav-item">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="fe fe-grid mr-2"></i>UI Kit <i class="fa fa-angle-down ml-1"></i>
									</a>
									<ul class="dropdown-menu mega-dropdown-menu container row p-5">
										<li>
											<div class="row">
												<div class="col-md-4">
													<div class="">
														<div class="card-body p-0 relative">
															<div class="arrow-ribbon">Comming Events</div>
															<img class="" alt="img" src="{{ asset('assets/images/photos/32.jpg') }}">
															<div class="btn-absolute">
																<a class="btn btn-primary btn-pill btn-sm" href="#">More info</a>
																<span id="timer-countercallback1" class="h5 text-white float-right mb-0 mt-1"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-2">
													<h4  class="mb-3">Pages</h4>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Client Support</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> About Us</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Calendar</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Add New Pages</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Login Pages</a>
												</div>
												<div class="col-2">
													<h4  class="mb-3">Pages</h4>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Documentation</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Multi Pages</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Edit Profile</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Mail Settings</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Default Setting</a>
												</div>
												<div class="col-md-4">
													<h4  class="mb-3">Current projects</h4>
													<div class="overflow-hidden">
														<div class="card-body p-0">
															<div class="list-group list-lg-group list-group-flush">
																<a class="list-group-item list-group-item-action overflow-hidden pl-0 pr-0 pb-4" href="#">
																	<div class="d-flex">
																		<img class="avatar-xl br-7 mr-3" src="{{ asset('assets/images/photos/33.jpg') }}" alt="Image description">
																		<div class="media-body">
																			<div class="align-items-center">
																				<h5 class="mb-0">
																					Wordpress project
																				</h5>
																			</div>
																			<div class="mb-2 mt-2">
																				<p class="mb-2">Project Status<span class="float-right text-default">85%</span></p>
																				<div class="progress progress-sm mb-0 h-1">
																					<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-85"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</a>
																<a class="list-group-item list-group-item-action overflow-hidden pl-0 pr-0 pt-4" href="#">
																	<div class="d-flex">
																		<img class="avatar-xl br-7 mr-3" src="{{ asset('assets/images/photos/34.jpg') }}" alt="Image description">
																		<div class="media-body">
																			<div class="align-items-center">
																				<h5 class="mb-0">
																					Html project
																				</h5>
																			</div>
																			<div class="mb-2 mt-2">
																				<p class="mb-2">Project Status<span class="float-right text-default">75%</span></p>
																				<div class="progress progress-sm mb-0 h-1">
																					<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-75"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
							<ul class="nav header-nav">
								<li class="nav-item dropdown header-option m-2">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="fe fe-settings mr-2"></i>Settings
									</a>
									<div class="dropdown-menu dropdown-menu-left">
										<a class="dropdown-item" href="#">Option 1</a>
										<a class="dropdown-item" href="#">Option 2</a>
										<a class="dropdown-item" href="#">Option 3</a>
										<a class="dropdown-item" href="#">Option 4</a>
										<a class="dropdown-item" href="#">Option 5</a>

									</div>
								</li>
							</ul>
							<div class="d-flex order-lg-2 ml-auto header-rightmenu">
								<div class="dropdown">
									<a  class="nav-link icon full-screen-link" id="fullscreen-button">
										<i class="fe fe-maximize-2"></i>
									</a>
								</div><!-- full-screen -->
								<div class="dropdown header-notify">
									<a class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
										<i class="fe fe-bell "></i>
										<span class="pulse bg-success"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<a href="#" class="dropdown-item text-center">4 New Notifications</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-green">
												<i class="fe fe-mail"></i>
											</div>
											<div>
												<strong>Message Sent.</strong>
												<div class="small text-muted">12 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-pink">
												<i class="fe fe-shopping-cart"></i>
											</div>
											<div>
												<strong>Order Placed</strong>
												<div class="small text-muted">2  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-blue">
												<i class="fe fe-calendar"></i>
											</div>
											<div>
												<strong> Event Started</strong>
												<div class="small text-muted">1  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-orange">
												<i class="fe fe-monitor"></i>
											</div>
											<div>
												<strong>Your Admin Lanuch</strong>
												<div class="small text-muted">2  days ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notifications</a>
									</div>
								</div><!-- notifications -->
								<div class="dropdown header-user">
									<a class="nav-link leading-none siderbar-link"  data-toggle="sidebar-right" data-target=".sidebar-right">
										<span class="mr-3 d-none d-lg-block ">
											<span class="text-gray-white"><span class="ml-2">Alison</span></span>
										</span>
										<span class="avatar avatar-md brround"><img src="{{ asset('assets/images/users/female/33.png') }}" alt="Profile-img" class="avatar avatar-md brround"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="header-user text-center mt-4 pb-4">
											<span class="avatar avatar-xxl brround"><img src="{{ asset('assets/images/users/female/33.png') }}" alt="Profile-img" class="avatar avatar-xxl brround"></span>
											<a href="#" class="dropdown-item text-center font-weight-semibold user h3 mb-0">Alison</a>
											<small>Web Designer</small>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account
										</a>
										<div class="card-body border-top">
											<div class="row">
												<div class="col-6 text-center">
													<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
													<div>Inbox</div>
												</div>
												<div class="col-6 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
													<div>Sign out</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- profile -->
								<div class="dropdown">
									<a  class="nav-link icon siderbar-link" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-more-horizontal"></i>
									</a>
								</div><!-- Right-siebar-->
							</div>
						</div>
					</div>
				</div>
				<!--app-header end-->

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar toggle-sidebar">
					<div class="app-sidebar__user pb-0">
						<div class="user-body">
							<span class="avatar avatar-xxl brround text-center cover-image" data-image-src="{{ asset('assets/images/users/female/33.png') }}"></span>
						</div>
						<div class="user-info">
							<a href="#" class="ml-2"><span class="text-dark app-sidebar__user-name font-weight-semibold">Jenna Side</span><br>
								<span class="text-muted app-sidebar__user-name text-sm"> Web Designer</span>
							</a>
						</div>
					</div>

					<div class="tab-menu-heading siderbar-tabs border-0  p-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#index1" class="active" data-toggle="tab"><i class="fa fa-home fs-17"></i></a></li>
								<li><a href="#index2" data-toggle="tab"><i class="fa fa-envelope fs-17"></i></a></li>
								<li><a href="#index3" data-toggle="tab"><i class="fa fa-user fs-17"></i></a></li>
								<li><a href="login.html" title="logout"><i class="fa fa-power-off fs-17"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
						<div class="tab-content">
							<div class="tab-pane active " id="index1">
								<ul class="side-menu toggle-menu">
									<li class="slide">
										<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-device-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a class="slide-item"  href="index.html"><span>Dashboard 01</span></a></li>
											<li><a class="slide-item" href="index2.html"><span>Dashboard 02</span></a></li>
											<li><a class="slide-item" href="index3.html"><span>Dashboard 03</span></a></li>
											<li><a class="slide-item" href="index4.html"><span>Dashboard 04</span></a></li>
											<li><a class="slide-item" href="index5.html"><span>Dashboard 05</span></a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-th-large-outline"></i><span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="cards.html" class="slide-item"> Cards design</a></li>
											<li><a href="cards-image.html" class="slide-item"> Image  Cards design</a></li>
											<li><a href="chat.html" class="slide-item"> Default Chat</a></li>
											<li><a href="notify.html" class="slide-item"> Notifications</a></li>
											<li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
											<li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
											<li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
											<li><a href="counters.html" class="slide-item">Counters</a></li>
											<li><a href="loaders.html" class="slide-item"> Loaders</a></li>
											<li><a href="time-line.html" class="slide-item"> Time Line</a></li>
											<li><a href="rating.html" class="slide-item"> Rating</a></li>
										</ul>
									</li>
									<li>
										<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon typcn typcn-arrow-move-outline"></i><span class="side-menu__label">Widgets</span></a>
									</li>
									<li>
										<a class="side-menu__item" href="maps.html"><i class="side-menu__icon typcn typcn-location-outline"></i><span class="side-menu__label">Maps</span></a>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-chart-pie-outline"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="chart-chartist.html" class="slide-item">Chartist Charts</a></li>
											<li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
											<li><a href="chart-js.html" class="slide-item"> Charts js</a></li>
											<li><a href="chart-peity.html" class="slide-item"> Pie Charts</a></li>
											<li><a href="chart-echart.html" class="slide-item"> Echart Charts</a></li>
											<li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
											<li><a href="chart-high.html" class="slide-item"> High Charts</a></li>
											<li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
											<li><a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-spanner-outline"></i><span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="alerts.html" class="slide-item"> Alerts</a></li>
											<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
											<li><a href="colors.html" class="slide-item"> Colors</a></li>
											<li><a href="avatars.html" class="slide-item"> Avatars</a></li>
											<li><a href="dropdown.html" class="slide-item">Dropdowns</a></li>
											<li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
											<li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
											<li><a href="list.html" class="slide-item"> List</a></li>
											<li><a href="tags.html" class="slide-item"> Tags</a></li>
											<li><a href="pagination.html" class="slide-item"> Pagination</a></li>
											<li><a href="navigation.html" class="slide-item"> Navigation</a></li>
											<li><a href="typography.html" class="slide-item"> Typography</a></li>
											<li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
											<li><a href="badge.html" class="slide-item"> Badges</a></li>
											<li><a href="jumbotron.html" class="slide-item"> Jumbotron</a></li>
											<li><a href="panels.html" class="slide-item"> Panels</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-briefcase"></i><span class="side-menu__label">Advanced UI</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="modal.html" class="slide-item"> Modal</a></li>
											<li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
											<li><a href="progress.html" class="slide-item"> Progress</a></li>
											<li><a href="carousel.html" class="slide-item"> Carousels</a></li>
											<li><a href="accordion.html" class="slide-item"> Accordions</a></li>
											<li><a href="tabs.html" class="slide-item"> Tabs</a></li>
											<li><a href="headers.html" class="slide-item"> Headers</a></li>
											<li><a href="footers.html" class="slide-item">Footers</a></li>
											<li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
											<li><a href="users-list.html" class="slide-item"> User List</a></li>
											<li><a href="search.html" class="slide-item"> Search page</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-document"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
											<li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
											<li><a href="wysiwyag.html" class="slide-item"> Form Editor</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon  typcn typcn-point-of-interest-outline"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
											<li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
											<li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
											<li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
											<li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
											<li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
											<li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
											<li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
											<li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
											<li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-calendar-outline"></i><span class="side-menu__label">Calendar</span></a>
										<ul class="slide-menu">
											<li><a href="calendar.html" class="slide-item">Default calendar</a></li>
											<li><a href="calendar2.html" class="slide-item">Full calendar</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-clipboard"></i><span class="side-menu__label">Tables</span></a>
										<ul class="slide-menu">
											<li><a href="tables.html" class="slide-item">Default table</a></li>
											<li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-cog-outline"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="profile.html" class="slide-item"> Profile</a></li>
											<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
											<li><a href="email.html" class="slide-item"> Email</a></li>
											<li><a href="emailservices.html" class="slide-item"> Email Inbox</a></li>
											<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
											<li><a href="about.html" class="slide-item"> About Company</a></li>
											<li><a href="services.html" class="slide-item"> Services</a></li>
											<li><a href="faq.html" class="slide-item"> FAQS</a></li>
											<li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
											<li><a href="empty.html" class="slide-item"> Empty Page</a></li>
											<li><a href="construction.html" class="slide-item"> Under Construction</a></li>
											<li><a href="blog.html" class="slide-item"> Blog</a></li>
											<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
											<li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="shop.html" class="slide-item"> Products</a></li>
											<li><a href="shop-des.html" class="slide-item">Product Details</a></li>
											<li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-download-outline"></i><span class="side-menu__label">Custom</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="login.html" class="slide-item"> Login</a></li>
											<li><a href="register.html" class="slide-item"> Register</a></li>
											<li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
											<li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-info-outline"></i><span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="400.html" class="slide-item"> 400 Error</a></li>
											<li><a href="401.html" class="slide-item"> 401 Error</a></li>
											<li><a href="403.html" class="slide-item"> 403 Error</a></li>
											<li><a href="404.html" class="slide-item"> 404 Error</a></li>
											<li><a href="500.html" class="slide-item"> 500 Error</a></li>
											<li><a href="503.html" class="slide-item"> 503 Error</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane border-top" id="index2">
								<div class="list-group list-group-transparent mb-0 mail-inbox">
									<div class="mt-3 mb-3 ml-3 mr-3 text-center">
										<a href="email.html" class="btn btn-primary btn-block"><i class="typcn typcn-pencil fs-14"></i> <span class="email-text">Compose</span></a>
									</div>
									<a href="emailservices.html" class="list-group-item list-group-item-action d-flex align-items-center active">
										<span class="icon mr-3"><i class="fe fe-inbox"></i></span><span class="email-text">Inbox</span> <span class="ml-auto badge-pill badge badge-success email-text">05</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-send"></i></span><span class="email-text">Sent Mail</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-alert-circle"></i></span><span class="email-text">Important</span> <span class="ml-auto badge-pill badge badge-danger email-text">01</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-star"></i></span><span class="email-text">Starred</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-file"></i></span><span class="email-text">Drafts</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-tag"></i></span><span class="email-text">Tags</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-trash-2"></i></span><span class="email-text"> Trash</span>
									</a>
								</div>
							</div>
							<div class="tab-pane border-top" id="index3">
								<div class="list-group list-group-flush ">
									<form class="form-inline p-4 m-0">
										<div class="search-element">
											<input class="form-control header-search w-100" type="search" placeholder="Search..." aria-label="Search">
											<span class="Search-icon"><i class="fa fa-search"></i></span>
										</div>
									</form>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/female/12.jpg') }}"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Mozelle Belt</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/female/21.jpg') }}"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Florinda Carasco</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/female/29.jpg') }}"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Alina Bernier</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/female/2.jpg') }}"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Zula Mclaughin</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/male/34.jpg') }}"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Isidro Heide</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/male/12.jpg') }}"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Mozelle Belt</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/male/21.jpg') }}"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Florinda Carasco</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/male/29.jpg') }}"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Alina Bernier</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/male/2.jpg') }}"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Zula Mclaughin</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/female/14.jpg') }}"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Isidro Heide</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/male/11.jpg') }}"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Florinda Carasco</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/male/9.jpg') }}"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Alina Bernier</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/male/22.jpg') }}"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Zula Mclaughin</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="{{ asset('assets/images/users/female/4.jpg') }}"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Isidro Heide</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
				<!--sidemenu end-->

                <!-- app-content-->
				<div class="app-content  my-3 my-md-5 toggle-content">
					<div class="side-app">
						<div class="bg-white p-3 header-secondary row">
							<div class="col">
								<div class="d-flex">

									<a class="btn btn-danger" href="#"><i class="fe fe-rotate-cw mr-1 mt-1"></i> Upgrade </a>
								</div>
							</div>
							<div class="col col-auto">
								<a class="btn btn-light mt-4 mt-sm-0" href="#"><i class="fe fe-help-circle mr-1 mt-1"></i>  Support</a>
								<a class="btn btn-success mt-4 mt-sm-0" href="#"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
							</div>
						</div>

					    <!-- page-header -->
						<div class="page-header">
							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 03</li>
							</ol><!-- End breadcrumb -->
							<div class="ml-auto">
								<div class="input-group">
									<a  class="btn btn-primary text-white mr-2"  id="daterange-btn">
										<span>
											<i class="fa fa-calendar"></i> Events Settings
										</span>
										<i class="fa fa-caret-down"></i>
									</a>
									<a href="#" class="btn btn-secondary text-white" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
										<span>
											<i class="fa fa-star"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
						<!-- End page-header -->

						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-header custom-header">
										<div>
											<h2 class="card-title">Projects</h2>
											<h6 class="card-subtitle">Overview of this month</h6>
										</div>
										<div class="card-options">
											<label class="custom-switch">
												<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div>
												<h5 class="text-muted">Total Projects</h5>
												<h2 class="text-dark count mt-0 font-30 mb-0">3,456</h2>
											</div>
											<span class="sparkline_bar1 ml-auto"></span>
										</div>
									</div>
									<div class="card-footer">
										<span class="text-left"><i class="fe fe-arrow-up  text-success mr-1"></i> 24 Uploads</span>
										<span class="float-right"><i class="fe fe-arrow-down  text-danger mr-1"></i> 05 Pendings</span>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Employess</h3>
											<h6 class="card-subtitle">Overview of this month</h6>
										</div>
										<div class="card-options">
											<label class="custom-switch">
												<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" >
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div>
												<h5 class="text-muted">Total Employess</h5>
												<h2 class="text-dark count mt-0 font-30 mb-0">4,738</h2>
											</div>
											<span class="sparkline_bar2 ml-auto"></span>
										</div>
									</div>
									<div class="card-footer">
										<span class="text-left"><i class="si si-user  text-success mr-1"></i> 42 Male</span>
										<span class="float-right"><i class="si si-user-female  text-danger mr-1"></i> 35 Female</span>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Task</h3>
											<h6 class="card-subtitle">Overview of this month</h6>
										</div>
										<div class="card-options">
											<label class="custom-switch">
												<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div>
												<h5 class="text-muted">Total Tasks</h5>
												<h2 class="text-dark count mt-0 font-30 mb-0">6,738</h2>
											</div>
											<span class="sparkline_bar3 ml-auto"></span>
										</div>
									</div>
									<div class="card-footer">
										<span class="text-left"><i class="fe fe-corner-left-up  text-success mr-1"></i> 08 Active</span>
										<span class="float-right"><i class="fe fe-corner-left-down  text-danger mr-1"></i> 01 Inactive</span>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Earnings</h3>
											<h6 class="card-subtitle">Overview of this month</h6>
										</div>
										<div class="card-options">
											<label class="custom-switch">
												<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div>
												<h5 class="text-muted">Total Earnings</h5>
												<h2 class="text-dark count mt-0 font-30 mb-0">$18,963</h2>
											</div>
											<span class="sparkline_bar4 ml-auto"></span>
										</div>
									</div>
									<div class="card-footer">
										<span class="text-left"><i class="fe fe-dollar-sign  text-success mr-1"></i> 22% Profits</span>
										<span class="float-right"><i class="fe fe-trending-down  text-danger mr-1"></i> 5% Loos</span>
									</div>
								</div>
							</div><!-- col end -->
						</div>

						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Monthly Earings</h3>
											<h6 class="card-subtitle">Overview of this year live charts</h6>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fa fa-ellipsis-v"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
												<li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-9 col-lg-12 col-md-12 border-right">
												<canvas id="Chart" class="chartsh "></canvas>
											</div>
											<div class="col-xl-3 collg-12 col-md-12">
												<div class="clearfix mb-4">
													<div class="float-left">
														<h2 class="mb-0 text-primary mainvalue mb-2">$12,467</h2>
														<p class="text-muted ">Marketing</p>
													</div>
													<div class="float-right text-right mt-1">
														<span class="pie" data-peity='{ "fill": ["#f0f3f7", "#1753fc"]}'>2/5</span>
													</div>
												</div>
												<div class="clearfix mb-4">
													<div class="float-left">
														<h2 class="mb-0 text-danger mainvalue mb-1">$23,456</h2>
														<p class="text-muted">General & Admin</p>
													</div>
													<div class="float-right text-right mt-1">
														<span class="pie" data-peity='{ "fill": ["#ff6666", "#f0f3f7"]}'>226,134</span>
													</div>
												</div>
												<div class="clearfix mb-4">
													<div class="float-left">
														<h2 class="mb-0 text-secondary mainvalue mb-1">$4,878</h2>
														<p class="text-muted">Other Expenses</p>
													</div>
													<div class="float-right text-right mt-1">
														<span class="pie" data-peity='{ "fill": ["#7d41de", "#f0f3f7"]}'>1.22,1.041</span>
													</div>
												</div>
												<div class="text-center">
													<a href="#" class="btn btn-primary btn-block">View more</a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-5 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Projects Status</h3>
											<h6 class="card-subtitle">Overview of this year</h6>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fa fa-ellipsis-v"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
												<li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<canvas id="polarChart" class="h-300"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Comments</h3>
											<h6 class="card-subtitle">Overview of this week</h6>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fa fa-ellipsis-v"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
												<li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body p-0 ">
										<div class="list-group list-lg-group list-group-flush">
											<a class="list-group-item list-group-item-action" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{ asset('assets/images/users/female/2.jpg') }}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																Samantha Wilson
															</h4>
															<small class="text-primary ml-md-auto"><i class="fe fe-calendar mr-1"></i> 28 Feb 2019</small>
														</div>
														<p class="mb-0 text-muted">Itaque earum rerum hic tenetur a sapiente reiciendis voluptatibus.</p>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{ asset('assets/images/users/male/2.jpg') }}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																Kevin North
															</h4>
															<small class="text-primary ml-md-auto"><i class="fe fe-calendar mr-1"></i> 26 Feb 2019</small>
														</div>
														<p class="mb-0 text-muted">Itaque earum rerum hic tenetur a sapiente reiciendis voluptatibus.</p>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{ asset('assets/images/users/male/12.jpg') }}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																Steven Fisher
															</h4>
															<small class="text-primary ml-md-auto"><i class="fe fe-calendar mr-1"></i> 26 Feb 2019</small>
														</div>
														<p class="mb-0 text-muted">Itaque earum rerum hic tenetur a sapiente reiciendis voluptatibus.</p>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{ asset('assets/images/users/female/5.jpg') }}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																Joanne Taylor
															</h4>
															<small class="text-primary ml-md-auto"><i class="fe fe-calendar mr-1"></i> 25 Feb 2019</small>
														</div>
														<p class="mb-0 text-muted">Itaque earum rerum hic tenetur a sapiente reiciendis voluptatibus.</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card">
									<a href="#"><img class="card-img-top br-tl-7 br-tr-7" src="{{ asset('assets/images/photos/6.jpg') }}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<small class="text-muted mb-1"><i class="fe fe-calendar mr-1"></i> 25 Feb 2019</small>
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser</div>
										<a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Marketing  Campaign</h3>
											<h6 class="card-subtitle">Overview of all marketing vales</h6>
										</div>
										<div class="card-options d-none d-sm-block">
											<div class="btn-group btn-sm">
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Today</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Month</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Year</span>
												</button>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table border table-bordered text-nowrap mb-0">
												<thead>
													<tr>
														<th>NO</th>
														<th>ICON</th>
														<th>Currency</th>
														<th>Price</th>
														<th>Market Cap</th>
														<th>Volume 1D</th>
														<th>Change % (1D)</th>
														<th>Change % (1W)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/bitcoin.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Bitcoin</td>
														<td>$1.67</td>
														<td>$61,191,183,730</td>
														<td>$10,133,400,000</td>
														<td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 17.66%</span></td>
														<td><span class="badge badge-pill badge-success"><i class="fe fe-chevron-down"></i> -15.25%</span></td>

													</tr>
													<tr>
														<td>2</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/dash.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Dash</td>
														<td>$865.25</td>
														<td>$6,778,308,110</td>
														<td>$193,430,000</td>
														<td><span class="badge badge-pill  badge-primary"><i class="fe fe-chevron-up"></i> 30.80%</span></td>
														<td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> -16.40%</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/euro.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Euro</td>
														<td>$0.70</td>
														<td>$17,633,890,043</td>
														<td>$1,677,430,000</td>
														<td><span class="badge badge-pill  badge-primary"><i class="fe fe-chevron-up"></i> 40.79%</span></td>
														<td><span class="badge badge-pill  badge-success"><i class="fe fe-chevron-down"></i> -5.81%</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/qtum.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Qtum</td>
														<td>$1.67</td>
														<td>$61,191,183,730</td>
														<td>$10,133,400,000</td>
														<td><span class="badge badge-pill  badge-primary"><i class="fe fe-chevron-up"></i> 17.66%</span></td>
														<td><span class="badge badge-pill badge-success"><i class="fe fe-chevron-down"></i> -15.25%</span></td>
													</tr>
													<tr>
														<td>4</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/ripple.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Ripple</td>
														<td>$11,723.48</td>
														<td>$179,078,267,295</td>
														<td>$17,959,900,000</td>
														<td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 66.26%</span></td>
														<td><span class="badge badge-pill badge-success"><i class="fe fe-chevron-down"></i> -16.48%</span></td>
													</tr>
													<tr>
														<td>5</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/stellar.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Stellar</td>
														<td>$149.18</td>
														<td>$9,644,490,000</td>
														<td>$1,310,130,000</td>
														<td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 36.98%</span></td>
														<td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 31.09%</span></td>
													</tr>
													<tr>
														<td>6</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/cardano.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Cardano</td>
														<td>$39.23</td>
														<td>$92,644,490,000</td>
														<td>$14,310,130,000</td>
														<td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 26.98%</span></td>
														<td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 12.09%</span></td>
													</tr>
													<tr>
														<td>7</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/eos.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Eos</td>
														<td>$14.67</td>
														<td>$6,44,490,000</td>
														<td>$3,10,130,000</td>
														<td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 1.98%</span></td>
														<td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 6.09%</span></td>
													</tr>
													<tr>
														<td>8</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/iota.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Iota</td>
														<td>$78.3</td>
														<td>$24,644,490,000</td>
														<td>$46,310,130,000</td>
														<td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 45.98%</span></td>
														<td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 9.09%</span></td>
													</tr>
													<tr>
														<td>9</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/raiblocks.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Raiblocks</td>
														<td>$56.02</td>
														<td>$23,694,490,000</td>
														<td>$10,130,000</td>
														<td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 16.98%</span></td>
														<td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 7.09%</span></td>
													</tr>
													<tr>
														<td>10</td>
														<td><img src="{{ asset('assets/images/crypto-currencies/tron.svg') }}" class="w-5 h-5" alt=""></td>
														<td>Tron</td>
														<td>$13.12</td>
														<td>$19,644,490,000</td>
														<td>$12,310,130,000</td>
														<td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 6.98%</span></td>
														<td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 3.09%</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div><!--End side app-->

					<!-- Right-sidebar-->
					<div class="sidebar sidebar-right sidebar-animate">
						<div class="tab-menu-heading siderbar-tabs border-0">
							<div class="tabs-menu ">
								<!-- Tabs -->
								<ul class="nav panel-tabs">
									<li class=""><a href="#tab"  class="active" data-toggle="tab">Profile</a></li>
									<li class=""><a href="#tab1" data-toggle="tab">Chat</a></li>
									<li><a href="#tab2" data-toggle="tab">Activity</a></li>
									<li><a href="#tab3" data-toggle="tab">Todo</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
							<div class="tab-content border-top">
								<div class="tab-pane active " id="tab">
									<div class="card-body p-0">
										<div class="header-user text-center mt-4 pb-4">
											<span class="avatar avatar-xxl brround"><img src="{{ asset('assets/images/users/female/33.png') }}" alt="Profile-img" class="avatar avatar-xxl brround"></span>
											<div class="dropdown-item text-center font-weight-semibold user h3 mb-0">Alison</div>
											<small>Web Designer</small>
											<div class="card-body">
												<div class="form-group ">
													<label class="form-label  text-left">Offline/Online</label>
													<select class="form-control select2 " data-placeholder="Choose one">
														<option label="Choose one">
														</option>
														<option value="1">Online</option>
														<option value="2">Offline</option>
													</select>
												</div>
												<div class="form-group ">
													<label class="form-label text-left">Website</label>
													<select class="form-control select2 " data-placeholder="Choose one">
														<option label="Choose one">
														</option>
														<option value="1">Spruko.com</option>
														<option value="2">sprukosoft.com</option>
														<option value="3">sprukotechnologies.com</option>
														<option value="4">sprukoinfo.com</option>
														<option value="5">sprukotech.com</option>
													</select>
												</div>
											</div>
										</div>
										<a class="dropdown-item  border-top" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies
										</a>
										<a class="dropdown-item border-top" href="#">
											<i class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account
										</a>
										<div class="card-body border-top">
											<div class="row">
												<div class="col-4 text-center">
													<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
													<div>Inbox</div>
												</div>
												<div class="col-4 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-30 m-0 leading-tight"></i></a>
													<div>Settings</div>
												</div>
												<div class="col-4 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
													<div>Sign out</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab1">
									<div class="chat">
										<div class="contacts_card">
											<div class="input-group p-3">
												<input type="text" placeholder="Search..." class="form-control search">
												<div class="input-group-prepend">
													<span class="input-group-text search_btn  "><i class="fa fa-search"></i></span>
												</div>
											</div>
											<ul class="contacts mb-0">
												<li class="active">
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="{{ asset('assets/images/users/male/3.jpg') }}" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Maryam Naz</h6>
															<small class="text-muted">Maryam is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="{{ asset('assets/images/users/female/1.jpg') }}" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Sahar Darya</h6>
															<small class="text-muted">Sahar left 7 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="{{ asset('assets/images/users/female/9.jpg') }}" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Maryam Naz</h6>
															<small class="text-muted">Maryam is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="{{ asset('assets/images/users/female/12.jpg') }}" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Yolduz Rafi</h6>
															<small class="text-muted">Yolduz is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="{{ asset('assets/images/users/male/15.jpg') }}" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Nargis Hawa</h6>
															<small class="text-muted">Nargis left 30 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="{{ asset('assets/images/users/male/17.jpg') }}" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
															<small class="text-muted">Khadija left 50 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="{{ asset('assets/images/users/female/18.jpg') }}" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
															<small class="text-muted">Khadija left 50 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane  " id="tab2">
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-primary brround avatar-md">CH</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>New Websites is Created</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">30 mins ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-danger brround avatar-md">N</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare For the Next Project</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">2 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-info brround avatar-md">S</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Decide the live Discussion Time</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">3 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-warning brround avatar-md">K</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Team Review meeting at yesterday at 3:00 pm</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">4 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-success brround avatar-md">R</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">1 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center  border-bottom p-4">
										<div class="">
											<span class="avatar bg-pink brround avatar-md">MS</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">1 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-purple brround avatar-md">L</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">45 mintues ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center p-4">
										<div class="">
											<span class="avatar bg-blue brround avatar-md">U</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">2 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab3">
									<div class="">
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
												<span class="custom-control-label">Do Even More..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked="">
												<span class="custom-control-label">Find an idea.</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
												<span class="custom-control-label">Hangout with friends</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" >
												<span class="custom-control-label">Do Something else</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5" >
												<span class="custom-control-label">Eat healthy, Eat Fresh..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6" checked="">
												<span class="custom-control-label">Finsh something more..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" checked="">
												<span class="custom-control-label">Do something more</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8" >
												<span class="custom-control-label">Updated more files</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9" >
												<span class="custom-control-label">System updated</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top border-bottom">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10" >
												<span class="custom-control-label">Settings Changings...</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="text-center pt-5">
											<a href="#" class="btn btn-primary btn-pill">Upgrade more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Rightsidebar-->

					<!--footer-->
					<footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-lg-12 col-sm-12   text-center">
									Copyright © 2019 <a href="#">Hogo</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.
								</div>
							</div>
						</div>
					</footer>
					<!-- End Footer-->

				</div>
				<!-- End app-content-->
			</div>
		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        @include('partials.notify')
        @stack('script-lib')

	<!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

    <!--Bootstrap.min js-->
    <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Jquery Sparkline js-->
    <script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle js-->
    <script src="{{ asset('assets/js/vendors/circle-progress.min.js') }}"></script>

    <!-- Star Rating js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Moment js-->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>

    <!-- Daterangepicker js-->
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!--Side-menu js-->
    <script src="{{ asset('assets/plugins/toggle-sidebar/sidemenu.js') }}"></script>

    <!-- Sidebar Accordions js -->
    <script src="{{ asset('assets/plugins/accordion1/js/easyResponsiveTabs.js') }}"></script>

    <!-- Custom scroll bar js-->
    <script src="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Rightsidebar js -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!--Time Counter js-->
    <script src="{{ asset('assets/plugins/counters/jquery.missofis-countdown.js') }}"></script>
    <script src="{{ asset('assets/plugins/counters/counter.js') }}"></script>

    <!-- Charts js-->
    <script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

    <!--Peitychart js-->
    <script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- Custom-charts js-->
    <script src="{{ asset('assets/js/index3.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

        @stack('script')

	</body>
</html>