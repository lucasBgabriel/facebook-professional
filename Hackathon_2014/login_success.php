 
<?php
session_start();
if(!$_SESSION['myusername']){
header("location:personalinformationview.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>	