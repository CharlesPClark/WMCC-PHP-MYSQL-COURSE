<html>
	<head>
<meta charset="utf-8">
<title>Inventio Online</title>
<link type="text/css" href="http://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<style>
body {
	font-family: 'Audiowide', Narkisim, sans-serif;
    font-size: 20px;
	text-shadow: 2px 2px 2px #000;
	text-align: center;
	color: #FFFFFF;
	background-image: url("background.png")
      }
footer {
	font-family: 'Audiowide', Narkisim, sans-serif;
    font-size: 12px;
	text-shadow: 2px 2px 2px #000;
	text-align: center;
	}
.table {border: 2px solid white;
	text-align: center;
	font-size: 18px;
	margin-left: auto;
	margin-right: auto;
	}
a:link { color: white;}
a:visited { color: gray}
a:focus { color: #1d8ba3; background-color: #e6eeff;}
a:hover { color: #1d8ba3; background-color: #e6eeff;}
a:active { color: #005ce6;}

a:hover .zone1, a:focus .zone1 {transform: scale(1.5);}

.Mart {margin-left: auto; margin-right: auto;}

/* styles for navigation */
#nav {
   background-color: #000033;
   overflow: hidden;
   width: 100%;
}
#nav ul {
   list-style:none;
   padding: 0;
   margin: 0 auto; 	
   width: 25em; 
} 
#nav ul li {
   font-weight: normal;
   text-transform: uppercase;
   float: left;
}
#nav ul li a { 	
  display: block; 	
  padding: .5em; 	
  border: 1px solid #e6eeff; 
  border-radius: .5em;	
  margin: .25em; 
}  

#nav ul a:link {
    color: white;
  }
#nav ul a:visited {
    color: gray;
  }
#nav ul a:focus {
	color: #1d8ba3;
	border-color: #e6eeff; 
}
#nav ul a:hover {
    color: #1d8ba3;
	border-color: #e6eeff; 
  }
#nav ul a:active {
	color: #005ce6;
}
</style>

</head>
	
	<body>
	<audio autoplay loop>
<source src="newage.wav">
Your Browser cannot load the Main Menu Theme
</audio>
<div>
<img src="images/logo.png" alt="Inventio: The Equipment You Need for the Future You Desire" class="Mart">
</div>

		<?php

			$Option = $_POST["Option"];
			if ($Option == 1) {

			}
			else if ($Option == 2) {

			}
			else if ($Option == 3) {

			}
			else if ($Option == 4) {

			}
			else if ($Option == 5) {

			}
			else {
			echo
			   '<h1>Category Selection</h1>
			    <h2>Please Select a Category</h2>
				<form action="Category.php" method="post">
				<input type="radio" name="Category" value="1">Memory
				<input type="radio" name="Category" value="2">Storage
				<input type="radio" name="Category" value="3">CPU
				<input type="radio" name="Category" value="4">GPU
				<input type="radio" name="Category" value="5">Motherboard
				<input type="radio" name="Category" value="6">Optical Drives
				<br>
				<input type="submit" name="Submit">
				</form>'
			}
		?>

	</body>

</html>