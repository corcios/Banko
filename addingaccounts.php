<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from spark.bootlab.io/pages-blank by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2024 03:35:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
	<meta name="author" content="Bootlab">

	<title>Adding Bank Accounts</title>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<!-- <link href="css/modern.css" rel="stylesheet"> -->
	<!-- <link href="css/classic.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script></head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<a class='sidebar-brand' href='index.html'>
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				Banko
			</a>
			<div class="sidebar-content">
            <?php 
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT username FROM usuarios");
$nom_usuario = $resultado->fetch_column(0);?>
				<div class="sidebar-user">
					<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="fw-bold"><?php echo"$nom_usuario";?></div>
					<small>Front-end Developer</small>
				</div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Main
                    </li>
                    <li class="sidebar-item">
                        <a class='sidebar-link' href='createuser_view.php'>
                            <i class="align-middle me-2 far fa-fw fa-user"></i> <span class="align-middle">Create New User</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class='sidebar-link' href='addingcards.php'>
                            <i class="align-middle me-2 far fa-fw fa-credit-card"></i> <span class="align-middle">Add Debit/Credit Card</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Pages</span>
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-settings.html'>Settings</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-clients.html'>Clients <span class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-invoice.html'>Invoice</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-pricing.html'>Pricing</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-tasks.html'>Tasks</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-chat.html'>Chat <span class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-blank.html'>Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">Auth</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-sign-in.html'>Sign
                                    In</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-sign-up.html'>Sign
                                    Up</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-reset-password.html'>Reset Password</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-404.html'>404
                                    Page</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='pages-500.html'>500
                                    Page</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-header">
                        Elements
                    </li>
                </ul>

					
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<input class="form-control form-control-lite" type="text" placeholder="Search projects...">
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-envelope-open"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Michelle Bilodeau</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">5m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Kathie Burton">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Kathie Burton</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Alexander Groves">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Alexander Groves</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Daisy Seger">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Daisy Seger</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-bell"></i>
								<span class="indicator"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-danger fas fa-fw fa-bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-warning fas fa-fw fa-envelope-open"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">6h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-primary fas fa-fw fa-building"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.1</div>
												<div class="text-muted small mt-1">8h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i> View Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-comments"></i> Contacts</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#L"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Adding Bank Accounts
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">

							</ol>
						</nav>
					</div>
					<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Always responsive</h5>
									<h6 class="card-subtitle text-muted"> </h6>
								</div>
								<div class="table-responsive">
								<table class="table table-striped">

								<?php                                    
$resultado = $mysqli->query("SELECT id_user, name, lastname, username, password, address, dui, card_number, email FROM usuarios");
$i = $resultado->fetch_all(MYSQLI_ASSOC);
                                    ?>
									<thead>
										<tr>
											<th style="width:25%;">Name</th>
											<th style="width:25%">Username</th>
											<th style="width:25%">Dui</th>
											<th class="d-none d-md-table-cell" style="width:25%">Email</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
                                        foreach ($i as $data) { ?>
                                            <tr>
                                                <td class="d-none d-xl-table-cell">
                                                    <?php echo $data["name"] ?>
                                                </td>
                                                <td class="d-none d-xl-table-cell">
                                                    <?php echo $data["username"] ?>
                                                </td>
                                                <td class="d-none d-xl-table-cell">
                                                    <?php echo $data["dui"] ?>
                                                </td>
                                                <td class="d-none d-md-table-cell">
                                                    <?php echo $data["email"] ?>
                                                </td>
												<td class="table-action">
												<a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
												<a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
											</td>
                                            </tr>
                                        <?php } ?>									
									</tbody>
								</table>
								</div>
							</div>
						</div>

				</div>
			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-8 text-start">
					
						</div>
						<div class="col-4 text-end">
							<p class="mb-0">
								&copy; 2024 - <a class='text-muted' href='dashboard-default.html'>Banko</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="js/app.js"></script>

</body>


<!-- Mirrored from spark.bootlab.io/pages-blank by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2024 03:35:27 GMT -->
</html>