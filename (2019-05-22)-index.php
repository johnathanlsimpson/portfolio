<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Pirata+One|Noto+Serif+JP&font-display=swap" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="/styles/external/style-fullpage.css" />
		
		<meta charset="utf-8" />
		<meta content="initial-scale=1, width=device-width" name="viewport" />
		
		<style>
			/* Animations */
			@keyframes fadeIn {
				00% {
					opacity: 0;
				}
				99% {
					opacity: 1;
				}
			}
			@keyframes fadeUp {
				00% {
					opacity: 0;
					transform: translateY(10%);
				}
				80% {
					transform: translateY(0);
				}
				99% {
					opacity: 1;
				}
			}
			
			/* Variables */
			:root {
				/* Colors */
				--black: 0,0,0;
				--blue: 80,197,211;
				--pink: 255,0,161;
				--purple: 181,83,182;
				--yellow: 251,237,177;
				--white: 255,255,255;
				
				/* Dynamic colors */
				--text-color: var(--black);
				--text-background: var(--white);
				
				--link-color: var(--white);
				--link-background: var(--pink);
				
				--attention-color: var(--white);
				--attention-background: var(--pink);
				
				/* Sizing */
				--page-margin: 1rem;
				
				/* Fonts */
				--display: 'pirata one';
				--text: 'noto serif jp';
				
				
			}
			/*[class*=fp-viewing-secondPage] {
				--attention-color: var(--pink);
				--attention-background: var(--white);
			}*/
			
			/* Default stylings */
			*, *::before, *::after {
				box-sizing: border-box;
				margin: 0;
				padding: 0;
				position: relative;
			}
			.body {
				background: transparent;
				font-size: var(--font-size);
				overflow-x: hidden;
			}
			l {
				letter-spacing: initial;
			}
			
			/* Reusables */
			a {
				color: rgb(var(--link-color));
				text-decoration: none;
			}
			a:hover {
				color: rgb(var(--link-background));
			}
			.a--circled {
				border: 1px solid white;
				border-radius: 50%;
				display: block;
				height: 6rem;
				line-height: 6rem;
				text-align: center;
				width: 6rem;
			}
			@media(min-width: 800px) {
				.a--circled {
					height: 8rem;
					line-height: 8rem;
					width: 8rem;
				}
			}
			.a--attention {
				color: rgb(var(--attention-color));
			}
			.a--attention:hover {
				color: rgb(var(--attention-background));
			}
			
			.fixed {
				bottom: 0;
				left: 0;
				pointer-events: none;
				position: fixed;
				right: 0;
				top: 0;
				z-index: 10;
			}
			.text--ja {
				/*color: rgb(var(--decoration));*/
				font-family: var(--text);
				font-size: 0.7rem;
				letter-spacing: 1px;
				/*line-height: 1;
				text-shadow: none;*/
				text-transform: uppercase;
				/*transition: color 0.1s linear 0.3s;*/
			}
			/*.text--positioned {
				max-height: 100%;
				max-width: 100%;
				overflow: hidden;
				position: absolute;
				white-space: nowrap;
			}*/
			.text--vertical {
				text-align: center;
				text-orientation: upright;
				writing-mode: vertical-rl;
			}
			.text--spaced {
				letter-spacing: 2px;
			}
			@media(min-width: 800px) {
				.text--spaced {
					letter-spacing: 1em;
				}
			}
			.text--secondary {
				font-family: monospace;
				letter-spacing: 1px;
			}
			
			.animated--fade-up {
				animation: fadeUp 0.3s ease-in-out;
			}
			
			.deco__behind {
				background-image:
					linear-gradient( rgb(var(--blue)), rgb(var(--pink)) );
				z-index: 0;
			}
			.deco__over {
				animation: fadeIn 0.6s linear;
				animation-fill-mode: forwards;
				background-image:
					linear-gradient(to bottom, rgb(var(--white)) var(--page-margin), transparent 0 ),
					linear-gradient(to left,   rgb(var(--white)) var(--page-margin), transparent 0 ),
					linear-gradient(to top,    rgb(var(--white)) var(--page-margin), transparent 0 ),
					linear-gradient(to right,  rgb(var(--white)) var(--page-margin), transparent 0 );
			}
			.deco__nav {
				align-items: center;
				bottom: 0;
				display: flex;
				flex-direction: column;
				justify-content: center;
				left: 0;
				padding-left: var(--page-margin);
				position: absolute;
				top: var(--page-margin);
			}
			.deco__nav-item {
				/*color: rgb(var(--attention-color));*/
				padding: calc(var(--page-margin));
				pointer-events: auto;
			}
			.deco__nav-item:hover {
				/*color: rgb(var(--blue));*/
			}
			.deco__nav-item:active, .deco__nav-item:focus {
				opacity: 0.5;
			}
			.deco__nav-item::after {
				border: 1px solid;
				border-radius: 50%;
				content: "";
				display: inline-block;
				height: 0.5rem;
				transition: border 0.2s linear, transform 0.1s linear;
				width: 0.5rem;
			}
			.deco__nav-item.active::after {
				border-width: 0.25rem;
				transform: scale(1.5);
			}
			
			.splash__container {
				align-items: center;
				bottom: 0;
				color: rgb(var(--white));
				display: flex;
				flex-direction: column;
				justify-content: center;
				left: 0;
				line-height: 1.2;
				position: fixed;
				right: 0;
				text-shadow: 1px 1px 0 rgb(var(--purple)), 2px 2px 0 rgb(var(--purple)), 3px 3px 0 rgb(var(--purple));
				top: 0;
			}
			.splash__title {
				animation: fadeUp 0.3s linear;
				animation-fill-mode: forwards;
				font-family: var(--display);
				font-size: 4rem;
			}
			@media(min-width: 800px) {
				.splash__title {
					font-size: 15vw;
				}
			}
			@media(min-width: 1300px) {
				.splash__title {
					font-size: 15rem;
				}
			}
			.splash__john {
				left: -1rem;
				letter-spacing: initial;
				position: absolute;
				top: 50%;
				transform: translateY(-25%);
			}
			@media(min-width: 1300px) {
				.splash__john::after {
					content: "・シンプソン";
				}
			}
			.splash__subtitle {
				animation: fadeIn 0.6s linear;
				animation-fill-mode: forwards;
				font-family: var(--text);
				font-size: 1rem;
				letter-spacing: 1px;
				text-transform: uppercase;
			}
			@media(min-width: 800px) {
				.splash__subtitle {
					font-size: 1.2rem;
					letter-spacing: 0.5rem;
				}
			}
			.splash__amp {
				font-size: 1.5rem;
				vertical-align: text-bottom;
			}
			.splash__design {
				position: absolute;
				margin-right: -1em;
				right: 1px;
			}
			@media(min-width: 800px) {
				.splash__design  {
					right: 0.5rem;
				}
			}
		</style>
	</head>
	<body class="body" style="overflow: hidden;">
		<div class="fixed deco__behind splash__container">
			<div class="splash__title">
				<div class="splash__john text--ja text--vertical">ジョン</div>
				John Simpson
			</div>
			<div class="splash__subtitle">
				web development <span class="splash__amp">&amp;</span> design
				<div class="splash__design text--ja">ウェブデザイン</div>
			</div>
		</div>
		<div class="fixed deco__over">
			<div class="deco__nav" id="menu">
				<a class="deco__nav-item a--attention" data-menuanchor="firstPage" href="#firstPage"></a>
				<a class="deco__nav-item a--attention" data-menuanchor="secondPage" href="#secondPage"></a>
				<a class="deco__nav-item a--attention" data-menuanchor="thirdPage" href="#thirdPage"></a>
				<a class="deco__nav-item a--attention" href=""></a>
				<a class="deco__nav-item a--attention" href=""></a>
			</div>
			
			<div class="text--ja" style="right: 2rem; top: 2rem; position: absolute;">
				<a class="a--attention" href="">Development</a>
				<a class="a--attention" href="">Design</a>
				<a class="a--attention" href="">Contact</a>
			</div>
		</div>
		
		<div id="fullpage">
		
		<div class="" style="position: fixed;">
		</div>
		
		<div class="section" data-anchor="firstPage" style="align-items: flex-end; padding-bottom: 2rem; display: flex; flex-direction: column; height: 100vh; padding-bottom: 4rem;">
			<a class="text--ja text--vertical a--circled" style="" href="#secondPage">WOR<l>k</l></a>
		</div>
		
		<!-- web dev -->
		<div class="work__wrapper section section--vkgy" data-anchor="secondPage">
			
			<style>
				.fp-controlArrow {
					background: white;
					background: rgb(var(--attention-color));
					border: none;
					border-radius: 3px 0 0 3px;
					bottom: 3rem;
					bottom: initial !important;
					box-shadow: 0 0 1rem 0 rgba(0,0,0, 0.1);
					box-sizing: content-box;
					color: rgb(var(--pink));
					color: rgb(var(--attention-background));
					font-family: 'pirata one';
					font-family: 'noto serif jp';
					font-size: 1rem;
					font-size: 0.75rem;
					height: initial !important;
					left: initial !important;
					letter-spacing: 2px;
					line-height: 1;
					margin: 0 !important;
					padding: 0.25rem;
					padding-right: calc(0.5rem + 1px);
					right: initial !important;
					right: 1rem !important;
					text-align: center;
					text-transform: uppercase;
					top: initial !important;
					width: initial !important;
					width: 3rem !important;
				}
				.fp-controlArrow:hover {
					background: rgb(var(--attention-background));
					color: rgb(var(--attention-color));
				}
				@media(min-width: 800px) {
					.fp-controlArrow {
						padding: 1rem;
					}
				}
				.fp-controlArrow.fp-next {
					bottom: calc(50% - 2rem) !important;
					/*left: calc(50% + 2rem) !important;*/
				}
				.fp-controlArrow.fp-next::after {
					content: "next▸";
				}
				.fp-controlArrow.fp-prev {
					/*right: calc(50% + 2rem) !important;*/
					top: calc(50% - 2rem) !important;
				}
				.fp-controlArrow.fp-prev::after {
					content: "◂prev";
				}
				@media(min-width: 800px) {
					.fp-controlArrow.fp-next {
						bottom: calc(50% - 3rem) !important;
						/*left: calc(50% + 2rem) !important;*/
					}
					.fp-controlArrow.fp-prev {
						/*right: calc(50% + 2rem) !important;*/
						top: calc(50% - 3rem) !important;
					}
				}
				/*.fp-controlArrow.fp-next {
					background-image:
						linear-gradient(to top right, transparent calc(50% - 1px), white 50%, transparent calc(50% + 1px)),
						linear-gradient(to bottom right, transparent calc(50% - 1px), white 50%, transparent calc(50% + 1px));
					background-position:
						top,
						bottom;
					background-repeat: no-repeat;
					background-size: 100% 50%;
					border: none;
					border-left: 1px solid;
					color: black;
					height: 2rem;
					right: 2rem;
					width: 1rem;
				}
				.fp-controlArrow.fp-next::before {
					content: "";
					display: inline-block;
					position: absolute;
					right: 0;
					height: 3rem;
					background: white;
				}
				.fp-controlArrow.fp-next::after {
					content: "NEXT";
					font-family: 'pirata one';
					font-size: 2rem;
					position: absolute;
					right: 2rem;
				}*/
				
				.work__slide-nav {
					display: flex;
					justify-content: center;
					line-height: 0;
					position: absolute;
					right: 1rem;
					top: calc(50% + 3rem);
					z-index: 10;
				}
				.work__nav {
					padding: 0.5rem ;
				}
				.work__nav::before {
					border: 1px solid;
					border-radius: 0.25rem;
					border-radius: 50%;
					/*color: white;*/
					content: "";
					display: inline-block;
					height: 4px;
					height: 0.5rem;
					transition: border 0.2s linear, transform 0.1s linear;
					width: 1rem;
					width: 0.5rem;
				}
				.work__nav:hover::before {
					/*color: rgb(var(--pink));*/
				}
				.fp-viewing-secondPage-0 .work__nav:nth-of-type(1)::before,
				.fp-viewing-secondPage-1 .work__nav:nth-of-type(2)::before {
					border-width: 0.25rem;
					transform: scale(1.5);
				}
			</style>
			
			<!-- vkgy -->
			<article class="slide">
				<section class="work__container work__images">
					<div class="work__images-container">
						<div class="i-v-1 work__image work__image--bottom"></div>
						<div class="i-v-2 work__image work__image--middle"></div>
						<div class="i-v-3 work__image"></div>
					</div>
				</section>
				
				<section class="work__container work__details">
				<a class="work__title text--spaced animated--fade-up" href="">
					vk.g<l>y</l>
				</a>
				
				<div class="work__summary">
					<p class="work__description">
						<span class="work__description-bg">Lead developer, designer, and community manager for multi-lingual library of band information. Custom design powered by custom PHP/SQL CMS. Managed successful Patreon campaign.</span>
						<span class="work__tech">PHP7</span>
						<span class="work__tech">SQL</span>
						<span class="work__tech">JS ES6</span>
						<span class="work__tech">jQuery</span>
						<span class="work__tech">HTML5</span>
						<span class="work__tech">CSS3</span>
						<span class="work__tech">cron</span>
						<span class="work__tech">Git</span>
						<span class="work__tech">CL</span>
					</p>
				</div>
				
				<a class="work__link text--ja text--spaced" href="https://vk.gy/" target="_blank"></a>
			</section>
			</article>
			
			<!-- rarezhut -->
			<article class="slide">
				<section class="work__container work__images">
					<div class="work__images-container">
						<div class="work__image work__image--bottom" style="background-image: url(/images/img-vkgy-add_release.png);"></div>
						<div class="work__image work__image--middle" style="background-image: url(/images/img-vkgy-artist.png);"></div>
						<div class="work__image" style="background-image: url(/images/img-vkgy-blog_mobile.png);"></div>
					</div>
				</section>

				<section class="work__container work__details">
					<a class="work__title text--spaced animated--fade-up" href="">
						RarezHu<l>t</l>
					</a>

					<div class="work__summary">
						<p class="work__description">
							<span class="work__description-bg">Developed PHP/JS streaming auction system for record shop. Integrated with existing design.</span>
							<span class="work__tech">PHP7</span>
							<span class="work__tech">SQL</span>
							<span class="work__tech">JS ES6</span>
							<span class="work__tech">HTML5</span>
							<span class="work__tech">CSS3</span>
						</p>
					</div>

					<a class="work__link text--ja text--spaced" href="https://vk.gy/" target="_blank"></a>
				</section>
			</article>
			
			<div class="work__slide-nav">
				<a class="work__nav a--attention" href="#secondPage/0"></a>
				<a class="work__nav a--attention" href="#secondPage/1"></a>
				<a class="work__nav a--attention" href=""></a>
				<a class="work__nav a--attention" href=""></a>
			</div>
		</div>
		
		<!-- Counseling Group -->
		<article class="work__wrapper section section--vkgy" data-anchor="fourthPage">
			<section class="work__container work__images">
				<div class="work__images-container">
					<div class="work__image work__image--bottom" style="background-image: url(/images/img-vkgy-add_release.png);"></div>
					<div class="work__image work__image--middle" style="background-image: url(/images/img-vkgy-artist.png);"></div>
					<div class="work__image" style="background-image: url(/images/img-vkgy-blog_mobile.png);"></div>
				</div>
			</section>
			
			<section class="work__container work__details">
				<a class="work__title text--spaced animated--fade-up" href="">
					Counselin<l>g</l>
				</a>
				
				<div class="work__summary">
					<p class="work__description">
						<span class="work__description-bg">Developed static website for counseling group, and maintained. Designed logo and branding with consideration for patients' needs.</span>
						<span class="work__tech">HTML5</span>
						<span class="work__tech">CSS3</span>
					</p>
				</div>
				
				<a class="work__link text--ja text--spaced" href="https://vk.gy/" target="_blank"></a>
			</section>
		</article>
		
		<!-- Michael Burk -->
		<article class="work__wrapper section section--vkgy" data-anchor="fifthPage">
			<section class="work__container work__images">
				<div class="work__images-container">
					<div class="work__image work__image--bottom" style="background-image: url(/images/img-vkgy-add_release.png);"></div>
					<div class="work__image work__image--middle" style="background-image: url(/images/img-vkgy-artist.png);"></div>
					<div class="work__image" style="background-image: url(/images/img-vkgy-blog_mobile.png);"></div>
				</div>
			</section>
			
			<section class="work__container work__details">
				<a class="work__title text--spaced animated--fade-up" href="">
					Michael Bur<l>k</l>
				</a>
				
				<div class="work__summary">
					<p class="work__description">
						<span class="work__description-bg">Built custom image CMS for graphic designer. Translated designer's ideas into mobile-friendly, optimized website.</span>
						<span class="work__tech">PHP</span>
						<span class="work__tech">jQuery</span>
						<span class="work__tech">HTML5</span>
						<span class="work__tech">CSS3</span>
					</p>
				</div>
				
				<a class="work__link text--ja text--spaced" href="https://vk.gy/" target="_blank"></a>
			</section>
		</article>
		
		<!-- BCALLA -->
		<article class="work__wrapper section section--vkgy" data-anchor="sixthPage">
			<section class="work__container work__images">
				<div class="work__images-container">
					<div class="work__image work__image--bottom" style="background-image: url(/images/img-vkgy-add_release.png);"></div>
					<div class="work__image work__image--middle" style="background-image: url(/images/img-vkgy-artist.png);"></div>
					<div class="work__image" style="background-image: url(/images/img-vkgy-blog_mobile.png);"></div>
				</div>
			</section>
			
			<section class="work__container work__details">
				<a class="work__title text--spaced animated--fade-up" href="" style="color:white; background: none; border:1px solid white;">
					BCALLA FW1<l>6</l>
				</a>
				
				<div class="work__summary">
					<p class="work__description">
						<span class="work__description-bg">Built single-page, interactive website allowing visitors to send digital valentines, in promotion of fashion house BCALLA's Fall-Winter collection. Translated designer's ideas into mobile-friendly, optimized website.</span>
						<span class="work__tech">PHP</span>
						<span class="work__tech">jQuery</span>
						<span class="work__tech">HTML5</span>
						<span class="work__tech">CSS3</span>
						<span class="work__tech">Mailchimp API</span>
					</p>
				</div>
				
				<a class="work__link text--ja text--spaced" href="https://vk.gy/" style="border:none;" target="_blank">&dagger;</a>
			</section>
		</article>
		
		<!-- Graphic design -->
		<article class="work__wrapper section section--vkgy" data-anchor="sixthPage">
			<section class="work__container work__images">
				<div class="work__images-container">
					<div class="work__image work__image--bottom" style="background-image: url(/images/img-vkgy-add_release.png);"></div>
					<div class="work__image work__image--middle" style="background-image: url(/images/img-vkgy-artist.png);"></div>
					<div class="work__image" style="background-image: url(/images/img-vkgy-blog_mobile.png);"></div>
				</div>
			</section>
			
			<section class="work__container work__details">
				<a class="work__title text--spaced animated--fade-up" href="" style="color:white; background: none; border:1px solid white;">
					Graphic Desig<l>n</l>
				</a>
				
				<div class="work__summary">
					<p class="work__description">
						<span class="work__description-bg">Designed various logos, posters, postcards, t-shirts, etc.</span>
						<span class="work__tech">Photoshop</span>
						<span class="work__tech">Illustrator</span>
					</p>
				</div>
				
				<a class="work__link text--ja text--spaced" href="https://vk.gy/" style="border:none;" target="_blank">&dagger;</a>
			</section>
		</article>
		
		<!-- Graphic design -->
		<article class="work__wrapper section section--vkgy" data-anchor="sixthPage">
			<section class="work__container work__images">
				<div class="work__images-container">
					<div class="work__image work__image--bottom" style="background-image: url(/images/img-vkgy-add_release.png);"></div>
					<div class="work__image work__image--middle" style="background-image: url(/images/img-vkgy-artist.png);"></div>
					<div class="work__image" style="background-image: url(/images/img-vkgy-blog_mobile.png);"></div>
				</div>
			</section>
			
			<section class="work__container work__details">
				<a class="work__title text--spaced animated--fade-up" href="" style="color:white; background: none; border:1px solid white;">
					UI/U<l>X</l>
				</a>
				
				<div class="work__summary">
					<p class="work__description">
						<span class="work__description-bg">Designed various logos, posters, postcards, t-shirts, etc.</span>
						<span class="work__tech">Photoshop</span>
						<span class="work__tech">Illustrator</span>
					</p>
				</div>
				
				<a class="work__link text--ja text--spaced" href="https://vk.gy/" style="border:none;" target="_blank">&dagger;</a>
			</section>
		</article>
		
		<style>
			/* Each section (page) */
			.section {
				background-image: linear-gradient( rgb(var(--top-color)), rgb(var(--bottom-color)) );
				height: 100vh;
				transform: translate3d(0,0,0);
				width: 100vw;
			}
			.section::before {
				background-image: linear-gradient(to bottom right, transparent 50%, rgb(var(--top-color)) 51%);
				content: "";
				display: block;
				height: 7vh;
				position: absolute;
				top: -7vh;
				width: 100vw;
			}
			.slide::before {
				/*background-image:
					linear-gradient(to bottom right, transparent 50%, rgba(0,0,0, 0.1) 51%),
					linear-gradient(to top right, transparent 50%, rgba(0,0,0, 0.1) 51%),
					linear-gradient(to right, rgba(0,0,0, 0.1), transparent);
				background-position:
					left top,
					left bottom,
					right top;
				background-repeat:
					no-repeat;
				background-size:
					7vw 50%,
					7vw 50%,
					7vw 100%;*/
				background-image: linear-gradient(to right, rgba(0,0,0, 0), rgba(0,0,0, 0.1));
				content: "";
				display: block;
				height: 100vh;
				left: -2rem;
				position: absolute;
				width: 2rem;
			}
			
			/* Works section */
			.work__container {
				align-items: center;
				display: flex;
				flex-direction: column;
				height: 77%;
				height: 100%;
				justify-content: center;
				padding: 4rem;
				position: absolute;
				width: 100%;
			}
			@media(min-width: 800px) {
				.work__container {
				}
			}
			
			/* Work: text information */
			.work__details {
				/*justify-content: flex-start;
				animation: fadeUp 0s linear;
				animation-fill-mode: forwards;*/
			}
			@media(min-width: 800px) {
				.work__details {
					padding-right: 10%;
				}
			}
			.active .work__details {
				/*animation: fadeUp 0.1s linear 2s;
				animation-fill-mode: forwards;*/
			}
			.work__title {
				background-color: rgb(var(--white));
				background-image: linear-gradient(to top right, rgb(var(--pink)) 50%, transparent 51%);
				background-position: top 2px right 2px;
				background-repeat: no-repeat;
				background-size: 200% 200%;
				color: black;
				display: inline-block;
				font-family: var(--text);
				font-size: 1.25rem;
				letter-spacing: 0.5em;
				line-height: 2ex;
				padding: 1rem;
				/*text-transform: uppercase;*/
				transition: background-position 0.2s ease-out, color 0.1s linear;
			}
			.work__title:hover {
				background-position: bottom -1px left -1px;
				color: rgb(var(--white));
			}
			@media(min-width: 800px) {
				.work__title {
					letter-spacing: 1em;
					padding: 2rem;
				}
			}
			.work__summary {
				display: flex;
				flex-direction: column;
				width: 100%;
			}
			@media(min-width: 800px) {
				.work__summary {
					align-items: flex-end;
					padding-right: 50%;
				}
			}
			.work__description {
				border: 0 solid white;
				border-right-width: 1px;
				display: inline-block;
				font-family: monospace;
				letter-spacing: 1px;
				line-height: 1.75;
				max-width: 100%;
				padding: 2rem 0;
				right: 0;
				/*text-align: justify;*/
				width: 100%;
				width: 50%;
			}
			@media(min-width: 800px) {
				.work__description {
					padding: 2rem;
					width: 500px;
				}
			}
			.work__description-bg {
				background-image: linear-gradient(to left, black 2px, white 0, white);
				background-repeat: no-repeat;
				background-size: 0 100%;
				color: rgba(0,0,0, 0);
				display: none;
				transition: background-size 0s linear;
			}
			@media(min-width: 800px) {
				.work__description-bg {
					display: inline;
				}
			}
			.fp-completely .work__description-bg {
				background-size: 110% 100%;
				color: rgba(0,0,0, 1);
				transition: background-size 0.3s linear, color 0.1s linear 0.2s;
			}
			.work__tech {
				border: 1px solid;
				border-radius: 3px;
				color: rgba(255,255,255, 0);
				display: none;
				font-size: 0.75em;
				letter-spacing: 0;
				/*opacity: 0.75;*/
				padding: 2px 4px;
				vertical-align: text-top;
			}
			.fp-completely .work__tech {
				color: rgba(255,255,255, 1);
				transition: color 0.1s linear 0.2s;
			}
			@media(min-width: 800px) {
				.work__tech {
					display: inline;
				}
			}
			.work__link {
				background-image: linear-gradient(to top right, rgb(var(--white)) 50%, transparent 51%);
				background-position: right 2px top 2px;
				background-repeat: no-repeat;
				background-size: 200% 200%;
				border: 1px solid rgb(var(--white));
				border-radius: 50%;
				color: rgb(var(--white));
				display: block;
				font-size: 0.75rem;
				height: 4rem;
				height: 6rem;
				line-height: 4rem;
				line-height: 6rem;
				text-align: center;
				transition: background-position 0.2s ease-out, color 0.1s linear;
				vertical-align: middle;
				width: 4rem;
				width: 6rem;
			}
			.work__link::before {
				content: "rea";
			}
			.work__link::after {
				content: "d";
				letter-spacing: 0;
			}
			/*.work__link::before {
				content: "→";
				font-size: 1rem;
			}*/
			@media(min-width: 800px) {
				.work__link {
					height: 8rem;
					line-height: 8rem;
					width: 8rem;
				}
				/*.work__link::before {
					font-size: 0;
				}*/
			}
			.work__link:hover {
				background-position: left -1px bottom -1px;
				color: rgb(var(--pink));
			}
			
			/* Work: images */
			.work__images {
				/*bottom: 0;
				justify-content: flex-end;*/
				/*align-items: center;*/
				justify-content: flex-start;
			}
			@media(min-width: 800px) {
				.work__images {
					justify-content: center;
					padding-left: 50%;
					padding-right: 10%;
				}
			}
			.work__images-container {
				display: grid;
				grid-template-columns: repeat(20, 1fr);
				grid-template-rows: repeat(20, 1fr);
				height: 100%;
				max-width: 1112px;
				min-width: 60%;
				width: 100%;
			}
			@media(min-width: 800px) {
				.work__images-container {
					height: auto;
					transform: rotateX(50deg) rotateY(0deg) rotateZ(40deg);
					width: 130%;
				}
			}
			.work__images-container::after {
				content: "";
				padding-top: 100%;
				width: 10px;
			}
			.work__image {
				background-position: 0% 0%;
				background-size: 100% auto;
				border-radius: 3px;
				color: rgba(var(--blue), 0.2);
				overflow: hidden;
			}
			.work__image::after {
				border: 600px solid;
				bottom: 0;
				color: inherit;
				content: "";
				left: 0;
				position: absolute;
				right: 0;
				top: 0;
			}
			@media(min-width: 800px) {
				.work__image {
					color: transparent;
				}
			}
			.work__image--middle {
				color: rgba(var(--blue), 0.2);
			}
			.work__image--bottom {
				color: rgba(var(--blue), 0.4);
				filter: blur(2px);
			}
			.work__image--desktop-only {
				display: none;
			}
			@media(min-width: 800px) {
				.work__image--desktop-only {
					display: block;
				}
			}
			
			/* Section: vkgy */
			.section--vkgy {
				--top-color: var(--yellow);
				--bottom-color: var(--blue);
			}
			.section--vkgy .work__image {
				box-shadow: 0 0 4rem 0 rgba(var(--blue), 0.5);
			}
			.section--vkgy .work__image:nth-of-type(1) {
			}
			.i-v-1 {
				background-image: url(/images/img-vkgy-add_release.png);
				grid-column: 2 / span 15;
				grid-row: 4 / span 16;
			}
			.i-v-2 {
				background-image: url(/images/img-vkgy-artist.png);
				grid-column: 9 / span 12;
				grid-row: 1 / span 5;
			}
			.i-v-3 {
				background-image: url(/images/img-vkgy-blog_mobile.png);
				grid-column: 13 / span 7;
				grid-row: 12 / span 7;
			}
			@media(min-width: 800px) {
				.i-v-1 {
					grid-column: 1 / span 15;
					grid-row: 4 / span 16;
				}
				.i-v-2 {
					grid-column: 5 / span 13;
					grid-row: 1 / span 13;
				}
				.i-v-3 {
					grid-column: 12 / span 9;
					grid-row: 16 / span 5;
				}
			}
			
			/* Section: RarezHut */
			.section--rarezhut {
				--top-color: var(--purple);
				--bottom-color: var(--yellow);
			}
		</style>
		
		
		</div>
			<script type="text/javascript" src="/scripts/external/script-fullpage.js"></script>
			<script>
				new fullpage('#fullpage', {
					anchors: [ 'firstPage', 'secondPage', 'thirdPage' ],
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











