# Virtual Class room for the project MOCCA
This project will implement a virtual classroom for the MOCCA project
	
# How to install
	
### Technologies
	>
		1. PHP: 7.2
		2. Apache: 2.4
		3. Moodle: 3.7
		4. MySql: 5.7
		
### Configuration of MySql
	>
		1. Create a new user
		2. Create a new database
		3. Give permission to the user created in step 1
		
### Install Moodle
	>
		1. Download moodle of the official site: https://download.moodle.org/.
		2. Unzip moodle in the server html directory.
		3. Enter the directory through the web address (www.example.com).
		4. You must follow the wizard for install moodle, in this step you must provide the database credentials.
			4.1 In case that wizard indicate missing components you must install them in the server before to continue.
			
### Install Theme
		PENDIENTE
			
### Use of the environment variables 
	>
		1. Install phpdotenv with composer (You can see the documentation here: https://github.com/vlucas/phpdotenv).
			1.1 php composer.phar require vlucas/phpdotenv.
		2. Create file named .env. You must place the .env file at the root of the project (we refer to outside the publishing directory). In this file you must add the following variables:
			2.1 DBHOST. For example: BDHOST="localhost".
			2.2 BDNAME. For example: DBNAME="name-of-your-database".
			2.3 BDUSER. For example: BDUSER="database-user".
			2.4 DBPASS. For example: DBPASS="database-password".
			2.5 WWWROOT. For example: WWWROOT="https://example.com" (URL of your server).
			2.6 DATAROOT. For example: DATAROOT="/var/www/html" (directory where the moodle is storange).
		3. Replace file config.php by the config.php in this repository
	
