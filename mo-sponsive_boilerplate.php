<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" lang="en-US">
<![endif]-->
<!--[if IE 10]>
<html id="ie10" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) | !(IE 9) | !(IE 10)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Mo-Sponsive Boilerplate</title>
		
		<!-- 
			Mo-Sponsive Boilerplate v0.1 alpha
			Created by: @davidkryzanak
		-->
		
		<?php
			/* Mobile_detect was created by: https://github.com/serbanghita/Mobile-Detect */
			require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'Mobile-Detect'.DIRECTORY_SEPARATOR.'Mobile_Detect.php');
			$detect = new Mobile_Detect;
			//Set the device type
			$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
		?> 
			
		<!-- Styles for all layouts -->
		<style>
			h1{text-align:center;}
		</style>
		
		<?php if($deviceType == 'computer'): ?>
			<!-- Desktop code here -->
			<link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>
			<style>
				html{font-family: 'Quattrocento', serif;color:#FFF;background: url(http://farm9.staticflickr.com/8428/7530054972_576f6e2b22_b.jpg) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}
			</style>
			
		<?php elseif($deviceType == 'tablet'): ?>
			<!-- Tablet code here -->
			<link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>
			<style>html{font-family:'Quattrocento',serif;color:#FFF;background:#333;}</style>
			
		<?php else: ?>
			<!-- Phone code here --> 
			<style>html{font-family:serif;color:#FFF;background:#000;}</style>
			
		<?php endif; ?>
	</head>
	
	<body>
	
	
		<?php if($deviceType == 'computer'): ?>
			<!-- Desktop code here -->
			<h1>Looks like you're on a desktop. Let's burn some bandwidth... Massive background image and a custom font.</h1>
			
		<?php elseif($deviceType == 'tablet'): ?>
			<!-- Tablet code here -->
			<h1>Looks like you're on a Tablet. We need to be more conservative here. Ditch the background image</h1>
			
		<?php else: /*phone*/ ?>
			<!-- Phone code here -->
			<h1>Looks like you're on a mobile device. Crank that optimization to 11!</h1>
			
		<?php endif; ?>
	
		
	</body>
</html>