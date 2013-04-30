<?php
	Include '../minhemsida/connect.php';
             $query = "INSERT INTO informatiom (name, password) VALUES ('$_POST[myUser]', '$_POST[myPassword]')";
             $result = mysql_query($query);
             if ($result === false) {
	             echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		header('location:index3.php')

?>
