<?php
	$mydoc =& JFactory::getDocument();
	$title = $mydoc->getTitle();
?>

<html>
<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/templates/asana24/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/templates/asana24/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="/templates/asana24/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/templates/asana24/css/custom.css" type="text/css" />
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
		      <div class="pageTitle">
			      <?php echo $title; ?>
			  </div>
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
		<!-- <div class="content left"> -->
			<jdoc:include type="component" />
		<!-- </div> -->
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
