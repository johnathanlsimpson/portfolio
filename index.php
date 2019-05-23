<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Pirata+One|Noto+Serif+JP&font-display=swap" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="/styles/external/style-fullpage.css" />
		<link href="/styles/style-shared.css" rel="stylesheet" type="text/css" />
		<link href="/styles/style-sections.css" rel="stylesheet" type="text/css" />
		
		<meta charset="utf-8" />
		<meta content="initial-scale=1, width=device-width" name="viewport" />
		
		<style>
		</style>
	</head>
	<body class="body" style="overflow: hidden;">
		
		<div class="section--overlay">
			
			<div class="nav--sections" id="menu">
				<a class="nav__bullet a--attention" data-menuanchor="top" href="#top"></a>
				<a class="nav__bullet a--attention" data-menuanchor="secondPage" href="#secondPage"></a>
				<a class="nav__bullet a--attention" data-menuanchor="thirdPage" href="#thirdPage"></a>
				<a class="nav__bullet a--attention" href=""></a>
				<a class="nav__bullet a--attention" href=""></a>
			</div>
			
			<div class="nav--contact">
				<a class="a--attention" href="">Development</a>
				<a class="a--attention" href="">Design</a>
				<a class="a--attention" href="">Contact</a>
			</div>
		</div>
		
		<?php
			include('page-splash.php');
		?>
		
		<div id="fullpage">
			<?php
				include('page-top.php');
				include('page-development.php');
			?>
			<div class="section section--design" data-anchor="thirdPage">
				blerp
			</div>
		</div>
		
		<script src="/scripts/external/script-fullpage.js" type="text/javascript"></script>
		<script>
			new fullpage('#fullpage', {
				anchors: [ 'top', 'secondPage', 'thirdPage' ],
				autoScrolling: true,
				licenseKey: 'bY0!fx9l',
				menu: '#menu',
				verticalCentered: false,
				scrollBar: false,
				slidesNavigation: false,
				navigation: false,
			});
		</script>
		
	</body>
</html>











