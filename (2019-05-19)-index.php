<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Pirata+One|Noto+Serif+JP&font-display=swap" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="/styles/external/style-fullpage.css" />
		
		<style>
			:root {
				--black: 0,0,0;
				--blue: 80,197,211;
				--pink: 255,0,161;
				--purple: 181,83,182;
				--yellow: 251,237,177;
				--white: 255,255,255;
				
				--primary: 0,0,0;
				--decoration: 0,0,0;
				
				--font-size: 16px;
				--margin: 1rem;
				--display: 'pirata one';
				--text: 'noto serif jp';
			}
			.fp-viewing-secondPage {
				--decoration: 255,255,255;
			}
			*, *::before, *::after {
				box-sizing: border-box;
				margin: 0;
				padding: 0;
				position: relative;
			}
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
			s {
				letter-spacing: 0;
				text-decoration: none;
			}
			
			.body {
				background: transparent;
				font-size: var(--font-size);
				overflow-x: hidden;
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
				color: rgb(var(--decoration));
				font-family: var(--text);
				font-size: 0.7rem;
				letter-spacing: 1em;
				line-height: 1;
				text-shadow: none;
				text-transform: uppercase;
				transition: color 0.1s linear 0.3s;
			}
			.text--positioned {
				max-height: 100%;
				max-width: 100%;
				overflow: hidden;
				position: absolute;
				white-space: nowrap;
			}
			.text--vertical {
				text-align: center;
				text-orientation: upright;
				writing-mode: vertical-rl;
			}
			.text--spaced {
				letter-spacing: 1em;
			}
			.text--secondary {
				font-family: monospace;
				letter-spacing: 1px;
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
					linear-gradient(to bottom, rgb(var(--white)) var(--margin), transparent 0 ),
					linear-gradient(to left,   rgb(var(--white)) var(--margin), transparent 0 ),
					linear-gradient(to top,    rgb(var(--white)) var(--margin), transparent 0 ),
					linear-gradient(to right,  rgb(var(--white)) var(--margin), transparent 0 );
			}
			.deco__kaidan {
				left: calc(var(--margin) + var(--margin));
				position: absolute;
				top: calc(var(--margin) + var(--margin));
			}
			.deco__eins {
				bottom: calc(var(--margin) + var(--margin));
				right: calc(var(--margin) + var(--margin));
				position: absolute;
			}
			.deco__nav {
				align-items: center;
				bottom: 0;
				display: flex;
				flex-direction: column;
				justify-content: center;
				left: var(--margin);
				padding-left: var(--margin);
				position: absolute;
				top: var(--margin);
			}
			.deco__nav-item {
				color: rgb(var(--white));
				padding: calc(var(--margin) / 2);
				pointer-events: auto;
			}
			.deco__nav-item:hover {
				color: rgb(var(--blue));
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
			
			.works__container {
				background:
					linear-gradient( rgb(var(--yellow)), rgb(var(--blue)) );
				min-height: 100vh;
				width: 100vw;
			}
			.works__container::before {
				background-image: linear-gradient(to bottom right, transparent 50%, rgb(var(--yellow)) 51%);
				content: "";
				display: block;
				height: 7vh;
				position: absolute;
				top: -7vh;
				width: 100vw;
			}
		</style>
	</head>
	<body class="body" style="overflow: hidden;">
		<div class="fixed deco__behind">
		</div>
		<div class="fixed deco__over">
			<div class="deco__kaidan text--ja">13階段</div>
			<div class="deco__eins text--ja" style="writing-mode: vertical-rl; top: 50%; color: rgb(var(--pink));">eins zwei</div>
			<div class="deco__nav" id="menu">
				<a class="deco__nav-item" data-menuanchor="firstPage" href="#firstPage"></a>
				<a class="deco__nav-item" data-menuanchor="secondPage" href="#secondPage"></a>
				<a class="deco__nav-item" data-menuanchor="thirdPage" href="#thirdPage"></a>
				<a class="deco__nav-item" href=""></a>
				<a class="deco__nav-item" href=""></a>
			</div>
			
			<div class="text--secondary" style="right: 2rem; top: 2rem; position: fixed; color: white;">
				Twitter Instagram Github
			</div>
		</div>
		
		<div id="fullpage">
		
		<div class="splash__container">
			<div class="splash__title">
				<div class="splash__john text--ja text--vertical">ジョン</div>
				John Simpson
			</div>
			<div class="splash__subtitle">
				web development <span class="splash__amp">&amp;</span> design
				<div class="splash__design text--ja">ウェブデザイン</div>
			</div>
		</div>
		
		<div class="section" data-anchor="firstPage" style="align-items: center; display: flex; flex-direction: column; height: 100vh; padding-bottom: 4rem;">
			<a class="text--ja text--vertical" style="color: white; margin-top: auto; text-decoration: none;" href="#secondPage">WORK<s>↓</s></a>
		</div>
		
		<div class="works__container section" data-anchor="secondPage"  style="display:flex; flex-direction:column-reverse; align-items:center; justify-content: center; max-width:100%;">
			<div class="ja" style="left: 2rem; top: 2rem; position: absolute;">　　　　に殺された</div>
			
			<div class="ja vertical" style="top: 2rem; position:absolute; left: 50%; color: black;">Work<span style="letter-spacing:0;">|</span></div>
			
			
			<div class="work__container work__screens">
				<div class="screen__wrapper">
					<div class="screen__image screen--bottom" style="background-image: url(/images/img-vkgy-add_release.png);"></div>
					<div class="screen__image screen--middle" style="background-image: url(/images/img-vkgy-artist.png);"></div>
					<div class="screen__image" style="background-image: url(/images/img-vkgy-blog_mobile.png);"></div>
				</div>
			</div>
			<div class="work__container work__details">
				<h2 class="details__title text--spaced">
					vk.g<s>y</s>
				</h2>
				
				<div class="details__left">
					<p class="details__description">
						Lead developer, designer, and community manager for multi-lingual library of band information. Custom design powered by custom PHP/SQL CMS.
					</p>
				</div>
				
				<a class="work__link text--ja text--spaced">Visi<s>t</s></a>
			</div>
			
			<style>
				.work__container {
					align-items: center;
					display: flex;
					flex-direction: column;
					height: 77%;
					justify-content: center;
					padding: calc(var(--margin) * 4);
					position: absolute;
					width: 100%;
				}
				@media(min-width: 800px) {
					.work__container {
						height: 100%;
					}
				}
				
				.work__details {
					top: 0;
				}
				.details__title {
					background: white;
					color: var(--primary);
					display: inline-block;
					font-family: var(--text);
					line-height: 2ex;
					padding: 2rem;
				}
				.details__left {
					display: flex;
					flex-direction: column;
					width: 100%;
				}
				@media(min-width: 800px) {
					.details__left {
						align-items: flex-end;
						padding-right: 50%;
					}
				}
				.details__description {
					background: radial-gradient(#a0d7c3, transparent 70%);
					border: 0 solid white;
					display: inline-block;
					font-family: monospace;
					letter-spacing: 1px;
					line-height: 1.75;
					max-width: 100%;
					padding: 2rem 0;
					right: 0;
					text-shadow:
						 1px  1px 0    #a0d7c3,
						 2px  2px 0    #a0d7c3;
					width: 100%;
				}
				@media(min-width: 800px) {
					.details__description {
						border-right-width: 1px;
						padding: 2rem;
						width: 500px;
					}
				}
				.work__link {
					background-image: linear-gradient(to top right, rgb(var(--white)) 50%, transparent 51%);
					background-position: left bottom;
					background-repeat: no-repeat;
					background-size: 0 0;
					border: 1px solid rgb(var(--white));
					border-radius: 50%;
					color: rgb(var(--white));
					display: block;
					height: 8rem;
					line-height: 8rem;
					text-align: center;
					transition: background-size 0.1s ease-in-out, color 0.1s linear;
					vertical-align: middle;
					width: 8rem;
				}
				.work__link:hover {
					background-size: 200% 200%;
					color: rgb(var(--pink));
				}
				
				.work__screens {
					bottom: 0;
				}
				@media(min-width: 800px) {
					.work__screens {
						padding-left: 37%;
					}
				}
				.screen__wrapper {
					display: grid;
					grid-template-columns: repeat(20, 1fr);
					grid-template-rows: repeat(20, 1fr);
					max-width: 1112px;
					min-width: 60%;
					transform: rotateX(50deg) rotateY(0deg) rotateZ(40deg);
					width: 130%;
				}
				.screen__wrapper::after {
					content: "";
					padding-top: 100%;
					width: 10px;
				}
				.screen__image {
					background-position: 0% 0%;
					background-size: 100% auto;
					border-radius: 3px;
					color: transparent;
					overflow: hidden;
				}
				.screen__image::after {
					border: 600px solid;
					bottom: 0;
					color: inherit;
					content: "";
					left: 0;
					position: absolute;
					right: 0;
					top: 0;
				}
				.screen__image:nth-of-type(1) {
					grid-column: 1 / span 15;
					grid-row: 4 / span 16;
				}
				.screen__image:nth-of-type(2) {
					grid-column: 5 / span 13;
					grid-row: 1 / span 13;
				}
				.screen__image:nth-of-type(3) {
					grid-column: 12 / span 9;
					grid-row: 16 / span 5;
				}
				
				.screen--middle {
					color: rgba(var(--blue), 0.2);
				}
				.screen--bottom {
					color: rgba(var(--blue), 0.4);
				}
			</style>
			
			
			
			
			<div class="ja vertical" style="color: black; left: 5rem; top: 50%; transform: translateY(-50%); text-orientation:initial; transform: scale(-1) translateX(-50%) translateY(50%);">
				vk.gy<span style="font-family:'pirata one'; font-size: 2rem; text-orientation:upright; display: inline-block; transform: scale(-1); line-height: 1ex;">2</span>
			</div>
			
			<!--<div style="width: 600px; left: 25%; top: 43%; z-index:3;  position: absolute; ">
				<h1 style="animation: fadeUp 0.5s linear; font-size: 1rem; font-family: 'noto serif jp'; letter-spacing: 1em; line-height: 1; margin-bottom: 2rem;">
					vk.gy
				</h1>
				<p style="animation: fadeIn 0.3s linear; font-family: monospace; line-height: 2;">
					Lead developer, designer, and community manager for large, dynamic library of band information. Based on custom CMS.
				</p>
				
				<span style="display:inline-block; margin: 1.5rem 1rem 0 -0.5rem;padding:0.5rem; border-radius:0.5rem; border: 1px solid rgba(0,0,0,1); opacity:0.2;">CSS</span>
				<span style="display:inline-block; margin: 1.5rem 1rem 0 -0.5rem;padding:0.5rem; border-radius:0.5rem; border: 1px solid rgba(0,0,0,1); opacity:0.2;">PHP</span>
			</div>-->
			
			<!--<div class="cc" style="position:absolute; left: 48%; top: 20%; height:600px; width:800px; box-shadow: 0 0 8rem 0 rgba(0,0,0,0.1); background-image: url(1.png); background-size: cover; background-position: top; transform: rotateX(50deg) rotateY(0deg) rotateZ(40deg);">
				
			</div>
			<div class="cc" style="position:absolute; left: 40%; top: 30%; height:400px; width:600px; box-shadow: 0 0 8rem 0 rgba(0,0,0,0.1);  background-image: url(1.png); background-size: cover; background-position: center; transform: rotateX(50deg) rotateY(0deg) rotateZ(40deg);">
				
			</div>
			<div class="cc" style="position:absolute; left: 60%; top: 50%; height:400px; width:300px; box-shadow: 0 0 8rem 0 rgba(0,0,0,0.1);  background-image: url(1.png); background-size: cover; background-position: center; transform: rotateX(50deg) rotateY(0deg) rotateZ(40deg);">
				
			</div>-->
			
			
			
		</div>
		<div class="works__container section" data-anchor="thirdPage"  style="background-image:linear-gradient(rgb(var(--pink)), rgb(var(--purple))); display:flex; flex-direction:column; align-items:center; justify-content: center;">
			<div class="ja" style="left: 2rem; top: 2rem; position: absolute;">　　　　に殺された</div>
			
			<div class="ja vertical" style="top: 2rem; position:absolute; left: 50%; color: black;">Work<span style="letter-spacing:0;">|</span></div>
			
			<div class="ja" style="left: 2rem; bottom: 2rem; position: absolute; white-space: pre; line-height:1ch;">
悲

し

み

の

地に咲く花
			</div>
			
			<div class="ja vertical" style="color: black; left: 5rem; top: 50%; transform: translateY(-50%); text-orientation:initial; transform: scale(-1) translateX(-50%) translateY(50%);">
				RarezHut<span style="font-family:'pirata one'; font-size: 2rem; text-orientation:upright; display: inline-block; transform: scale(-1); line-height: 1ex;">3</span>
			</div>
			
			<div style="width: 600px; left: 25%; top: 43%; z-index:3;  position: absolute; ">
				<h1 style="color:white; animation: fadeUp 0.5s linear; font-size: 1rem; font-family: 'noto serif jp'; letter-spacing: 1em; line-height: 1; margin-bottom: 2rem;">
					RarezHut
				</h1>
				<p style="color:white; animation: fadeIn 0.3s linear; font-family: monospace; line-height: 2;">
					Lead developer, designer, and community manager for large, dynamic library of band information. Based on custom CMS.
				</p>
				
				<span style="display:inline-block; margin: 1.5rem 1rem 0 -0.5rem;padding:0.5rem; border-radius:0.5rem; border: 1px solid rgba(0,0,0,1); opacity:0.2;">CSS</span>
				<span style="display:inline-block; margin: 1.5rem 1rem 0 -0.5rem;padding:0.5rem; border-radius:0.5rem; border: 1px solid rgba(0,0,0,1); opacity:0.2;">PHP</span>
			</div>
			
			<div class="cc" style="position:absolute; left: 48%; top: 20%; height:600px; width:800px; box-shadow: 0 0 8rem 0 rgba(0,0,0,0.1); background-image: url(1.png); background-size: cover; background-position: top; transform: rotateX(50deg) rotateY(0deg) rotateZ(40deg);">
				
			</div>
			<div class="cc" style="position:absolute; left: 40%; top: 30%; height:400px; width:600px; box-shadow: 0 0 8rem 0 rgba(0,0,0,0.1);  background-image: url(1.png); background-size: cover; background-position: center; transform: rotateX(50deg) rotateY(0deg) rotateZ(40deg);">
				
			</div>
			<div class="cc" style="position:absolute; left: 60%; top: 50%; height:400px; width:300px; box-shadow: 0 0 8rem 0 rgba(0,0,0,0.1);  background-image: url(1.png); background-size: cover; background-position: center; transform: rotateX(50deg) rotateY(0deg) rotateZ(40deg);">
				
			</div>
			
			
			
		</div>
			
			<style>
				.cc {
					background-position: -50% 0;
					transition: background-position 3s linear;
				}
			</style>
			
			
			<!--<div class="splash__title" style="line-height: 1;color: rgb(var(--blue)); margin:0 auto;">
				Web development
			</div>-->
			
			
			<!--<div class="works__shiseru ja vertical" style="color: white; left: 50%; position: absolute; top: 0; z-index:2; transform: translate(-50%, -25%);">WORK│</div>
				
				<div style="font-size: 4rem;">vk.gy</div>
				<div style="font-size: 2rem;">Large database of band information, dynimcally linked through custom database and CMS.</div>
			</div>-->
			
			
		<!--<div class="section">
				<div style="max-width: 1000px; margin:auto;">
					<div style="background: #333333; padding:2rem; height: 450px;">
						<span style="font-size:2rem; color:white;">RarezHut</span>
						

						
						<img src="/images/img-vkgy-artist.png" style="position: absolute; right: 0;width: 300px; transform:rotate(-5deg);" />
						
					</div>
					<div style="background: seagreen; padding:2rem; height: 450px;">
						<span style="font-size:2rem; color:white;">Augusta Counseling Group</span>
						

						
						<img src="/images/img-vkgy-artist.png" style="position: absolute; right: 0;width: 300px; transform:rotate(-5deg);" />
						
					</div>
					<div style="background: magenta; padding:2rem; height: 450px;">
						<span style="font-size:2rem; color:white;">BCALLA</span>
						

						
						<img src="/images/img-vkgy-artist.png" style="position: absolute; right: 0;width: 300px; transform:rotate(-5deg);" />
						
					</div>
					<div style="background: hsla(340,73%,25%,1); padding:2rem; height: 450px;">
						<span style="font-size:2rem; color:white;">vk.gy</span>
						

						
						<img src="/images/img-vkgy-artist.png" style="position: absolute; right: 0;width: 300px; transform:rotate(-5deg);" />
						
					</div>
					<div style="background: hsla(340,73%,25%,1); padding:2rem; height: 450px;">
						<span style="font-size:2rem; color:white;">vk.gy</span>
						

						
						<img src="/images/img-vkgy-artist.png" style="position: absolute; right: 0;width: 300px; transform:rotate(-5deg);" />
						
					</div>
					
				</div>
				
		</div>-->
		
		</div>
		<style>
			.img {
				max-width: 200px;
				transform: skew(5deg);
			}
			
			
			
			.ja--vertical {
			}
			.ja__container {
			}
			
			.nav__item::before {
				border: 2px solid white;
				border-radius: 50%;
				content: "";
				display: inline-block;
				height: 0.75rem;
				width: 0.75rem;
			}
			.nav__item:first-of-type::before {
				background: white;
			}
			
			@keyframes fadeDown {
				0% {
					opacity: 1;
				}
				100% {
					opacity: 0.5;
				}
			}
			
			.section__john {
				opacity: 0.5;
			}
			.section__john b {
				display: inline-block;
				font-weight: normal;
			}
			.section__john :nth-of-type(02),
			.section__john :nth-of-type(07),
			.section__john :nth-of-type(09),
			.section__john :nth-of-type(10) {
				transform: translateY(-10%);
			}
			.section__john :nth-of-type(04),
			.section__john :nth-of-type(11) {
				transform: translateY(10%);
			}
			
			.hi__container {
				animation: fadeUp 0.3s linear;
				animation-fill-mode: forwards;
				text-shadow:
					1px 1px 0 #b553b6,
					2px 2px 0 #b553b6,
					3px 3px 0 #b553b6;
			}
		</style>
			<script type="text/javascript" src="/scripts/external/script-fullpage.js"></script>
			<script>
				new fullpage('#fullpage', {
					anchors: [ 'firstPage', 'secondPage', 'thirdPage' ],
					autoScrolling: true,
					licenseKey: 'bY0!fx9l',
					menu: '#menu',
					verticalCentered: false,
					scrollBar: false,
				});
			</script>
		
			
			
			<!--<div style="right: 1rem; bottom: 1rem; position:absolute; text-transform: uppercase; font-family: 'noto serif jp'; font-size: 0.75rem;  writing-mode: vertical-rl;
  text-orientation: upright; font-family:monospace;">
				eins zwei drei vier
			</div>
			<div style="transform-origion: left; left: 1rem; top: 1rem; position:absolute; text-transform: uppercase; font-size: 0.75rem; transform:rotate(90deg);">
				死せる華
			</div>
			
			<div style="left: 2rem; bottom: 2rem; position:absolute; letter-spacing: 0.5rem;">
				13階段
			</div>-->
			
			<!--<div class="a"  style="line-height:1; left:0; top:0; position:absolute; display: flex; align-items:center; justify-content:space-around; font-family: 'pirata one'; font-size: 10vw; height:100%; width:100%; transform-origin: left; transform: translateZ(-2px) scale(1.2);">
				<span>
					J<b>o</b>hn S<b>i</b>mpso<b>n</b>
				</span>
			</div>
			
			<div  class="a" style="line-height:1; left:0; top:0; position:absolute; display: flex; align-items:center; justify-content:space-around; font-family: 'pirata one'; font-size: 10vw; height:100%; width:100%; transform-origin: left; transform: translateZ(2px) scale(0.8);">
				<span>
					Joh<b>n</b> Sim<b>p</b>son
				</span>
			</div>
			
			<div  class="a" style="line-height:1; left:0; top:0; position:absolute; display: flex; align-items:center; justify-content:space-around; font-family: 'pirata one'; font-size: 10vw;  height:100%; width:100%; transform-origin: left;">
				<span>
					<b>J</b>o<b>h</b>n <b>S</b>i<b>m</b>p<b>so</b>n
				</span>
			</div>-->
			
		<!--<style>
			.a {
				color: transparent;
				font-weight: normal;
			}
			.a b {
				color: black;
				font-weight: normal;
		color: rgba(251,237,177,1);
		text-shadow:
			4px 4px rgba(80,197,211,1),
			8px 8px rgba(255,0,161,1);
			}
			</style>
		<section class="section__splash any--full-pseudo" style="max-width:1000px; height:100vh; display:flex; position:absolute;">
			<div style="flex: 1; top: 20%; font-family: 'pirata one'; text-align: left; color: white; line-height: 0.8; font-size:10rem; position:absolute; color:#dea0b3; font-size:22vw; white-space: nowrap; width: 100vw; overflow:hidden; text-align:center;">
				Ĵőħņ Śïmþšøñ
			</div>
			<div style="width:50%; font-family:'yeseva one'; color: white; text-shadow: 0 0 10px #be4ab4, 1px 1px 0 #be4ab4, 1px 1px 1px #be4ab4, 2px 2px 0 #be4ab4, 3px 3px 0 #be4ab4; font-size:2rem;">
				Hi, I'm John,<br />
				a web developer and designer from Virginia. I love PHP, CSS, databases, and bad music.<br />
				<label>let's work together</label>
			</div>
		</section>-->
			
		
		<!--<section class="section__what" style="margin-top: 100vh;">
			<h1>
				What I can do for you
			</h1>
			
			<p>
				I'm a designer and coder who specializes in building websites that address custom needs.
			</p>
			<p>
				I have 10+ years working with HTML, CSS, JavaScript, PHP, and SQL. I have a particular love for smoothing out user experiences based on real feedback, and for making websites beautiful, fast, and mobile-friendly.
			</p>
			<p>
				I dabble in everything, and love meeting new challenges.
			</p>
			
			<h2>
				Need a website?
			</h2>
			
			<p>
				Contact me here: <a href="">johnathan.l.simpson@gmail.com</a>.
			</p>
			
			<ul>
				<li><a href="">GitHub</a></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Facebook</a></li>
			</ul>
		</section>
		
		<section class="section__works">
			<h1>
				Web development
			</h1>
			
			<h3>
				vk.gy
			</h3>
			<h5>
				2014~ongoing
			</h5>
			<h5>
				PHP, HTML5, CSS3, SQL, JavaScript ES6, jQuery, Photoshop, Illustrator
			</h5>
			<p>
				“Online library” that dynamically links bands, musicians, record labels, CD releases, and news.
			</p>
			<ul>
				<li>Logo and brand design.</li>
				<li>Custom CMS.</li>
				<li>Database architecure.</li>
				<li>Community and social media management.</li>
				<li>Custom multi-language implementation.</li>
				<li>Admin management.</li>
				<li>SEO optimization.</li>
			</ul>
			
			<hr />
			
			<h3>
				RarezHut
			</h3>
			<h5>
				2019
			</h5>
			<h5>
				PHP, HTML5, CSS3, SQL, JavaScript ES6
			</h5>
			<p>
				Custom auction system for record store.
			</p>
			<ul>
				<li>Custom CMS.</li>
				<li>Database architecure.</li>
				<li>Custom front-end that allows live chat, live video, and live bidding on items.</li>
				<li>Custom back-end.</li>
				<li>Pre-auction bidding, live bidding.</li>
				<li>Admin management panel.</li>
				<li>Integration with existing design.</li>
				<li>Delivered within limited time frame due to pre-scheduled live date.</li>
			</ul>
			
			<hr />
			
			<h3>
				BCALLA VALENTINE
			</h3>
			<h5>
				2016
			</h5>
			<h5>
				HTML5, CSS3, jQuery
			</h5>
			<p>
				Valentine's Day campaign for NY fashion designer BCALLA that allows visitors to email virtual Valentines.
			</p>
			<ul>
				<li>Single-page, mobile-friendly website.</li>
				<li>“Old internet” design with modern technologies.</li>
				<li>Speed/bandwidth optimization due to hosting limitations.</li>
				<li>Mailchimp API.</li>
				<li>Realized clients design.</li>
				<li>Delivered in limited time frame.</li>
			</ul>
			
			<hr />
			
			<h3>
				MICHAEL BURK
			</h3>
			<h5>
				2014~2016
			</h5>
			<h5>
				PHP, HTML5, CSS3, jQuery
			</h5>
			<p>
				Online portfolio for NY graphic designer and photographer.
			</p>
			<ul>
				<li>Worked with client to realize his designs.</li>
				<li>Custom CMS to allow client to upload new portfolio sections with flexibility.</li>
				<li>Mobile-friendly design with speed in mind.</li>
				<li>Refined UI/UX based on client feedback to reach best experience for editing of lookbooks.</li>
			</ul>
			
			<hr />
			
			<h3>
				**** Counseling Group
			</h3>
			<h5>
				2017
			</h5>
			<h5>
				HTML5, CSS3, JS ES6, Photoshop
			</h5>
			<p>
				Online presence for mental health counselor business. (Full name ommitted.)
			</p>
			<ul>
				<li>Logo and brand design.</li>
				<li>Static multi-page website.</li>
				<li>Website design, keeping in mind potential aversion to bright colors for potential clients.</li>
				<li>Maintenance and updating of website and hosting.</li>
			</ul>
			
			<hr />
			
			<h3>
				Blog reskins (various)
			</h3>
			<h5>
				2008~2014
			</h5>
			<h5>
				CSS, Photoshop
			</h5>
			<p>
				Custom blog reskins for various clients.
			</p>
			<ul>
				<li>Completely reskinned blogs with constraint of only being able to use CSS and images.</li>
			</ul>
		</section>
		
		<section class="section__design">
			<h1>
				Graphic design
			</h1>
			
			<h3>
				RIOT GALE of NINE YEARS
			</h3>
			<h5>
				Photoshop
			</h5>
			<p>
				Custom jacket and book design.
			</p>
			
			<hr />
			
			<h3>
				Poster
			</h3>
			<ul>
				<li>UNDER CODE PRODUCTION</li>
			</ul>
			
			<hr />
			
			Postcards, stickers
			
			<hr />
			
			<h3>
				Logos
			</h3>
			A'UREA, Abc Counseling Group, vk.gy, WLUCP, Harrisonburg 4 Miler
			
			<hr />
			
			<h3>
				T-shirt design
			</h3>
			<ul>
				<li>HEADBANG</li>
				<li>VANITAS</li>
				<li>Timeline</li>
				<li>Kaitai</li>
				<li>Band logos</li>
			</ul>
		</section>
		
		<section class="section__form">
			<h1>
				Form design
			</h1>
			
			<h3>
				Shamrock Foods
			</h3>
			<p>
				Paper form refresh project for Shamrock Farms.
			</p>
			<ul>
				<li>Constraints: Word, Excel, and VBA only.</li>
				<li>Tasked with redesigning company paperwork.</li>
				<li>Unified, user-friendly design.</li>
				<li>Focused on user experience to ensure ease of filling in and maintenance.</li>
				<li>Talked with actual employees/users of paperwork to find real problems.</li>
				<li>Streamlined, removed duplicate spaces.</li>
				<li>Blank spaces: illegal. Worked to remove confusion and road blocks.</li>
				<li>Use VBA/macros/etc to automate when possible.</li>
				<li>For digital-only paperwork, disallow editing and eliminate junk data.</li>
				<li>Paperwork adopted at other branches.</li>
			</ul>
			
			<h3>
				Hold policy refresh
			</h3>
			<ul>
				<li>Talked to actual employees involved in hold process.</li>
				<li>Based on legal documentation and lab work, came up with concrete rules.</li>
				<li>Eliminated road blocks causing people to go around holds.</li>
				<li>Refreshed hold system.</li>
				<li>More than doubled hold usage, and decreased spoiled product by more than half.</li>
				<li>System adopted at other branches.</li>
			</ul>
		</section>
			<div style="border: 10px solid green; width: 100px; height: 100px; right: 0; bottom: 0; transform: translateZ(-1px);">
				
			</div>-->
		
		<script type="text/javascript" src="fullpage.js"></script>
		
		
	</body>
</html>











