# WSU4996-7
Repository for TODO Application by Nabeel Khan

Deployment Instructions:

You will need a web server stack package to deploy this application. These instructions will assume that XAMPP is being used.
XAMPP comes with Apache, PHP, and MySQL(MariaDB). All three of these are needed to run this application.

Once you have installed XAMPP, locate the 'xampp' directory on your machine and search for the 'htdocs' directory within. 
All of the TODO files in the 'WebSource' folder should be copied and pasted into the 'htdocs' folder.
Then, place the mysql_connect.php file in the xampp directory itself.

If alternate directories are being used to run the application, ensure that mysql_connect.php is ALWAYS a directory
level above the WebSource files.

After the files have been placed in the proper locations, you will need to set up the database. XAMPP has a link to
phpmyadmin, an SQL application that can help easily set up the database through GUI.

phpmyadmin directions:
	Run the XAMPP control panel, then Start Apache and MySQL 

	Navigate to phpmyadmin by typing in your browser's URL bar 'localhost/dashboard'. Click on phpmyadmin on the top right corner of the page.

	On the main page, click on the User accounts tab on the top bar, then click add user account.

	Type a desired user name and password, and ensure that host name is set to 'localhost'.

	Set the user's priveledges to SELECT, INSERT, and DELETE. Leave everything else blank and click 'go' on the bottom of the page.

	NOTE: Make sure that you change the defined username and password in mysql_connect.php to the same values as you entered to create
	the user.

	Now, click on databases on the top of the page, and type 'tasklist' in the Create Database bar, then click create.

	You will be prompted to create a table. Create a table called 'tasks' and change the value of columns to 3, then continue.

	Enter the following data:
		1st row: Task		varchar(100) 	(nothing else needs to be changed)
		2nd row: Date_Added	timestamp	Default = current_time		Attributes = On update	
		3rd row: task_id	mediumint	check the A_I box

	Then create the table.

After the table is created, everything should be set to start running the application. In a browser's URL bar, paste the path of the TODOapp.php file, where you can begin testing the application.