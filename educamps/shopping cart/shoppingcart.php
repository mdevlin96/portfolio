<?php
if (isset($_POST['delete'])) {

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

	$id=$_POST["id"];
    $type=$_POST["type"];
    
    if($type == 'delete') {
        $sql ="UPDATE shoppingcart SET status='0' WHERE id = '".$id."'";
    }
    
	$db->query($sql);
}
?>

<html>
    <div>Shopping Cart</div>
    <table border='1'>
        <tr>
            <th>kidname</th><th>dob</th><th>parentname</th><th>parentemail</th><th>parentphone</th><th>camplocation</th><th>Price</th><th>Delete</th>
        </tr>
    <?php
    
          //JUST COPY AND PASTE FROM HERE 
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
            exit;
        } 
        
        $parentNameList = array();
    	$sql = "SELECT parentname FROM shoppingcart where userId='".$_COOKIE["id"]."' and status = '1'";
		$result = mysqli_query($db, $sql);
		while($row = mysqli_fetch_assoc($result)) { 
		    array_push($parentNameList, $row['parentname']);
		}
		
    	$sql = "SELECT id, kidname, dob, parentname, parentemail, parentphone, grade, school, allergies, camplocation, startdate, enddate FROM shoppingcart where userId='".$_COOKIE["id"]."' and status = '1'";
		$result = mysqli_query($db, $sql);
		while($row = mysqli_fetch_assoc($result)) { 
		    ?>
		    <tr>
		        <td><?php echo $row["kidname"] ?></td>
		        <td><?php echo $row["dob"] ?></td>
		        <td><?php echo $row["parentname"] ?></td>
		        <td><?php echo $row["parentemail"] ?></td>
		        <td><?php echo $row["parentphone"] ?></td>
		        <td><?php echo $row["camplocation"] ?></td>
		        <td>
		            <?php
		                if(count(array_keys($parentNameList, $row["parentname"])) > 1) {
		                    echo "10% discount!!";
		                }
		            ?>
		        </td>
		        <td>
		            <form action="shoppingcart.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $row["id"] ?>" />
                      <input type="hidden" name="type" value="delete" />
                      <input type="submit" name="delete" value="Delete">
            	    </form>
		        </td>
		    </tr>
		    <?php
    //     	if ($row["parentname"] == $parentname) {
    //     		echo "<br>"."HEREEEEE".$row["parentname"].$parentname."<br>";
				// break;
    //     	}
        }
    ?>
    </table>
</html>