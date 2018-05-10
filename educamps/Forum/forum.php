<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.
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
    
    
    
    
    //forum three entries ...need to style soon.....this just for database
    
    
    $username=$_POST["username"];
    $email=$_POST["email"];
    $comment=$_POST["comment"];

    
    echo($username);
    echo($email);
    echo($comment);
  
    
    $sql ="INSERT INTO forum (username, email, comment) 
    VALUES("."'".$username."','".$email."', '".$comment."'".")";
    
    echo($sql);
    if ($db->query($sql)==TRUE){
        echo "record created";
    }else{
        echo"ERRROR:" .$sql . "<br>" . $db->error;
    }
    $db->close();
    
    ?>
    