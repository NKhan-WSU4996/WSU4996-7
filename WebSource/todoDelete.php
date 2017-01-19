<html>
	<head>
		<title>Delete Task</title>
	</head>
	<body>
		<?php
			//Connect to database and create a drop list from the tasks
			require_once('../mysql_connect.php');
			
			$query = "SELECT Task FROM tasks";
			$response = @mysqli_query($databaseConnect, $query);
			
			//Echo prints HTML code to create a drop list
			echo '<form action="deleteProcess.php" method="post">';
			echo 'Select a task to delete</br><select name = "deleteChoice">';
			echo '<option value="">...</option>';
			while($row = mysqli_fetch_array($response))
			{
				$taskOption = $row['Task'];
					
				echo '<option value="'.$taskOption.'"> '.$taskOption.'</option>';
				
			}
			echo '</select>';
			
			mysqli_close($databaseConnect);
			
			echo'<input type="submit" name="deletion" value="Delete Task"></form>';
		?>
		
		</br><a href="TODOapp.php">Back to main page</a>
	</body>
</html>