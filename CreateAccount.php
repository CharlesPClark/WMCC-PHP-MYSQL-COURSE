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
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$address = $_POST['Address'];
			$City = $_POST['City'];
			$State = $_POST['State'];
			$Zip = $_POST['Zip'];
			$Username = $_POST['Username'];
			$Password = $_POST['Password'];
			$dbname = "charlesstore";
			if (!empty($fname) && !empty($lname) && !empty($address) && !empty($City) && !empty($State) && !empty($Zip) && !empty($Username) && !empty($Password)) {
				$serverusername = "root";
				$servername = "localhost";
				$password = "password";
				$database = "CharlesStore";
				$link = new mysqli($servername,$serverusername,$password,$dbname);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
					
					$sql = 'INSERT INTO customers'.
						'(Username,Password,firstname,lastname,address,city,state,zip) '.
						"VALUES ('$Username,$Password,$fname','$lname','$address','$City','$State','$Zip')";
						
					mysql_query($sql, $link);
			}
			else {
				
				echo '<h1>Account Creation</h1>
					 <p>Please Fill Out The Whole Form</p>
					 <form action="CreateAccount.php" method="post">
					 Username: <input type ="text" name="Username"><br>
					 Password: <input type ="text" name="Password"><br>
					 First Name: <input type="text" name="fname"><br>
					 Last Name: <input type ="text" name="lname"><br>
					 Address: <input type="text" name="Address"><br>
					 City: <input type="text" name="City"><br>
					 State: <input type="text" name="State"><br>
					 Zip: <input type="text" name="Zip"><br>
					 <input type="submit" name="Sign up"><br>
					 </form>';
		
			}
		?>

	</body>

</html>