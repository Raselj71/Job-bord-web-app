<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      <?php 
    session_start();
    include("navbar.php");
	include("db.php");
	include("function.php");

	 $admin_data = check_admin_login($con);

?>
    post your Job
</body>
</html>