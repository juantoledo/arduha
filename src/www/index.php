<?php
include_once("release.php");
?><!DOCTYPE html> 
<html> 
	<head> 
	<title>Arduha</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery/jquery.mobile-1.0.css" />
	<script type="text/javascript" src="js/jquery/jquery-1.7.1.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.mobile-1.0.js"></script>
</head> 
<body> 

<div data-role="page" data-fullscreen="true">

	<div data-role="header">
		Arduha Control Panel v<?php echo VERSION; ?>
	</div><!-- /header -->

	<div data-role="content" data-theme="b" data-content-theme="b" >	
		<div data-role="collapsible"  data-theme="b" data-collapsed="false" data-content-theme="c">
			<h3>Sensors <img style="padding-left:10px; padding-bottom:10px;vertical-align:middle;" src="images/sen.png"/></h3>
			<p>
				<div class="ui-grid-b">
					<div class="ui-block-a">Arduino Thermometer</div>
					<div class="ui-block-b">Main Door Magneto</div>
					<div class="ui-block-c">Kitchen Magneto</div>
				</div>
				<p></p>
				<div class="ui-grid-b">
					<div class="ui-block-a">Living Room PIR</div>
					<div class="ui-block-b"></div>
					<div class="ui-block-c"></div>
				</div>
			</p>
		</div>
		<div data-role="collapsible" data-theme="b" data-collapsed="false" data-content-theme="c">
			<h3>Alarms / Actuators <img style="padding-left:10px; padding-bottom:10px;vertical-align:middle;" src="images/alarm.png"/> <img style="padding-left:10px; padding-bottom:10px;vertical-align:middle;" src="images/act.png"/></h3>
			<p>				
			<div class="ui-grid-b">
					<div class="ui-block-a">Backyard Main Light</div>
					<div class="ui-block-b">Bedroom Light</div>
					<div class="ui-block-c">Embedded Light</div>
			</div>
			</p>
		</div>
				<div data-role="collapsible" data-theme="b" data-collapsed="false" data-content-theme="c">
			<h3>General Status <img style="padding-left:10px; padding-bottom:10px;vertical-align:middle;" src="images/general.png"/></h3>
			<p>		
				<div class="ui-grid-b">
					<div class="ui-block-a">House Status ARMED</div>
					<div class="ui-block-b"></div>
					<div class="ui-block-c"></div>
				</div>
			</p>
		</div>
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>



