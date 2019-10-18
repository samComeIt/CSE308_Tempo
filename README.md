# CSE308

# Problem Statement
IGC students have trouble using school facilities such as study rooms and the gym. Currently, the students have to reserve the study rooms by signing up on the reservation sheet (paper) before they use them. They do not know if the room is available or not before they go and sign up. The same problem happens with the gym. Students do not know if there is space to play sports unless they go and see. This is a waste of time. Sometimes, students have conflicts with other students as the reservation system is unclear. Our project is will save students’ time and reduce conflicts by creating a website that allows students to see the status of facilities and reserve them online.  

# List of Members and Roles

We divided the roles.
Dong Yeob is a project manager and a marketer.
San Hae is a lead programmer and support lead.
Kyu Hee is a designer and a product owner.


# Tempo Milestone 1

[Website Link]
https://tempo-igc.herokuapp.com/

[Operating System]
Windows

Programs to install/make accounts
Make a Heroku account (We will invite you to our team, ‘tempo’)
Download and install Heroku CLI (https://devcenter.heroku.com/articles/getting-started-with-php#set-up)
Download and install PHP 7.3 (https://windows.php.net/download#php-7.3)
Download and install Git 2.23.0 (https://git-scm.com/downloads)
Download and install Composer 1.9.0 (https://getcomposer.org/download/)
Download and install any IDE that you prefer (e.x Brackets, Visual Studio)
Make a GitHub account (We will invite you to our repository)
Download and install MySQL Workbench 8.0.18 (https://dev.mysql.com/downloads/workbench/)

The Latest Product Version Source Code
The source code for the latest version of the application is in the ‘master’ branch of our GitHub repository: “samComeIt/CSE308”

How to Connect to our Database Server
Make a new MySQL Connection from MySQL Workbench with the following configuration
Connection name: tempo
Hostname: us-cdbr-iron-east-05.cleardb.net
Username: b7784c7eb8ce5c
Password: 2db26ace (Store in Vault)
Click the ‘Test Connection’ button
If the connection is successful, the developer will be able to see our database

How to Test in your Local Machine
Download the file from github or go to your GitHub file directory
Inside the project directory, write ‘php artisan serve’ on command prompt (cmd)
If it does not work, it is because the vendor file and the .env file are missing
Write ‘composer update’ on the command prompt
Write ‘composer install’ on the command prompt
Make a .env file in your project file, ‘echo. 2>.env’. 
Copy the codes from the .env.example file and paste it to the .env file
Write ‘php artisan key:generate’ on the command prompt
Write ‘php artisan serve’ on the command prompt
Go to Chrome and write the line from the command prompt after “Laravel development server started:” http://127.0.0.1:8000


How to Deploy a New Version of Product
Commit ready-to-deploy files to the GitHub ‘master’ branch
Click ‘tempo-igc’ on Heroku
Go to Deploy tab
Check Deployment method: connected to GitHub
On ‘Manual Deploy’, click ‘Deploy Branch’
Heroku builds the selected branch automatically
By clicking ‘View’, the developer can check the deployed application

Bug Tracking System
We will use ‘GitHub Issues’ for keeping track of bugs
