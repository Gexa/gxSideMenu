<!DOCTYPE html>
<html>
<head>
	<title>gxSideMenu - jQuery plugin</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="charset" content="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<meta name="description" content="GexaSoftware - gxSideSelect jQuery Plugin 1.0.01 - copyright 2014" />
	<meta name="keywords" content="slide menu, slide, menu sliding, slider menu, jQuery menu, menu script, jquery menu script, entypo, iscroll, jquery" />
	<meta name="author" content="GexaSoftware" />
	<link href='http://fonts.googleapis.com/css?family=Questrial|Quicksand:300,400,700|Open+Sans+Condensed:300,300italic,700|Raleway:400,100,200,300,500,600,700,800,900|Merriweather:400,700,900,300italic,400italic,700italic,900italic,300|Indie+Flower&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/entypo.css" />
	
	<!--link rel="stylesheet" type="text/css" href="css/gx-sidemenu-blue.css"-->
	<!--link rel="stylesheet" type="text/css" href="css/gx-sidemenu-light.css"-->
	<link rel="stylesheet" type="text/css" href="css/gx-sidemenu-light.css" />
	
	<!-- ---- INCLUDES JQUERY MOBILE AT THE END OF THIS FILE!!! ---- -->
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
	<!-- ---- INCLUDES JQUERY MOBILE AT THE END OF THIS FILE!!! ---- -->
	
	<script type="text/javascript" src="js/iscroll.js"></script>
	<script type="text/javascript" src="js/gx.sidemenu.js"></script>

	<!-- ---- CODE HIGHLIGHTER ---- -->
	<link rel="stylesheet" type="text/css" href="assets/jquery.snippet.css" />
	<script type="text/javascript" src="assets/jquery.snippet.js"></script>

	<!-- ---- CODE HIGHLIGHTER ---- -->
	<script type="text/javascript">
		$(function() {
			$('#gx-sidemenu').gxSideMenu({
				mode: isMobile.any() ? 'tiny' : 'normal', // normal | tiny
				interval: 300, // animations' interval
				direction: 'left', // left | right
				openOnHover: true, // true | false
				clickTrigger: true, // true | false
				followURLs: true, // true | false
				trigger: ".gx-menu-open.list", // class or id of trigger element
				startFrom: 60, // start pixel from corner on hover trigger
				startClosed: true, // menu opens on document load
				scrolling: true, // menu scrollable (iScroll plugin needed!)
				urlBase: '/sidemenu/', // document base URL
				backText: 'Prev | Back', // Back button text
				onOpen: function() { }, // Open callback
				onClose: function() { } // Close callback
			});
			$('#gx-sidemenu-right').gxSideMenu({
				mode: 'tiny', // normal | tiny
				interval: 300,
				direction: 'right', // left | right
				openOnHover: true, // true | false
				followURLs: true, // true | false
				clickTrigger: false,
				trigger: ".gx-menu-open.share" // class or id of trigger element
			});
			
			$('pre.snippet').snippet("javascript", { style: 'ide-kdev' });
			$('pre.snippet-html').snippet("html", { style: 'ide-kdev' });

		});
	</script>
	<style type="text/css">
		/********************************* scrollbar *******************************/
		::-webkit-scrollbar {
		    width: 12px;
		}
		 
		/* Track */
		::-webkit-scrollbar-track {
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		    -webkit-border-radius: 10px;
		    border-radius: 10px;
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		    -webkit-border-radius: 10px;
		    border-radius: 10px;
		    background: #bbb; 
		}
		::-webkit-scrollbar-thumb:window-inactive {
			background:  rgba(182,182,182,0.4);
		}

		a {
			color: #222;
		}
		.gx-menu-open.list {
			top: 0px;
			height: 20px;
			line-height: 0px;
			left: 0px;
			right: auto;
		}
		.gx-menu-open.share {
			right: 3%;
			left: auto;
			top: 0px;
			height: 40px;
			line-height: 10px;
		}

		.gx-menu-open.mobile {
			line-height: 0.6em;
		}

		#wrapper {
			width: 80%;
			margin: auto;
			position: relative;
		}

		body {
			background: #eee;
			padding-left: 20px;
		}
		/*---------- ide-kdev Styles ---------*/
		.sh_ide-kdev {
			width: 100%;
		}
		.sh_ide-kdev .sh_sourceCode{background-color:#f9f9f9;color:#000;font-weight:normal;font-style:normal;}
		.snippet-wrap pre.sh_sourceCode{
			-moz-border-radius:0;
			-webkit-border-radius:0;
			border-radius:0;
			box-shadow: none !important;
			-moz-box-shadow: none !important;
			-webkit-box-shadow: none !important;
		}

		@media all and (max-width: 480px) {
			#wrapper {
				width: 96%;
			}
		}
	</style>
