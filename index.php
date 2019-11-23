<?php
include("inc/modals.php");
include("inc/database.php");
?>
<!DOCTYPE html>
    <html>
        <head>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
            <link type="text/css" rel="stylesheet" href="css/sweetalert2.min.css"  media="screen,projection"/>
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>
    <body>
   
    <nav class="indigo darken-4">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="sass.html">Parcial WEB</a></li>
        </ul>
        </div>
    </nav>
    <br>
    <div class="container">
		<form method='post'>
			<div class='row'>
				<div class="col s6 m6 l4">
					<a href="#modaladd" class="tooltipped btn-large waves-effect waves-light red darken-4" data-position="right" data-tooltip="Nueva alianza"><i class="material-icons left">add</i>AGREGAR</a>
				</div>
			</div>
	   </form>
	</div>
    <div class="container">
        <div class="contenido"></div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/modal.js"></script>
        <script type="text/javascript" src="js/add.js"></script>
        <script type="text/javascript" src="js/sweetalert2.min.js"></script>
    </body>
</html>
