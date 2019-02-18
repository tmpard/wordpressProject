Wordpress Installation Instructions
Tricia Pardave
If using Mac read below:
To download MySQL on your computer you have to look up the mySQL file for your right OS.
Once you find the file, download it and install it. 
When asked for authenticity type choose the authentic/standard one and set the password to something easy to remember such as "password"
*If any errors while you download you can uninstall mySQL from your system preferences page.*
after you download mySQL you'll need to download PHP.
Go ahead and search PHP on google and you'll find the download link the latest version. Make sure it's at least version 7.3
Then go to wordpress.org/download/ and there you will find the files necessary to start up your wordpress website.
Go to your favorite IDE and startup the local database.
once you have the IDE pulled up then search for the wordpress folder that you downloaded.
Found it? awesome, leave on standby for a second because you have to start up your local database.
Go to your IDE's database features and open the options for mySQL.
once you have the commandline opened up. create an account and a user to have access to that account with an easy password.
Grant access to the account to the user you just made. Leave that on standby now and go back to the Wordpress folder
go to the file that is called wp-config and in it you'll find spots to put in the username and the password that you created.
now go into the running configurations of your IDE and add a new configuration for a PHP local Host.
set the port to "8080" and add the source root as the wp-config.php file.
Find the tools window and go to database and click on the database tab and hit MYSQL.
The user should be root and the password should be password.
once you do all that go to the wp-config file and run it.
you are then able to go on your internet browser and look up localhost/8080 and you'll find your website
log in and choose your language and you're going to be good to go.

Git collaboration:
Git is awesome way for coders to collaborate because it makes it simpler.
First the project is started in a repository.
repositories are easy to modify and since that's both a pro and a con. you can create identical branches
the identical branches will hold the information for you and will allow the members to modify and then match the results up with the master branch.
The changes happen through commits. Commits basically are little changes by the developers that can later be pushed to the branch.
the commits when finalized locally get pushed globally and adjusted on github.com