</head>

<body>
<div id="scroller">
	<div id="wrapper">
	<a href="javascript:" class="gx-menu-open entypo list"></a>
	<a href="javascript:" class="gx-menu-open entypo share" style="display: none !important"></a>

	<h1 style="font-weight: normal; padding: 5px 0 5px 55px;"><small style="color: #666; font-size: 18px;">$.</small>gxSideMenu<small style="color: #666;font-size: 18px;"> 1.0</small></h1>
	<p>
		Drag the mouse to the sides <b>OR</b> click the icon <small>(depending on options)</small>!
		<br />
		<br />
		<br />
		<b>#RESOURCES:</b>
		<br />
		<ul>
			<li><b>Fonts / pictograms:</b> Entypo pictograms by Daniel Bruce — www.entypo.com</li>
			<li><b>iScroll plugin:</b> iScroll v5.1.3 ~ (c) 2008-2014 Matteo Spinelli ~ http://cubiq.org/license</li>
			<li><b>jQuery 1.9</b> + <b>jQuery Mobile 1.45 </b><small>(only!!)</small><b> Events </b>: http://jquery.com, http://jquerymobile.com</li>
		</ul>
		<br />
		<br />
		<h3>#USAGE</h3>
		<h4>#JavaScript:</h4>
<pre class="snippet">
$(function() {
	$('#gx-sidemenu').gxSideMenu({
		mode: isMobile.any() ? 'tiny' : 'normal', // normal | tiny
		interval: 300, // animations' interval
		direction: 'left', // left | right
		openOnHover: true, // true | false
		clickTrigger: true, // true | false
		followURLs: true, // true | false
		trigger: ".gx-menu-open.list", // class or id of trigger element
		startFrom: 60, // start pixel from corner on hover trigger
		startClosed: true, // menu opens on document load
		scrolling: true, // menu scrollable (iScroll plugin needed!)
		urlBase: '/sidemenu/', // document base URL
		backText: 'Prev | Back', // Back button text
		onOpen: function() { }, // Open callback
		onClose: function() { } // Close callback
	});
});
</pre>
		<h4>#HTML:</h4>
<pre class="snippet-html">
&lt;div id="gx-sidemenu" style="z-index: 9998"&gt;
	&lt;div class="gx-sidemenu-inner" id="gx-sidemenu-inner-1"&gt;
		&lt;div class="scroll"&gt;
			&lt;ul class="gx-menu"&gt;
				&lt;li class="home"&gt;
					&lt;a href="?home"&gt;
						&lt;span class="icon entypo home"&gt;&lt;/span&gt;
						&lt;span class="text"&gt;Home&lt;/span&gt;
					&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="news"&gt;
					&lt;a href="#news"&gt;
						&lt;span class="icon entypo newspaper"&gt;&lt;/span&gt;
						&lt;span class="text"&gt;News / Events&lt;/span&gt;
					&lt;/a&gt;
					&lt;ul&gt;
						&lt;li&gt;
							&lt;a href="javascript:"&gt;
								&lt;span class="icon entypo pencil"&gt;&lt;/span&gt;
								&lt;span class="text"&gt;New Article&lt;/span&gt;
							&lt;/a&gt;
							&lt;ul&gt;
								&lt;li&gt;
									&lt;a href="?article=false"&gt;
										&lt;span class="icon entypo list"&gt;&lt;/span&gt;
										&lt;span class="text"&gt;Next level...&lt;/span&gt;
									&lt;/a&gt;
								&lt;/li&gt;
								...
							&lt;/ul&gt;
						&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/li&gt;
				...
			&lt;/ul&gt;
		&lt;/div&gt;
	&lt;/div&gt;

	&lt;div id="gx-sidemenu-login"&gt;
		&lt;div class="divider"&gt;&lt;/div&gt;
		&lt;h2&gt;
			&lt;span class="icon entypo user"&gt;&lt;/span&gt;
			&lt;span class="text"&gt;Welcome, {{UserName}}!&lt;/span&gt;
		&lt;/h2&gt;
		&lt;div class="divider"&gt;&lt;/div&gt;
		&lt;a href="?edit=profile" class="login-btn"&gt;Edit profile&lt;/a&gt;
		&lt;div class="divider"&gt;&lt;/div&gt;
		&lt;a href="?logout" class="login-btn"&gt;Log out...&lt;/a&gt;
		&lt;div class="divider"&gt;&lt;/div&gt;
	&lt;/div&gt;
	

