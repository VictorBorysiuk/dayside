 
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
   <div id="footer">Copyright <?php echo date("Y"); ?>, Viktor Borysiuk</div>

	</body>
</html>