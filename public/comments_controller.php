<?php 
 
 
 //якщо  натиснута кнопка відправити   
if (isset($_POST['submit'])) 
    {
        require_once("../public/new_comments.php"); 
        $_SESSION["message"] = " You comment will be add";
          
           
          $_POST['submit']=null;
    }
    else
     //якщо не натиснута кнопка відправити 
    {
      
       
    
          
        
         $_SESSION["message"] = " hiar you can add you comments";
        //" Здесь вы можете оставить свой комментарый";
        if (isset($_POST['preview']))
        {
            
            $username = $_POST["username"];
            $email = $_POST["email"];
            $main_text = $_POST["main_text"];
            $data = date("Y-m-d H:i:s"); 
            $_SESSION["message"] = " You  puch button submit preveiw";  
            
           print("<script> alert='(<p>Попередній перегляд</p><p>Пользователь: '.$username.'<br/>  Комментарий :' .$main_text .'</p> 
      <p><i>Контактные данные</i></p><p>E-mail: ' .$email .'</p><p>data: '.$data. '</p>---------<br/>)'</script>");
      
       
        if (isset($_POST['submit']))
            {
                require_once("../public/new_comments.php"); 
                $_SESSION["message"] = " You comment will be add";
                
            }
            else
            {
                $_SESSION["message"] = " your comment didn't be add";
                            
            }
         } else{
            
         }
        
         
       
    }
    echo message(); 
require_once("../public/show_comments.php");
  
?>