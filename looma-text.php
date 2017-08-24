<!doctype html>
<!--
LOOMA php code file
Filename: xxx.php
Description:

Programmer name:
Email:
Owner: VillageTech Solutions (villagetechsolutions.org)
Date:
Revision: Looma 2.0.x

Comments:
-->

<?php $page_title = 'Looma - Text File';
	  include ('includes/header.php');
	  include ('includes/mongo-connect.php');
?>
    <link rel="stylesheet" href="css/looma-text.css">
</head>

<body>
	<div id="main-container-horizontal">
	    <div id="fullscreen">
          <?php
                $id = $_REQUEST['id'];

                echo "<div id='the_id' data-id=" . $id . " hidden></div>"

           ?>
         <div id="display"></div>
         <button class = "lookup"></button>
         <button class="speak"></button>
         <button id="fullscreen-control"></button>

	    </div>
	</div>

<?php
   		/*include either, but not both, of toolbar.php or toolbar-vertical.php*/
	      include ('includes/toolbar.php');
   		/*include ('includes/toolbar-vertical.php'); */
   		  include ('includes/js-includes.php');
    ?>
     <script src="js/looma-screenfull.js"></script>
     <script src="js/looma-text.js"></script>
</body>
