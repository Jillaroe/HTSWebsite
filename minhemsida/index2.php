<?php
session_start();
if(!isset($_SESSION['session_user'])){
	header('Location: login.php');
}
?>
<?php
include '../minhemsida/connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
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
						Du är inloggad <p>
						<div class="meny">
						<div style = "text-align:center;"/>	
						</div>
						
<ul>
<div>
</ul>
</div>
					</div>
            </div>
            <div id="center-right">
				Mitten och höger kolumnen!!
                <div id="info">
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