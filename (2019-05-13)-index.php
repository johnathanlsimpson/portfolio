<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Averia+Libre|Bungee|Caesar+Dressing|Chela+One|Noto+Serif+JP|Pirata+One|Plaster|Shrikhand|UnifrakturMaguntia|Yeseva+One" rel="stylesheet">

<style>
	body::after {
		background: linear-gradient(to top, rgba(255,255,255, 0.25), rgba(255,255,255, 0) 25%);
		bottom: 0;
		content: "";
		left: 0;
		pointer-events: none;
		position: fixed;
		right: 0;
		top: 0;
	}
	
	* {
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		position: relative;
	}
	.section {
		scroll-snap-align: start;
		min-height: 100vh;
  height: 100vh;
  scroll-snap-align: start;
  position: relative;
	}
	body {
		scroll-snap-type: y mandatory;
  scroll-snap-points-y: repeat(100vh);
		overflow-y: scroll;
  overflow: scroll;
  height: 100vh;
  scroll-snap-type: mandatory;
  scroll-snap-points-y: repeat(100vh);
  scroll-snap-type: y mandatory;
	}
	
	.splash__wrapper {
		align-items: center;
		background-image:
			linear-gradient(rgba(80,197,211,1), rgba(255,0,161,1));
		background-attachment:
			fixed;
		background-repeat:
			no-repeat;
		background-size:
			100% 100%;
		justify-content: space-around;
		text-align: center;
	}
	.splash__wrapper::before {
		background-image:
			linear-gradient(rgba(251,237,177,0) 35%, rgba(251,237,177,0.8)),
			linear-gradient(rgba(251,237,177,0) 10%, rgba(251,237,177,0.5)),
			linear-gradient(rgba(251,237,177,0) 60%, rgba(251,237,177,0.3)),
			linear-gradient(rgba(251,237,177,0) 53%, rgba(251,237,177,0.3)),
			linear-gradient(rgba(251,237,177,0), rgba(251,237,177,0.5), rgba(251,237,177,0)),
			
			linear-gradient(to top, rgba(251,350,177,0) 40%, rgba(251,350,177,0.3)),
			linear-gradient(to top, rgba(251,350,177,0) 75%, rgba(251,350,177,0.3)),
			linear-gradient(to top, rgba(251,350,177,0) 50%, rgba(251,350,177,0.3)),
			linear-gradient(to top, rgba(251,350,177,0) 90%, rgba(251,350,177,0.3)),
			linear-gradient(to top, rgba(251,350,177,0), rgba(251,350,177,0.5), rgba(251,350,177,0));
		background-attachment:
			scroll,
			fixed,
			scroll,
			fixed,
			scroll,
			
			fixed,
			fixed,
			scroll,
			fixed,
			fixed;
		background-position:
			left top,
			10% top,
			20% top,
			33% top,
			1rem bottom,
			
			right 22% top,
			right top,
			right 10% top,
			right 2% top,
			right 4rem top;
		background-repeat:
			no-repeat;
		background-size:
			20vw 100%,
			5vw 100%,
			5vw 100%,
			5vw 100%,
			1rem 40%,
			
			5vw 100%,
			10vw 100%,
			20vw 100%,
			30vw 100%,
			1.5rem 40%;
	}
	.splash__container {
		mix-blend-mode: luminosity;
		position: sticky;
		top: 50%;
		transform: translateY(-50%);
	}
	.any__pseudo::before, .any__pseudo::after {
		bottom: 0;
		content: "";
		display: block;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
	}
	
	.h1 {
		font-family: 'Pirata One';
	}
	
	.splash__header {
		color: rgba(251,237,177,1);
		font-size: 10vw;
		text-shadow:
			4px 4px rgba(80,197,211,1),
			8px 8px rgba(255,0,161,1);
	}
	
	.h2 {
		color: rgba(251,237,177,1);
		font-family: 'averia libre';
	}
</style>

<body>
	
	<section class="section splash__wrapper any__pseudo">
		<div class="splash__container">
			<h1 class="h1 splash__header">
				John Simpson
			</h1>
			<h2 class="h2 splash__subtitle">
				web development ・ design ・ UI ・ bad taste in music
			</h2>
		</div>
	</section>
	
	<section class="section">
		<div style="max-width: 1000px; margin: auto;">
			<div style="width: 50%; background: rgba(251,237,177,1); padding: 1rem; margin: -2rem -2rem 0 auto;">
				blah
			</div>
		</div>
	</section>
	
	<section class="section" style="background:blue;">
	blah</section>
	<section class="section" style="background:green;">
	blah</section>
	
</body>