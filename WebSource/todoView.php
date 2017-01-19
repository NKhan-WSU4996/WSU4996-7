<html>
	<head>
		<title>Task List</title>
	</head>
	
	<body>
		<?php
			
			//Connect to database to retrieve the table
			require_once('../mysql_connect.php');
		
			$query = "SELECT Task, Date_Added FROM tasks";
			$response = @mysqli_query($databaseConnect, $query);
		
			if($response)
			{
				//Creates an HTML table to print all of the data to.
				echo '<table align="left"
				cellspacing="15" cellpadding="10">
				
				<tr><td align="left"><b>Task</b></td>
				<td align="left"><b>Date/Time Added</b></td></tr>';
				
				
				//Prints the table row by row
				while($row = mysqli_fetch_array($response))
				{
					echo '<tr><td align="left">' .
					$row['Task'] . 
					'</td><td align="left">' .
					$row['Date_Added'] . 
					'</td><td align="left">' . '</tr>';
					
				}
				
				echo '</table>';
			}
			else
			{
				echo 'Could not issue a query to the database' . mysqli_error($databaseConnect);
			}
			
			mysqli_close($databaseConnect);
	
		?>
		
		<!--A link back to the main page-->
		<a href="TODOapp.php">Back to main page</a>
	</body>
</html>