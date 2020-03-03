<?php
    //connect to database
    $conn= mysqli_connect('localhost', 'root','','classpro');
    echo 'hey this php is working it just hates you';
    //check connection
    if ($conn){
        echo 'connection worked';
//         echo 'Connection Error:' . mysqli_connect_error();
    }



?>

<!DOCTYPE html>
<html> 
	<title> Data From Database</title>
	<link href="style.css" rel="stylesheet" type="text/css" media= "screen"/>
<body>
    <table class= dataTable>
    	<tr>
    		<th>id</th>
    		<th>classid</th>
    		<th>classname</th>
    		<th>competency</th>
    		<th>basicreq</th>
    		<th>credit</th>
    		<th>status</th>
    	</tr>

    </table>
</body>
</html>