<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">

	<title>Admin<?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
    <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/add_log.js" type="text/javascript"></script>
   </head> 
	<body>
    <div id="header">
      <h1>Admin<?php if ($layout_context == "admin") { echo "Admin"; } ?></h1>
    </div>
