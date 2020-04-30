<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel - Reservas Online</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<script src="https://kit.fontawesome.com/1768d9e9d9.js" crossorigin="anonymous"></script> 
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body class="bg-dark text-light">
	<b class="screen-overlay"></b>

	<header class="section-header py-0">
		<button data-trigger="#navbar_main" class="d-lg-none btn btn-warning" type="button">  Abir menu </button>
		<button data-trigger="#card_mobile" class="d-lg-none btn btn-warning" type="button">  Abrir card </button>
	</header>

	<div class="containe-fluid">
		<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
			<div class="offcanvas-header">  
				<button class="btn btn-danger btn-close float-right"> &times Close </button>
				<h5 class="py-2 text-white">Main navbar</h5>
			</div>

			<ul class="navbar-nav">
				<li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
				<li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
				<li class="nav-item dropdown">
					<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Dropdown right </a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
						<li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
					</ul>
				</li>

			</ul>

		</nav>
	</div>

	<section class="section-content py-5">		
	<!-- 	<article class="card mobile-offcanvas" id="card_mobile">
			<div class="card-body">
				<div class="offcanvas-header">  
					<button class="btn btn-danger btn-close float-right"> &times Close </button>
				</div>
			</div>
		</article> -->


		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</section>

</div><!-- container //  -->
<button type="button" id='btnTop' onclick="backToTop();"><i class="topo fas fa-arrow-circle-up"></i></button>
</body>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<script type="text/javascript">
	 function backToTop() {
      document.documentElement.scrollTop = 0;
  }
</script>

<script type="text/javascript" src="js/javascript.js"></script>		
</html>