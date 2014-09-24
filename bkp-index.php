<!--<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- viewport meta to reset iPhone inital scale
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Demo: Responsive Design in 3 Steps</title>

<!-- css3-mediaqueries.js for IE8 or older -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]

	<style type="text/css">
		#todo {
			width: 100%;
			margin: 0 auto;
			border: 1px solid #ccc;
		}

		@media screen and(max-width: 980px) {
		}

		@media screen and (max-width: 700px) {
		}

		@media screen and (max-width: 480px) {
		}

		@media only screen and (max-width: 850px) {
			#todo {
				width: 95%;
				background: #0000FF;
			}
		}
	</style>
</head>
<body>
	<div id="todo">
		<h1>Todo</h1>
	</div>
</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo: Responsive Design in 3 Steps</title>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}

		/************************************************************************************
		STRUCTURE
		*************************************************************************************/
		header {
			border: 1px solid #ccc;
			width: 1024px;
			height: 80px;
			margin: 0 auto;
		}

		#body {
			border: 1px solid #ccc;
			width: 1024px;
			margin: 0 auto;
			margin-top: 5px;
		}

		.content {
			border: 2px solid #666;
			width: 600px;
			background: #ccc;
			float: left;
			margin: 5px;
			padding: 5px;
		}

		.sidebar {
			border: 2px solid #666;
			width: 300px;
			background: #ccc;
			float: right;
			margin: 5px;
			padding: 5px;
		}

		#limpar {
			clear: both;
		}

		footer {
			border: 1px solid #ccc;
			width: 1024px;
			margin: 0 auto;
			margin-top: 5px;
		}

		/************************************************************************************
		MEDIA QUERIES
		*************************************************************************************/
		/* for 980px or less */
		@media screen and(max-width: 980px) {
			header {
				width: 95%
			}

			#body {
				width: 95%
			}

			.content {
				width: 58.59%
			}

			.sidebar {
				width: 29.29%
			}

			footer {
				width: 95%
			}
		}

		/* for 700px or less */
		@media screen and(max-width: 850px) {
			header {
				height: auto
			}

			.content {
				width: auto;
				float: none
			}

			.sidebar {
				width: auto;
				float: none
			}
		}

		/* for 480px or less */
		@media screen and(max-width: 480px) {
			footer {
				display: none
			}
		}
	</style>
</head>
<body>
	<header>
		<h1>Header</h1>
	</header>
	<div id="body">
		<section class="content">
			<h2>Conteúdo</h2>
		</section>
		<section class="sidebar">
			<h3>Sidebar</h3>
		</section>
		<div id="limpar"></div>
	</div>
	<footer>
		<h4>Footer</h4>
	</footer>
</body>
</html>