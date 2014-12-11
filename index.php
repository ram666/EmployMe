<?php
session_start()
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Alex Wu , Ethan Chen">
		<meta name="description" content="Template.">
		<title><?php 
		if($tuple['title']!=NULL){
			echo $tuple['title'];
		}
		else{
			echo $tuple['content'];
		}
		?></title>

        <link rel="stylesheet" href="../css/normalize.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>

    </head>
	<body>
	    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<?php
			if(isset($_SESSION["user"])){
				//echo "Welcome " . $_COOKIE["user"] . "!\n";

				echo "Welcome ".$_SESSION["user"]."!\n";
				echo "\n";
				echo '<form action="users/log_out.php"><input type="submit" value="Log Out"></form>';
				echo '<form action="users/edit_user.php"><input type="submit" value="Edit Account"></form>';

			}
			else{
				echo '
		<form action="users/sign_in.php"><input type="submit" value="Sign In"></form>
		<form action="users/sign_up.php"><input type="submit" value="Sign Up"></form>';
			}
?>
		<!-- banner for the site-->
		<div class="section" id="banner">
			<form action="questions/post_question.php"><input type="submit" value="Post Question"></form>
			<form action="companies/add_company.php"><input type="submit" value="Add Company"></form>
			<form action="questions/show_questions.php"><input type="submit" value="All Questions"></form>
			<form action="questions/questions.php"><input type="submit" value="Catalog"></form>
			<form action="questions/search.php" method="post"><input type="textbox" name="content" placeholder="Search"><input type="submit" value="Search"></form>
		</div>
		
		<!-- some of the best example questions-->
		<div class="section" id="featured">


		</div>
	
		<!--a blurb on EmployMe-->	
		<div class="section" id="about">

	
		</div>

		<!--foother here-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="../js/main.js"></script>
	</body>
</html>
