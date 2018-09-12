<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale1.0">
	<!--load file css-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<!--import from google icon font -->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<!-- Dropdown Structure--> 
	<ul id="dropdown1" class="dropdown-content">
  		<li><a href="tentang.php">Tentang Sekolah</a></li>
  		<li class="divider"></li>
  		<li><a href="murid.php">Data Murid</a></li>
	</ul>

	<nav class="menu-header z-depth-3">
	    	<div class="nav-wrapper">
	      	<a href="#" class="brand-logo"><img src="images/koper anak sholeh.png" class="icon-header"> SEKOLAH</a>
	      	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      		<ul class="right hide-on-med-and-down test">
	        		<li><a href="index.php">BERANDA</a></li>
	        		<li><a href="agenda.php">AGENDA</a></li>
	        		<li><a class="dropdown-button" data-activates="dropdown1" href="#!">TENTANG KAMI<i class="material-icons right">arrow_drop_down</i></a></li>
	        		<li><a href="galeri.php">GALERI</a></li>
	      		</ul>
	      		<ul class="side-nav" id="mobile-demo">
	        		<li><a href="index.php">BERANDA</a></li>
	        		<li><a href="agenda.php">AGENDA</a></li>
	        		<li><a href="tentang.php">TENTANG SEKOLAH</a></li>
	        		<li><a href="murid.php">DATA MURID</a></li>
	        		<li><a href="galeri.php">GALERI</a></li>
	      		</ul>
	    	</div>
  	</nav>

	<!-- Load File JS -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>
	 <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</body>
</html>