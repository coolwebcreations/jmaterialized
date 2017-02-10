<?php defined( '_JEXEC' ) or die; 
// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;
$templateparams	= $app->getTemplate(true)->params;
// generator tag
$this->setGenerator(null);
// force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible','IE=edge,chrome=1');
// css
$doc->addStyleSheet($tpath.'/css/materialize.css');
$doc->addStyleSheet($tpath.'/css/template.css');
?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	<script type="text/javascript">
		//<![CDATA[
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement("style");
			msViewportStyle.appendChild(
				document.createTextNode("@-ms-viewport{width:auto!important}")
			);
			document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		}
		//]]>
	</script>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="HandheldFriendly" content="true"/>
	<meta name="apple-mobile-web-app-capable" content="YES"/>
	<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
	<!-- Le HTML5 shim and media query for IE8 support -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="<?php echo $tpath; ?>/js/respond.min.js"></script>
	<![endif]-->
</head>
<header>
  	<!-- Top Navigation and logo -->
	<nav class="<?php echo $templateparams->get('nav_suffix'); ?>">
		<div class="container ">
			<div class="nav-wrapper">
			<a id="logo-container" href="<?php echo JURI::base() . $templateparams->get('logo_url'); ?>" class="brand-logo"><img style="height: 65px; padding: 5px;" src="<?php echo JURI::base() . $params->get('logo_url'); ?>" alt="<?php echo $params->get('sitedescription'); ?>"></a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
				<?php if ($this->countModules('top-navigation') && $hideByView == false && $hideByEdit == false): ?>
				<jdoc:include type="modules" name="top-navigation" style="none" />
				<?php endif; ?>		
			</div>
		</div>
	</nav>
</header>  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>" role="document">

	<!--   Breadcrumb Moduleposition   -->
	<?php if ($this->countModules('breadcrumb') && $hideByView == false && $hideByEdit == false): ?>
		<div class="container">
			<div class="col s12">
				<jdoc:include type="modules" name="breadcrumb" />
            </div>
		<div>
	<?php endif; ?>

  	<!--   Section-1 Moduleposition   -->
	<?php if ($this->countModules('section1') && $hideByView == false && $hideByEdit == false): ?>
		<div class="section">
			<jdoc:include type="modules" name="section1" />
		</div>
	<?php endif; ?>
	
	<!--   Section-2 Moduleposition   -->
	<?php if ($this->countModules('section2') && $hideByView == false && $hideByEdit == false): ?>
		<div class="section">
			<jdoc:include type="modules" name="section2" />
		</div>
	<?php endif; ?>
	
	<!--   Section-3 Moduleposition   -->
	<?php if ($this->countModules('section3') && $hideByView == false && $hideByEdit == false): ?>
		<div class="section">
			<jdoc:include type="modules" name="section3" />
		</div>
	<?php endif; ?>

	<div class="section">
		<div class="container">
			<jdoc:include type="message" />
		</div>
	</div>

	<!--   Parallax Background Image   -->
	<?php if ($this->countModules('parallax') && $hideByView == false && $hideByEdit == false): ?>
	<div class="parallax-container">
		<jdoc:include type="modules" name="parallax" />
	</div>
	<?php endif; ?>
			
	<!--   Component   -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<jdoc:include type="component" />
				</div>
			</div>
		</div>
	</div>
	
 	<!--   Section-4 Moduleposition   -->
	<?php if ($this->countModules('section4') && $hideByView == false && $hideByEdit == false): ?>
		<div class="section">
			<jdoc:include type="modules" name="section4" />
		</div>
	<?php endif; ?>
	
	<!--   Section-5 Moduleposition   -->
	<?php if ($this->countModules('section5') && $hideByView == false && $hideByEdit == false): ?>
		<div class="section">
			<jdoc:include type="modules" name="section5" />
		</div>
	<?php endif; ?>
	
	<!--   Section-6 Moduleposition   -->
	<?php if ($this->countModules('section6') && $hideByView == false && $hideByEdit == false): ?>
		<div class="section">
			<jdoc:include type="modules" name="section6" />
		</div>
	<?php endif; ?>	
	
	<!-- Footer -->
	<footer class="page-footer <?php echo JURI::base() . $params->get('footer_suffix'); ?>">
		<div class="container">
			<div class="row">
	  
	<!--   Footer Modulepositions   -->
				<div class="col l6 s12">
					<?php if ($this->countModules('footer1') && $hideByView == false && $hideByEdit == false): ?>
						<jdoc:include type="modules" name="footer1" />
					<?php endif; ?>
				</div>
				<div class="col l3 s12">
					<?php if ($this->countModules('footer2') && $hideByView == false && $hideByEdit == false): ?>
						<jdoc:include type="modules" name="footer2" />
					<?php endif; ?>
				</div>
				<div class="col l3 s12">
					<?php if ($this->countModules('footer3') && $hideByView == false && $hideByEdit == false): ?>
						<jdoc:include type="modules" name="footer3" />
					<?php endif; ?>
				</div>

			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				&copy; <?php echo date('Y'); ?> <?php echo JURI::base() . $params->get('sitedescription'); ?>
				Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			</div>
		</div>
	</footer>
	
	<!--   Debug Position   -->	
	<div>
		<jdoc:include type="modules" name="debug" />
	</div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <?php
  JHtml::_('jquery.framework');
  $doc->addScript($tpath.'/js/materialize.min.js');
  $doc->addScript($tpath.'/js/init.js');
  $doc->addScript($tpath.'/js/logic.js'); // <- use for custom script
  ?>

	<jdoc:include type="modules" name="debug" />
</body>

</html>
