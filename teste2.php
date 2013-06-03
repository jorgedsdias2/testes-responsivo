<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Demo: Responsive Design in 3 Steps</title>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<style type="text/css">
		header {
			width: 1024px;
			margin: 0 auto;
			border: 1px solid #ccc;
		}

		#body {
			border: 1px solid #ccc;
			width: 1024px;
			margin:0 auto;
			margin-top: 5px;
		}

		.content {
			border: 2px solid #666;
			width: 600px;
			height: 70px;
			background: #ccc;
			float: left;
			margin: 5px;
			padding: 5px;
		}

		.sidebar {
			border: 2px solid #666;
			width: 300px;
			height: 70px;
			background: #ccc;
			float: right;
			margin: 5px;
			padding: 5px;
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
		@media only screen and (max-width: 980px) {
			header {
				width: 95%;
				background: #EAEAEA;
			}

			#body {
				width: 95%;
			}

			.content {
				width: 58.59%
			}

			.sidebar {
				width: 29.29%
			}

			footer {
				width: 95%;
				background: #EAEAEA;
			}
		}

		/* for 850px or less */
		@media only screen and (max-width: 850px) {
			header {
				background: #666666 
			}

			.content {
				width: auto;
				float: none
			}

			.sidebar {
				width: auto;
				float: none
			}

			footer {
				background: #666666 
			}
		}

		/* for 480px or less */
		@media only screen and (max-width: 480px) {
			header {
				background: #999999 
			}

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
		
		<div style="clear: both"></div>
	</div>

	<footer>
		<h4>Footer</h4>
	</footer>

</body>
</html>