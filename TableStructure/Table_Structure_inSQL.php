<?php
	include_once("db_Connection.php");

/*------------------------Table users---------------------------------------------------*/
	
	$q_users = "CREATE TABLE IF NOT EXISTS users(
					id 				INT(255) 				NOT NULL AUTO_INCREMENT,
					username 	VARCHAR(20)		NOT NULL,
					password	VARCHAR(20)		NOT NULL,
					name 			VARCHAR(20) 		NOT NULL,
					surname 	VARCHAR(20) 		NOT NULL,
    				birth	 			DATE 						NOT NULL,
					gender 		ENUM('f','m') 			NOT NULL,
					email 			VARCHAR(30) 		NOT NULL,
					g_likes		INT(255)					NOT NULL DEFAULT 0,
					g_dislikes	INT(255)					NOT NULL DEFAULT 0,
                    picture			VARCHAR(255)	NOT NULL,
					PRIMARY 	KEY (id),
					UNIQUE 	KEY(username, email)
				)";
				
	$query = mysqli_query($connection, $q_users);
	
	if($query == TRUE)
	{
		echo "<h3>Users table created succesfully!</h3>";
	}
	else
	{
		echo "<h3>Users table NOT created !</h3>";
	}
	
	
/*------------------------Table subjects---------------------------------------------------*/

$q_users = "CREATE TABLE IF NOT EXISTS subjects(
				id 					INT(255) 		NOT NULL AUTO_INCREMENT,
				name 			VARCHAR(30)			NOT NULL,
				description 	VARCHAR(255) 		NOT NULL,
				PRIMARY 		KEY (id)
			)";
			
$query = mysqli_query($connection, $q_users);

if($query == TRUE)
{
	echo "<h3>subjects table created succesfully!</h3>";
}
else
{
	echo "<h3>subjects table NOT created !</h3>";
}


/*------------------------Table questions---------------------------------------------------*/

$q_friends = "CREATE TABLE IF NOT EXISTS questions(
					id 				INT(255) 	NOT NULL 	AUTO_INCREMENT,
					description VARCHAR(255)	NOT NULL,
					subject_id		INT(255)	NOT NULL,
					FOREIGN KEY (subject_id) REFERENCES subjects(id),
					PRIMARY 	KEY (id)
					
				);";
				
	$query = mysqli_query($connection, $q_friends) or die(mysql_error());
	
	if($query == TRUE)
	{
		echo "<h3>questions Table created Succesfully !</h3>";
	}
	else
	{
		echo "<h3>questions Table NOT created ! </h3>";
		
		
		
	}

/*------------------------Table answers---------------------------------------------------*/

$q_friends = "CREATE TABLE IF NOT EXISTS answers(
					id 				INT(255) 		NOT NULL 	AUTO_INCREMENT,
					description VARCHAR(255)		NOT NULL,
					correct 	ENUM('0','1') 		NOT NULL	DEFAULT '0',
					question_id		INT(255)		NOT NULL,
					FOREIGN 	KEY (question_id) 	REFERENCES questions(id),
					PRIMARY 	KEY (id)
				);";
				
	$query = mysqli_query($connection, $q_friends) or die(mysql_error());
	
	if($query == TRUE)
	{
		echo "<h3>answers Table created Succesfully !</h3>";
	}
	else
	{
		echo "<h3>answers Table NOT created ! </h3>";
		
		
		
	}