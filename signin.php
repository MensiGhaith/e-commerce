<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<style type="text/css">
.sub
{
    border: none;
    width: 190px;
    background: white !important;
    color: #000;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 15px;
    cursor: pointer;
}
.sub:hover
{
    color: #fff;
    background-color: black !important;
}
</style>
</head>

<body>

	<form class="signin" methode="POST" action="php/log.php">
		<h2 style="color:#fff;">Log In</h2>
		<input type="text" name="username" placeholder="Username"/><br /><br />
		<input type="password" name="password" placeholder="Password" /><br /><br />
		<button type="submit" class="sub">sign in</button><br /><br />
		<br /><br /><br /><br /><br />
		Don't have account?<a href="signup.php" style="font-family:'Play', sans-serif;">&nbsp;Sign Up</a>

	</form>
</body>
</html>
