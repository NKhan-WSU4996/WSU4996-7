<html>
	<head>
		<title>List Change</title>
	</head>

	<body>
		<?php
			
			if(isset($_POST['addSubmit']))
			{
				if(empty($_POST['AddTask']))
				{
					echo"<p>Must enter task name to add a task</br>Redirecting to main page...</p>";
					sleep(3);
					header("refresh: 3; URL=TODOapp.php");
					exit;
				}
				else
				{
					$newTask = trim($_POST['AddTask']);
					
					require_once('../mysql_connect.php');
					
					$query = "INSERT INTO tasks (Task, Date_Added, task_id) VALUES (?, NOW(), NULL)";
					
					$statement = mysqli_prepare($databaseConnect, $query);
					
					mysqli_stmt_bind_param($statement, "s", $newTask);
					
					mysqli_stmt_execute($statement);
					
					#checking if change was made
					$rowsAffected = mysqli_stmt_affected_rows($statement);
					
					if($rowsAffected == 1)
					{
						echo '<p>Task added</br>Returning to main page...</p>';
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