<?php

	function redirect_to($new_location) {
	  header("Location: " . $new_location);
	  exit;
	}

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function form_errors($errors=array()) {
		$output = "";
		if (!empty($errors)) {
		  $output .= "<div class=\"error\">";
		  $output .= "Please fix the following errors:";
		  $output .= "<ul>";
		  foreach ($errors as $key => $error) {
		    $output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
		  }
		  $output .= "</ul>";
		  $output .= "</div>";
		}
		return $output;
	}
	
	function find_all_subjects($public=true) {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM comments_add ";
		if ($public) {
			$query .= "WHERE admin_order = 0 ";
		}
		$query .= "ORDER BY comments_id ASC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}
	

	
	function find_all_admins() {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM admins ";
		$query .= "ORDER BY username ASC";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		return $admin_set;
	}




	

	
	
function find_admin_by_username($username) {
		global $connection;
		$query  = "SELECT * ";
		$query .= "FROM admins ";
		$query .= "WHERE username={$username} ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($connection, $query);
		
	}
    function password_check($hashed_password, $existing_hash) {
		// existing hash contains format and salt at start
	 
	  if ($hashed_password == $existing_hash) {
	    return true;
	  } else {
	    return false;
	  }
	}
	function attempt_login($username, $hashed_password) {
		$admin = find_admin_by_username($username);
		if ($admin_set) {
			// found admin, now check password
			if (password_check($hashed_password,$admin_set["hashed_password"])) {
				// password matches
				return $admin_set;
			} else {
				// password does not match
				return false;
			}
		} else {
			// admin not found
			return false;
		}
	}

	function logged_in() {
		return isset($_SESSION['admin_id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("login.php");
		}
	}

?>

