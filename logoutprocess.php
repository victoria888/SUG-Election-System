<?php
include("includes/header.php");
session_start();
// The session_unset() function unregisters a session variable.
session_unset();
session_destroy();

echo '<h4>YOU ARE SUCCESSFULLY LOGGED OUT</h4>';

?>

<HTML>
<HEAD> <TITLE> LOG OUT </TITLE></HEAD>
<BODY>
<div class="container">
<br>
<A HREF = "index.php" class="btn btn-success">Back To Home</A>
</div>
</BODY>
</HTML>