﻿<?php
include '../minhemsida/connect.php';
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
			            <a href="index3.php"><img src="knapp1.png"/></a>
						<a href="index3.php"><img src="knapp2.png"/><a/>
						<a href="index3.php"><img src="knapp3.png"/></a>
						<a href="index3.php"><img src="knapp4.png"/></a> </div>
						<hr size="2" width="100%" align="right"> 
            </div>
            <div id="left">
					<div class="dokument-item">
						
						<div class="meny">
						<div style = "text-align:center;"/>	
						</div>


			</div>
            </div>
            <div id="center-right">
				
                <div id="info">
				<form action="login.php" method="post"><br>
				<!-- Ett inloggnings formulär -->
Användarnamn<br>
<input type="text" name="myUser"><br>		
Lösenord<br>
<input type="password" name="myPassword"><br>
<input type="submit" value="Logga in"><br>
</form>

Om du inte redan har ett konto, registrera dig!
<Registrera knappen>

<form action="registrera.php" method="post"><br>
<input type="submit" value="Registrera"><br>
</form>

Sök på tillgängliga användarnamn:
<form action="sok.php" action="sok">
<input type="submit" value="Sök">
</form>
<ul>
<div>
</ul>
</div>
<div>
<!-- Ett inloggnings formulär -->
				<img src="Sidobanner.png" width = "200" height="550" align="left"/><a/>
				
				<h1 class="dokument-item-header"> Webbsidans rubrik</h1>
				<p class="info">Inledning på webbsidan.</p>
</div>
</div>


			<div id="footer">
				<p> &copy; 2013 Ditt namn här. Detta är en fotnot# 
				</p>
			</div>
        </div>
    </body>
</html>