<?php include("../includes/layouts/admin_header.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/session.php"); ?>
<?php
require "auth.php";
?>
    <a href="admin.php?do=logout">Exit</a>
     <?php require_once("../public/admin_controller.php"); ?>   