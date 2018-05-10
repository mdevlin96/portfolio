<!DOCTYPE html>
<html lang="en">
<head>
    
<title>EduCamps</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
                
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="schedulestyle.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container-fluid">
    <div class="page-header">
            <img src="/images/header.png" class="img-responsive center-block" alt="Header">
    </div>
</div>
    
</head>
    
    
<body>
    
<div class="container-fluid">
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="homeindex.php">Kids Camp</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="homeindex.php">Home</a></li>
        <li><a href="registration.php">Register</a></li>
        <li><a href="catalogindex.php">Catalog</a></li>
        <li><a href="forumindex.php">Forum</a></li>
        <li><a href="momentindex.html">Moments</a></li>
        <li><a href="visualindex.html">Visualization</a></li>
        <li><a href="activityindex.html">Activites</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="shoppingcart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart </a></li>
        
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign Up
        <span class="caret"></span></a>  
             <ul class="dropdown-menu">
                    <div class="form-group">
                        <label><b>Username</b></label>
                          <input type="text" placeholder="Enter Username" name="name" method="post" action="register.php" required>
                          <label><b>Email</b></label>
                          <input type="text" placeholder="Enter Email" name="email" method="post" action="register.php" required />
                          <label><b>Password</b></label>
                          <input type="password" placeholder="Enter Password" name="pwd" method="post" action="register.php" required>
                    </div>
            </ul>
        </li>
            
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" method="post" action="login.php">
                    <input type="text" class="form-control" placeholder="Password" method="post" action="login.php">
                    <input type="radio" name="remember" value="yes" method="post" action="login.php"> Remember me<br>
                </div>
            </ul>
        </li>
        
    
    </ul>
  </div>
</nav> 

    
    
</div>
<script>
  	var record_created = false;
   	var discount_eligible = false;
</script> 
 
<script type="text/javascript">
	function calculate() {
		var list = document.getElementById("          need to add   <<<helen fix this      ");
		var status = list.options[list.selectedIndex].value;
		switch(status) {
			case "one":
				document.getElementById("fee").value = 100; break;
			case "two":
				document.getElementById("fee").value = 150; break;
			case "select":
				document.getElementById("fee").value = 0; break;
			default:
				document.getElementById("fee").value = 0;
		}
	}
</script>
<p>mostly done this page...I have to add a calender to show ...start and end dates ...use google api to help? also
need to fix the function to calculate discount if registered already using javascript<<< HELEN
note we use this page not scheduleindex...and also the php files are in database.php <p>


    <div class="textcontainer">
        <h1>Locations and Times</h1>
        <p>
        Three locations each with two camps of 1 week or two weeks
        </p>
        <table>
		<tr >
		  <th>Location</th>
		  <th>City</th>
		  <th>Camp Address</th>
		  <th>Time's for drop off and Pick up</th>
		</tr>
		<tr>
		  <td>Santa Clara University</td>
		  <td>Santa Clara</td>
		  <td>123 Alameda Dr, Santa Clara<br>CA 95051</td>
		  <td>Mon-Fri: 9 am to 3 pm</td>
		</tr>
		<tr>
		  <td>San Jose State University</td>
		  <td>San Jose</td>
		  <td>4458 N 1st Street, San Jose<br>CA 95069</td>
		  <td>Mon-Fri: 10 am to 4 pm</td>
		</tr>
		<tr>
		  <td>UC Berkeley</td>
		  <td>Berkeley</td>
		  <td>110 Berkeley Ave, Berkeley<br>CA 94720</td>
		  <td>Mon-Fri: 9 am to 4 pm</td>
		</tr>

		</table>
    </div>

			<div id="register" class="animate form">
				<form  action="registration.php" method="post" autocomplete="on"> 
					<h1> Sign up /Register your child today</h1> 
					
						<label for="kidname">Child Name(First Last)</label> <br>
						<input type="text" placeholder="First Last" name="kidname" required="required" />
					<br>
						<label for="dob">Child Date of Birth</label> <br>
						<input type="text" name="dob"  placeholder="mmddyyyy" required="required" />
					<br>
						<label for="parentname">Parent's Name (First Last)</label> <br>
						<input type="text" name="parentname" placeholder="First Last" required="required" />
					<br>
						<label for="parentemail">Parent's Email</label> <br>
						<input type="text" name="parentemail" placeholder="name@yahoo.com" required="required" />
					<br>
						<label for="parentphone" >Parent's Phone Number</label> <br>
						<input type="text" name="parentphone" placeholder="333-333-4444" required="required"/>
					<br>
						<label for="grade">Grade</label> <br>
						<input type="text" name="grade" required="required"/>
					<br>
						<label for="school">School</label> <br>
						<input type="text" name="school" required="required"/>
					<br>
						<label for="allergies">Allergies and special needs</label> <br>
						<input type="text" name="allergies" required="required"/>
					<br>
						<label for="camplocation">Camp Location </label> <br>
						<input type="text" name="camplocation" placeholder="SCU or UCBerkeley or SJSC" required="required"/>
					<br>
						<label for="startdate">startdate</label> <br>
						<input type="text" name="startdate" placeholder="mm/dd/yyyy" required="required"/>
					<br>	
						<label for="enddate">enddate</label> <br>
						<input type="text" name="enddate" placeholder="mm/dd/yyyy" required="required"/>
					<br>
							<!--to calculate discount with extra child later if time-->
							<!--<label for="fee" class="uname" >Fee (10% discount if a student is already registered, calculated after registration)</label>-->
							<!--<input id="fee" name="fee" required="required" type="text" value = "0" readonly;>
							this was the code i wrote but it wasn't working (i was trying to add the discount)-->
							<input name = "submit" type="submit" value="submit"/> 
						
					
					</form>
				</div>  <!--end register-->
				
    </div>
       
</section>
<br><br>

<?php
if (isset($_POST['submit'])) {
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";

	$kidname=$_POST["kidname"];
    $dob=$_POST["dob"];
    $parentname=$_POST["parentname"];
    $parentemail=$_POST["parentemail"];
    $parentphone=$_POST["parentphone"];
    $grade=$_POST["grade"];
    $school=$_POST["school"];
    $allergies=$_POST["allergies"];
    $camplocation=$_POST["camplocation"];
    $startdate=$_POST["startdate"];
    $enddate=$_POST["enddate"];

   
    echo($kidname);
    echo($dob);
    echo($parentname);
    echo($parentemail);
    echo($parentphone);
    echo($grade);
    echo($school);
    echo($allergies);
    echo($camplocation);
    echo($startdate);
    echo($enddate);
 
    
    $sql ="INSERT INTO shoppingcart (kidname, dob, parentname, parentemail, parentphone, grade, school, allergies, camplocation, startdate, enddate, userId) 
    VALUES('".$kidname."', '".$dob."',   
    '".$parentname."', '".$parentemail."', '".$parentphone."', 
    '".$grade."', '".$school."', '".$allergies."', 
    '".$camplocation."','".$startdate."', 
    '".$enddate."','".$_COOKIE["id"]."')";
    
	echo($sql);

	if ($db->query($sql)==TRUE){
       	echo "record created";
	    } else {
		   //     echo"ERRROR:" .$sql . "<br>" . $db->error;
	    $db->close();
	} 
}
?>
<footer class="container-fluid text-center">
  <p>Copyright 2017 EduCamps_DreamTeam</p>  
</footer>

    
    
<!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</div>
</body>
</html>