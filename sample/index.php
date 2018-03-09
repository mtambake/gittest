<?php
Session_start;
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
<form action="login.php" method="POST">
<input type="text" name="user_email" placeholder="E-mail"><br>
<input type="password" name="user_pwd" placeholder="password"><br>
<button type="submit" name="submit">Login</button>
<br>
<br>
<br>
</form>
<form action="signup.php" method="POST">
<input type="number" name="user_id" placeholder="user_id"><br>
<input type="text" name="user_first" placeholder="Firstname"><br>
<input type="text" name="user_last" placeholder="lastname"><br>
<input type="text" name="user_email" placeholder="E-mail"><br>
<input type="password" name="user_pwd" placeholder="password"><br>
<button type="submit" name="submit">signup</button>
</form>
<br>
<br>
<form action ="logout.php">
<button>Log out</button>
</form>
</header>
</body>
</html>
