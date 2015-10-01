
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php //require_once("../includes/validation_functions.php"); ?>




<?php
if (isset($_POST['submit'])) {
	
       
    $username = $_POST["username"];
    $email = $_POST["email"];
    $main_text = ($_POST["main_text"]);
    $data = date("Y-m-d H:i:s"); 


	
 $required_fields = array("username", "email", "main_text", "data");

	
	if (!empty($errors)) {
		$_SESSION["errors"] = $errors;
		redirect_to("index.php");
	}
	
	$query  = "INSERT INTO comments_add (";
    $query .= "  username, email, data, main_text";
    $query .= ") VALUES (";
    $query .= "  '{$username}', '{$email}', '{$data}', '{$main_text}'";
    $query .= ")";
	$result = mysqli_query($connection, $query);

}
?>



