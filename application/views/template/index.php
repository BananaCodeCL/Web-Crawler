<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">


<title>Web Bot Crawler V1.0</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('css/bootstrap.min.css')?>"
	rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url('css/offcanvas.css')?>" rel="stylesheet">
<body>
	<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Menú</span> <span class="icon-bar"></span> <span
						class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url('inicio')?>">Inicio</a></li>
					<li><a href="#about"> Explicación</a></li>
					<li><a href="#contact"> Resultados</a></li>
				</ul>
			</div>
			<!-- /.nav-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- /.navbar -->

	<div class="container">

		<div class="row row-offcanvas row-offcanvas-right">

<?php echo $this->load->view($body)?>

		</div>
		<!--/row-->

		<hr>

		<footer>
			<p>Web Bot Crawler V1.0 2014</p>
		</footer>

	</div>
	<!--/.container-->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>



</body>
</html>
