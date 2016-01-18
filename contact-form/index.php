<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE HTML>
<html>
<head>
	<!--
		seyDoggy Kleer - see release notes (../rw_common/themes/kleer/release.txt)
	-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="(null)" content="(null)" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="icon" href="http://www.elektronprojekt.pl/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="http://www.elektronprojekt.pl/favicon.ico" type="image/x-icon" />
		
	<title>Kontakt</title>
	<!-- Theme Default Styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/styles.css" />
	<link rel="stylesheet" type="text/css" media="print" href="../rw_common/themes/kleer/css/print.css" />
	<!-- Theme Libraries -->
	<script>sdNav = {};RwSet = {pathto: "../rw_common/themes/kleer/javascript.js",baseurl: "http://www.elektronprojekt.pl/"};</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://seydoggy.github.com/libs/themes/rw/common.min.js"></script>
	<script src="http://seydoggy.github.com/libs/themes/rw/Kleer.min.js"></script>
	<script src="../rw_common/themes/kleer/javascript.js"></script>
	<!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- Theme Options -->
	<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/corners/small.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/title/left.css" />
		<script type="text/javascript" src="../rw_common/themes/kleer/scripts/navigation/3tier.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/background/gradNone.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/width/1060.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/background/tileLinen.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/headerheight/headerHeightHidden.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/custombg/headerTransparent.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/sidebar/normal.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/sidebar/right.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/typography/helvetica.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/typography/fontSizeMedium.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/typography/lineHeightMedium.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/background/ec2_tileNone.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/background/ec3_tileNone.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/background/copyright_tileNone.css" />
		
	<!-- Theme Color Options -->
	<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/colourtag-theme-default.css" />
	<!-- Plugin Resources -->
	
	<!-- User Resources -->
	
	
	<!-- User Styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/kleer/css/custom.css" />
	
</head>
<body>
	<div class="wrapperOuter wrapperHeader">
		<div class="wrapperHeader_bg">
			<div class="wrapperInner">
				<header class="siteHeader">
					<div class="titleBlock">
						<a class="logo" href="http://www.elektronprojekt.pl/" title="Elektron Projekt"></a><!-- .logo -->
						<hgroup class="title">
							<h1 class="site_title">Elektron Projekt</h1>
							<h2 class="site_slogan">Projektowanie Elektryczny, Nadzory Inwestorskie</h2>
						</hgroup><!-- .title -->
						<div class="clear"></div>
					</div><!-- .titleBlock -->
					<nav id="toolbar_horizontal"><ul class="toolbarList"><li class="normalListItem"><a class="normal" href="../index.html" rel="self" title="Strona Głowna">Strona Głowna</a></li><li class="normalListItem"><a class="normal" href="../page1/index.html" rel="self" title="Projekty">Projekty</a></li><li class="normalListItem"><a class="normal" href="../page2/index.html" rel="self" title="Realizacje">Realizacje</a></li><li class="currentListItem"><a class="current" href="index.php" rel="self" title="Kontakt">Kontakt</a></li></ul></nav><!-- #toolbar_horizontal -->
					<div class="clear"></div>
					<div class="headerContainer">
						<div id="extraContainer1" class="preContent">
							<!--extra user content renders here-->
						</div><!-- #extraContainer1 .preContent -->
						<div class="seydoggySlideshow radiusAll contentShadow">
							<div class="pageHeader radiusAll"></div><!-- .pageHeader -->
						</div><!-- .seydoggySlideshow -->
						<div class="clear"></div>
					</div><!-- .headerContainer -->
				</header><!-- .siteHeader -->
				<nav id="toolbar_sub"></nav><!-- #toolbar_sub -->
			</div><!-- .wrapperInner -->
		</div><!-- .wrapperHeader_bg -->
	</div><!-- .wrapperOuter -->
	<div class="wrapperOuter wrapperContent">
		<div class="wrapperInner">
			<section class="mainContent">
				
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Imię i nazwisko:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Temat:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Wiadomość:</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Wyczyśczyj" />
		<input class="form-input-button" type="submit" name="submitButton" value="Wyślij" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
			</section><!-- .mainContent -->
			<aside class="sidebarContent">
				<nav id="toolbar_vertical"></nav><!-- #toolbar_vertical -->
				<section class="sidebar">
					<div class="sidebar_title">
						
					</div><!-- .sidebar_title -->
					<img class="imageStyle" alt="ElekronLogoGreySmall" src="files/elekronlogogreysmall-2.png" width="172" height="97" /><span style="font:12px Times, Georgia, Courier, serif; "><br /></span>P.H.U. ELEKTRON<br />ul. Umińskiego 5/123<br />03-984 Warszawa<br />tel. : 224662761<br />tel. : 607612088<br />e-mail : elekron1@o2.pl<br />	     biuro@elektronprojekt.pl<br />strona : www.elektronprojekt.pl<br />	     www.projektelektryczny.com.pl
				</section><!-- .sidebar -->
				<section class="plugin_sidebar">
					
				</section><!-- .plugin_sidebar -->
			</aside><!-- .sidebarContent -->
			<div class="clear"></div>
		</div><!-- .wrapperInner -->
	</div><!-- .wrapperOuter -->
	<div class="wrapperOuter wrapperPostContainer innerShadowTop">
		<div class="wrapperInner" id="extraContainer2">
			<!--extra user content renders here-->
			<div class="clear"></div>
		</div><!-- .wrapperInner -->
	</div><!-- .wrapperOuter -->
	<div class="wrapperOuter wrapperFooter innerShadowTop">
		<div class="wrapperInner" id="extraContainer3">
				<!--extra user content renders here-->
			<div class="clear"></div>
		</div><!-- .wrapperInner -->
	</div><!-- .wrapperOuter -->
	<div class="wrapperOuter wrapperCopyright innerShadowTop">
		<footer class="wrapperInner">
			<section class="footer">&copy; 2013 Elektron Projekt <a href="#" id="rw_email_contact">Kontakt</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":bi";var _rwObsfuscatedHref3 = "uro";var _rwObsfuscatedHref4 = "@el";var _rwObsfuscatedHref5 = "ekt";var _rwObsfuscatedHref6 = "ron";var _rwObsfuscatedHref7 = "pro";var _rwObsfuscatedHref8 = "jek";var _rwObsfuscatedHref9 = "t.p";var _rwObsfuscatedHref10 = "l";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></section><!-- .footer -->
			
			<div class="clear"></div>
		</footer><!-- .wrapperInner -->
	</div><!-- .wrapperOuter -->
</body>
</html>