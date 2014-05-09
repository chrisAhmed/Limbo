<! DOCTYPE html>
<! -- by Jackie Trivino and Chris Ahmed -->

<html>

	<head>
		<title> Limbo </title>
		<link href="css/css.css" rel="stylesheet" type="text/css">
	</head>

	<div id="title" align=center>
			<img id="img" src="images/limbo_logo.jpg">
			<br>
			<h1> Welcome to <i>Administration Login</i></h1>
			<br>
		</div>
		<br>
		<div id="menu" align=center>
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="lost.html">Lost Something</a></li>
			<li><a href="found.html">Found Something</a></li>
			<li><a href="main_login.php">Admin</a></li>
			</ul>
	</div>
	<br>
	<br>
	
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
			<form name="form1" method="post" action="checklogin.php">
			<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
				<tr>
					<td colspan="3"><strong>Member Login </strong></td>
				</tr>
				<tr>
					<td width="78">Username</td>
					<td width="6">:</td>
					<td width="294"><input name="myusername" type="text" id="myusername"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="mypassword" type="password" id="mypassword"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="Submit" value="Login"></td>
				</tr>
			</table>
			</td>
			</form>
		</tr>
	</table>

</html>