&lt;/div&gt;
</pre>
		<b>#DOWNLOAD</b>
		<br />
		<div>
		<br />
			<a href="gxSideMenu-1.0.zip" style="font-weight: bold; color: #666;"> -- FULL CODE WITH EXAMPLES -- </a>
		</div>

		<br />
		<br />
		<b>#TERMS OF USE</B>
		<div>
			<p style="width: 100%; font-size: 14px;">
				<a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-nc-sa/2.5/hu/" style="float: right; width: 100px;">
					<img alt="Creative Commons Licenc" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/2.5/hu/88x31.png" />
				</a>
				<span style="float: left; width: 80%;">Ez a Mű a <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-nc-sa/2.5/hu/">Creative Commons Nevezd meg! - Ne add el! - Így add tovább! 2.5 Magyarország Licenc</a> feltételeinek megfelelően felhasználható.</span>
			</p>
			<br />
			<br />
		</div>
	</p>

<nav class="sidebars">
	<div id="gx-sidemenu-right" style="z-index: 9999">
		<div class="gx-sidemenu-inner">
			<ul class="gx-menu">
				<li class="facebook">
					<a href="https://www.facebook.com/gexasoftware.hu" target="_blank">
						<span class="icon entypo-social facebook"></span>
						<span class="text">Facebook</span>
					</a>
				</li>
				<li class="pinterest">
					<a href="javascript:">
						<span class="icon entypo-social pinterest"></span>
						<span class="text">Pinterest</span>
					</a>
				</li>
				<li class="linkedin">
					<a href="javascript:">
						<span class="icon entypo-social linkedin"></span>
						<span class="text">LinkedIn</span>
					</a>
				</li>
				<li class="skype">
					<a href="javascript:">
						<span class="icon entypo-social skype"></span>
						<span class="text">Skype</span>
					</a>
				</li>
				<li class="google">
					<a href="javascript:">
						<span class="icon entypo-social googleplus"></span>
						<span class="text">Google+</span>
					</a>
				</li>
				<li class="twitter">
					<a href="javascript:">
						<span class="icon entypo-social twitter"></span>
						<span class="text">Twitter</span>
					</a>
				</li>
				<li class="soundcloud">
					<a href="javascript:">
						<span class="icon entypo-social soundcloud"></span>
						<span class="text">SoundCloud</span>
					</a>
				</li>
				<li class="dropbox">
					<a href="javascript:">
						<span class="icon entypo-social dropbox"></span>
						<span class="text">DropBox</span>
					</a>
				</li>
				<li class="paypal">
					<a href="javascript:">
						<span class="icon entypo-social paypal"></span>
						<span class="text">PayPal</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div id="gx-sidemenu" style="z-index: 9998">
		<div class="gx-sidemenu-inner" id="gx-sidemenu-inner-1">
			<div class="scroll">
				<ul class="gx-menu">
					<li class="home">
						<a href="?home">
							<span class="icon entypo home"></span>
							<span class="text">Home</span>
						</a>
					</li>
					<li class="news">
						<a href="#news">
							<span class="icon entypo newspaper"></span>
							<span class="text">News / Events</span>
						</a>
						<ul>
							<li>
								<a href="javascript:">
									<span class="icon entypo pencil"></span>
									<span class="text">New Article</span>
								</a>
								<ul>
									<li>
										<a href="?article=false">
											<span class="icon entypo list"></span>
											<span class="text">Next level...</span>
										</a>
									</li>
									<li>
										<a href="?article=true">
											<span class="icon entypo video"></span>
											<span class="text">Another sub element...</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="gallery">
						<a href="?action=galleries">
							<span class="icon entypo picture"></span>
							<span class="text">Galleries</span>
						</a>
					</li>
					<li class="users">
						<a href="javascript:">
							<span class="icon entypo users"></span>
							<span class="text">Users</span>
						</a>
						<ul>
							<li>
								<a href="?login=true" target="_blank">
									<span class="icon entypo user"></span>
									<span class="text">Login</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="category">
						<a href="javascript:">
							<span class="icon entypo folder"></span>
							<span class="text">Categories</span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>

		<div id="gx-sidemenu-login">
			<div class="divider"></div>
			<h2>
				<span class="icon entypo user"></span>
				<span class="text">Welcome, {{UserName}}!</span>
			</h2>
			<div class="divider"></div>
			<a href="?edit=profile" class="login-btn">Edit profile</a>
			<div class="divider"></div>
			<a href="?logout" class="login-btn">Log out...</a>
			<div class="divider"></div>
		</div>
		

	</div>
	</nav>
	</div>
</div>
</body>
</html>