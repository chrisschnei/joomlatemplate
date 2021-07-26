<!DOCTYPE html>
<html lang="de">

<head>
	<jdoc:include type="head" />

<?php
        use Joomla\CMS\Factory;
        $doc = Factory::getDocument();

        // Unset unwanted jQuery JavaScript
        unset($doc->_scripts[$doc->baseurl . '/media/jui/js/jquery.min.js']);
        unset($doc->_scripts[$doc->baseurl . '/media/jui/js/jquery-noconflict.js']);
        unset($doc->_scripts[$doc->baseurl . '/media/jui/js/jquery-migrate.min.js']);
        unset($doc->_scripts[$doc->baseurl . '/media/system/js/caption.js']);
?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/templates/asana24/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/templates/asana24/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="/templates/asana24/css/custom.css" type="text/css" />
	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="fe55f0cf-7949-40f4-826a-bdc04bbc6b65" data-blockingmode="auto" type="text/javascript"></script>
	<script id="CookieDeclaration" src="https://consent.cookiebot.com/fe55f0cf-7949-40f4-826a-bdc04bbc6b65/cd.js" type="text/javascript" async></script>
</head>

<body>
	<div id="rahmen">
		<div class="gruende right">
			<jdoc:include type="modules" name="gruende" style="xhtml" />
		</div>
		<div class="logo left">
			<jdoc:include type="modules" name="logo" style="xhtml" />
		</div>
	</div>
	<div id="banner">
	</div>
<div>
		<nav style="width:100%" class="navbar navbar-default">
		  	<div class="navbar-header">
		      <button onclick="showHideMenu()" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		  </div>
		    <div id="navbar" class="collapse navigation">
		      <ul class="nav navbar-nav">
		      	<div class="navi">
		        <jdoc:include type="modules" name="navigation" style="xhtml" />
		        </div>
		      </ul>
		</div>
		</nav>
	</div>
<div id="rahmen">
	<div class="container">
		<div class="image left right">
			<jdoc:include type="modules" name="image" style="xhtml" />
		</div>
			<jdoc:include type="component" />
		<div class="anruf">
			<jdoc:include type="modules" name="anruf" style="xhtml" />
		</div>
		<div class="content left">
			<jdoc:include type="modules" name="contactformular" style="xhtml" />
		</div>
		<div class="content left">
			<jdoc:include type="modules" name="fragebogen" style="xhtml" />
		</div>
	</div>
	<div class="footer">
		<div class="footerelement">
			<jdoc:include type="modules" name="footer" style="xhtml" />
		</div>
	</div>
</div>

<script>
	function showHideMenu() {
		//Navigation hidden
		console.log(document.getElementById('navbar'))
		console.log(document.getElementById('navbar').className)
		if(document.getElementById('navbar').className.indexOf('in') == -1) {
			document.getElementById('navbar').className = 'navbar-collapse collapse in';
		}  else {
			//Show navigation
			document.getElementById('navbar').className = 'navbar-collapse collapse';
		}
	}
</script>

</body>

</html>
