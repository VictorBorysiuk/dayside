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
      <p>data: {$row['data']}</div>" );
       } 
      while($row = mysqli_fetch_array($result)); 
        ?>