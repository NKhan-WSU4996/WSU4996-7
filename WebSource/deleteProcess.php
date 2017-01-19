<html>
	<head>
		<title>Delete Processed</title>
	</head>
	
	<body>
		<?php
			//Ensures the input from the drop list was a valid one
			if(isset($_POST['deletion']))
				{
					//If the list was empty or the input was invalid, return to the main page with error
					if(empty($_POST['deleteChoice']) || ($_POST['deleteChoice'] == "..."))
					{
						echo"<p>Error: Choice not selected or List was empty</br>Redirecting to main page...</p>";
						sleep(3);
						header("refresh: 3; URL=TODOapp.php");
						exit;
					}
					else
					{
						//Connects to the database with the query to delete the requested task
						$taskToDelete = $_POST['deleteChoice'];
						
						require_once('../mysql_connect.php');
					
						$query = "DELETE FROM tasks WHERE Task = ?";
						
						$statement = mysqli_prepare($databaseConnect, $query);
						
						mysqli_stmt_bind_param($statement, "s", $taskToDelete);
						
						mysqli_stmt_execute($statement);
						
						//checking if change was made
						$rowsAffected = mysqli_stmt_affected_rows($statement);
						
						if($rowsAffected == 1)
						{
							echo '<p>Task deleted successfully</br>Returning to main page...</p>';
						}
						else
						{
							echo '<p>Error occured, check database</br>Returning to main page...</p>';
						}
						
						mysqli_stmt_close($statement);
						mysqli_close($databaseConnect);
						
						sleep(3);
						header("refresh: 3; URL=TODOapp.php");
						exit;
				}
			}
		
		?>
	</body>
</html>