<!DOCTYPE html>
<html>
	<head>
		<title>Nabeel Khan's TODO list application</title>
	</head>

	<body>
	
		<h1>To Do List</h1>
		
		<!--The add task action: Takes user input for a task to add, then accepts with the submit button-->
		<form action="todoAdd.php" method="post">
			Add Task: <input type="text" name="AddTask" size="50" maxlength="100">
			<input type="submit" name="addSubmit" value="Add Task"></br></br>
		</form>
		
		<!--The delete task action: Retreives Tasks from database and allows user to select one for deletion-->
		<form action="todoDelete.php" method="post">
			<input type="submit" name="delete" value="Delete a Task"></br></br>
		</form>
		
		<!--View task: Allows user to view their list of tasks-->
		<form action="todoView.php" method="post">
			<input type="submit" name="view" value="View task list"></br>
		</form>
		
	</body>
</html>