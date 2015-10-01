   <?php include("../includes/layouts/header.php"); ?>
   <?php
   if($_SESSION['admin']){
header("Location: admin.php");
exit;
}

session_start();
$admin = 'admin';
$pass = '202cb962ac59075b964b07152d234b70';
?>
  
   <form method="post">
Username: <input type="text" name="user" /><br />
Password: <input type="password" name="pass" /><br />
<input type="submit" name="submit" value="log-in" />
</form>
<a href="index.php">back</a>
 <?php
 if($_POST['submit']){
if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
$_SESSION['admin'] = $admin;
header("Location: admin.php");
exit;
}else echo '<p>Username or  Password False!</p>';
}
?>