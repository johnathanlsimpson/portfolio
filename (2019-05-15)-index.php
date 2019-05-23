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
				--font-size: 16px;
				--margin: 1rem;
				--display: 'pirata one';
				--text: 'noto serif jp';
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
			.ja {
				color: rgb(var(--black));
				font-family: var(--text);
				font-size: 0.7rem;
				letter-spacing: 1em;
				line-height: 1;
				max-height: 100%;
				max-width: 100%;
				overflow: hidden;
				position: absolute;
				text-shadow: none;
				text-transform: uppercase;
				white-space: nowrap;
			}
			.vertical {
				text-align: center;
				text-orientation: upright;
				writing-mode: vertical-rl;
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
				border: 3px solid;
				border-radius: 50%;
				content: "";
				display: inline-block;
				height: 1rem;
				width: 1rem;
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
				background: linear-gradient( rgba(var(--blue), 1), rgba(var(--blue), 0.5) );
				min-height: 100vh;
				width: 100vw;
			}
			.works__container::before {
				background-image: linear-gradient(to bottom right, rgba(var(--blue), 0) 50%, rgba(var(--blue), 1) 51%);
				content: "";
				display: block;
				height: 7vh;
				position: absolute;
				top: -7vh;
				width: 100vw;
			}
		</style>
	</head>
	<body class="body">
		<div class="fixed deco__behind">
			<div class="deco__eins ja vertical">eins zwei drei vier</div>
		</div>
		<div class="fixed deco__over">
			<div class="deco__kaidan ja">13階段</div>
			<div class="deco__nav">
				<a class="deco__nav-item" href=""></a>
				<a class="deco__nav-item" href=""></a>
				<a class="deco__nav-item" href=""></a>
				<a class="deco__nav-item" href=""></a>
				<a class="deco__nav-item" href=""></a>
			</div>
		</div>
		
		<div id="fullpage">
		
		<div class="splash__container">
			<div class="splash__title">
				<div class="splash__john ja vertical">ジョン</div>
				John Simpson
			</div>
			<div class="splash__subtitle">
				web development <span class="splash__amp">&amp;</span> design
				<div class="splash__design ja">ウェブデザイン</div>
			</div>
		</div>
		
		<div class="section"></div>
		
		<div class="works__container section">
			
			<div class="works__shiseru ja vertical" style="color: white; left: 50%; position: sticky; top: 0; z-index:2; transform: translate(-50%, -25%);">WORK│</div>
				
				<div style="max-width: 1000px; margin: auto;">
					
					<div style="background: hsla(340,73%,25%,1); padding:2rem; height: 450px;">
						<span style="font-size:2rem; color:white;">vk.gy</span>
						

						
						<img src="/images/img-vkgy-artist.png" style="position: absolute; right: 0;width: 300px; transform:rotate(-5deg);" />
						
					</div>
			</div>
			</div>
		<div class="section">
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
				
		</div>
		
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
			<script>new fullpage('#fullpage', {
	//options here
	autoScrolling:true,
	scrollHorizontally: true
});</script>
		
			
			
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











