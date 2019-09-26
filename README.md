# Virtual Class room for the project MOCCA
This project will implement a virtual classroom for the MOCCA project
	
# How to install
	
### Technologies
	
		1. PHP: 7.2
		2. Apache: 2.4
		3. Moodle: 3.7
		4. MySql: 5.7
		
### Configuration of MySql
	
		1. Create a new user
		2. Create a new database
		3. Give permission to the user created in step 1
		
### Install Moodle
	
		1. Download moodle of the official site: https://download.moodle.org/.
		2. Unzip moodle in the server html directory.
		3. Enter the directory through the web address (www.example.com).
		4. You must follow the wizard for install moodle, in this step you must provide the database credentials.
			4.1 In case that wizard indicate missing components you must install them in the server before to continue.
		5. In your php.ini search for the "upload_max_filesize" setting and up this to 128M.
		6. In your php.ini search for the "post_max_size" setting and up this to 128M.
		3. Search for the max_execution_time setting and up this to 300.
			
			
### Use of the environment variables 
	
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
	
### Modify database error page 
		1. Add file "bd_fuera_linea.html" to the moodle root
		2. Add directory "assets" to the moodle root
		3. Replace file "/lib/dmllib.php" in the directory /lib by the file in this repository (/lib/dmllib.php)
		
### Template themes installation
		We recommend using the lambda theme (https://themeforest.net/item/lambda-responsive-moodle-theme/9442816), but the process is the same for all topics
			1. Download the zip file of the theme
			2. Login to your Moodle site as an admin.
			3. Go to Administration > Site administration > Plugins > Install plugins.
			4. Then upload theme ZIP file. You should only be prompted to add extra details (in the Show more section) if your plugin is not automatically detected.
			5. If your target directory is not writable, you will see a warning message.
			6. Check the plugin validation report.
			7. Open Settings > Site administration > Appearance > Themes > Theme Selector link.
			8. Click on "Clear theme caches" button.
			9. In default section click on the "Select theme" button on the right of the current theme being used for the device.
			10. Scroll down to find the theme you wish to use.
			11. Click the "Use theme" button next to that theme.
			12. Moodle will tell you it has been saved as the default theme.
			13. Check your Moodle site by going to the Moodle site's home page. 
			14. You may have to refresh your browser to see the new theme.
			
			
			
			