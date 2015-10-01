<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "comments");
	define("DB_PASS", "1q2w3e");
	define("DB_NAME", "mydomainforsite_adr_com_ua");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
