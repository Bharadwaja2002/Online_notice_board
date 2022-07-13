<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:yellow">
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Online Notice Board</strong></a></li>


	  <li><a href="index.php?option=about"></span> About</a></li>



	<li><a href="index.php?option=contact"></span>Contact</a></li>

	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php
		@$opt=$_GET['option'];

		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}

			else if($opt=="New_user")
			{
			include('registration.php');
			}


			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h1><b>'WELCOME TO OUR  NOTICE BOARD'</b></h1>
		<i> <b> Join us today and get connected. Register now to get each and every updates! </b></i>";
		}
		?>
        
		</div>
	<!-- container -->
 

		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading"><b>LATEST NOTICE</b></div>
  <div class="panel-body">HI FROM ADMIN</div>
    
  </div>
</div>

		</div>
	</div>

</div>

<br>

 

<br/>
<br/>
<br/>
<br/>



	</body>
</html>
