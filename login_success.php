 
<?php
session_start();
if(!$_SESSION['myusername']){
header("location:logado.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>	