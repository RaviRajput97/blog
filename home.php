<?php 
session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title></title>
 </head>
 <body>
 	<h1 style="text-align: center;">Upload a Post</h1>
 	<div class="center">
 	<h2 >Welcome <?php echo $_SESSION["user"]; ?></h2>
 	<a href="logout.php" style="float:right" >Logout</a>
 	<br>
 	</div>

 	<div class="center">
 	<table>
 		<tr>
 			<td>Title</td>
 			<td><input type="text" name="title"></td>
 		</tr>
 		<tr>
 			<td>Blog</td>
 			<td><textarea rows="10" cols="40"></textarea></td>
 		</tr>
 		<tr>
 			<td>Image</td>
 			<td><input type="file" name="image"></td>
 		</tr>
 		<tr>
 		<td><input type="submit" name="submit" value="Upload Post"></td>
 		</tr>
 	</table>

 	</div>
 </body>
 </html>