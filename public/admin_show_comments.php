<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
 <?php 
header("Content-Type: text/html; charset=utf-8");
 print("<form>
 <form action='index.php' method='get'>
 <p>Sort:</p>
    <input type='radio' name='sort' value='username' >Name<br />
    <input type='radio' name='sort' value='email'>E-mail<br />
    <input type='radio' name='sort' value='data'>data<br />
    <input type='submit' name='submit' value='Submit'><br>
</form>");


  		$query  = "SELECT * ";
		$query .= "FROM comments_add ";
        if(isset($_GET['sort']) && !empty($_GET['sort']))
{
        if ($_GET['sort']=='username') $query .= "ORDER BY username DESC";
       if ($_GET['sort']=='email') $query .= "ORDER BY email DESC";
       if ($_GET['sort']=='data')  $query .= "ORDER BY comments_id ASC";
     }   
		$sql_select=$query;
        $result = mysqli_query($connection,$sql_select);
         $row = mysqli_fetch_array($result); 
         
      do { printf("<div class='comment'>
       <p>User: {$row['username']}<br/>  Comment :{$row['main_text']}</p> 
      <p><i>Contact date</i></p><p>E-mail: {$row['email']}</p>
      <p>data: {$row['data']}
      <form action='index.php' method='get'>    
      <input type='submit' name='submit' value='edit'>
      </form><br></div>" 
      );
      if (isset($_GET['submit']))
      {
        printf("<h2>Сделать комментарий</h2>
        <form action='admin.php' method='post'>
          <p>Имя
            <input type='text' name='username' value='<?php echo {$row['username']};?>' />
          </p>
          <p>E-mail
            <input type='text' name='email' value='<?php echo {$row['email']};?>' />
          </p>
          <p>Комментарий:<br />
            <textarea name='main_text' rows='20' cols='80'><?php echo {$row[main_text]};?></textarea>
          </p>
          <input type='submit' name='submit' value='Отправить' />
          
        </form>");
         if (isset($_GET['submit']))
         {
        $query = "UPDATE comments_add SET username=$username, main_text=$main_text, email=$email, admin_rewright='1' WHERE comments_id={$row[comments_id]}";
        $sql_select=$query;
        $result = mysqli_query($connection,$sql_select);
      }
      }
      
       } 
      while($row = mysqli_fetch_array($result)); 
        ?>