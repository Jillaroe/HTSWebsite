<?php
session_start();
if(!isset($_SESSION['session_user'])){
	header('Location: login.php');
}
?>
<?php
include 'connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=latin-1" />
        <link rel="stylesheet" title="magnum" type="text/css" href="../CSS/Maja.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>Work In Progress</title>	
    </head>
    <body>
	<img src="">
        <div id="content">
            <div id="top">
               <div id="banner" >
			   <div align="center"><img src="banner1.png" height="100" width="400"> 
			   <a href="ovningar.php"><img src="knapp1.png"/></a>
						<a href="kost.php"><img src="knapp2.png"/><a/>
						<a href="kondition.php"><img src="knapp3.png"/></a>
						<img src="knapp4.png"/></a> </div>
            </div>
            <div id="left">
					<div class="dokument-item">
						<div class="meny">
						<div style = "text-align:center;"/>	
						</div>
						
						<p id = "infoSok">S�k p� anv�ndarnamn! <br />

<form action="sok.php" method="POST">
						<input name="soktAnv" id="soktAnv" type="text" value="" /> 
						<input id="btnSok" type="submit" value="S&ouml;k" /> 

</form>
</p>
<br /><br />
<?php
if (isset($_POST['soktAnv'])) {
$soktVar = $_POST['soktAnv'];


// mysql injections???????
$soktVar = stripslashes($soktVar);
$soktVar = mysql_real_escape_string($soktVar);


$query = "SELECT name FROM informatiom WHERE name = '$soktVar' OR name LIKE '%$soktVar%'";
$result = mysql_query($query);

if ($result === false) {
echo "<strong> Error when you asked a question to your databas. " . mysql_errno . " : <br />" . mysql_error . "</strong>";
}
$num=mysql_numrows($result);
if($num==0) {
echo '<p id="txtSok">Finns ingen s�n anv�ndare <br /> S&ouml;k p&aring; en annan anv&auml;ndare.</p>';
}
else {

for ($i=0;$i<$num;$i++) {
$temp = mysql_fetch_array($result);

echo $temp['name'] . " finns!". "<br />";
}

}
}
?>
						
						
<ul>
<div>
</ul>
</div>
					</div>
            </div>
            <div id="center-right">
				Mitten och h�ger kolumnen!!
                <div id="info">
				<h1 class="dokument-item-header"> Webbsidans rubrik</h1>
				<p class="info">Inledning p� webbsidan.</p>
</div>
</div>


			<div id="footer">
				<p> &copy; 2013 Ditt namn h�r. Detta �r en fotnot# 
				</p>
			</div>
        </div>
    </body>
</html>