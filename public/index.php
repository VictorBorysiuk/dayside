<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>

        <div id="log-in">
           <a href="admin_log.php"><button>log-in</button></a>
        </div>
<div id="main">
  
    <div id="page">
            
  <?php require_once("../public/comments_controller.php"); ?>   


 
	
        <h2>Add comment</h2>
        <form action="index.php" method="post">
          <p>Name
            <input type="text" name="username" value="<?php echo $username;?>" />
          </p>
          <p>E-mail
            <input type="text" name="email" value="<?php echo $email;?>" />
          </p>
          <p>Comment:<br />
            <textarea name="main_text" rows="20" cols="80"><?php echo $main_text;?></textarea>
          </p>
          <input type="submit" name="submit" value="Отправить" />
          <input type="submit" name="preview" value="Предварительный просмотр" />
        </form>
        <br />
        <a href="index.php">Cancel</a>
      </div>
      
</div>


 
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>

