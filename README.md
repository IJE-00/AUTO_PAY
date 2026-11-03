## Architecture/Tech Stack Section:
The Automated Payroll Processing System was developed using the following technologies:

- **HTML** – Used to structure the web pages. It defines the layout, content, and structure of web pages, including headings, inputs, forms, and buttons. Every web browser understands HTML natively.
- **CSS** – Used to design and style the user interface. It handles the design, colors, fonts, responsiveness (mobile-friendly layouts), and animations. It also separates the design from the content.
- **PHP** – Used for server-side processing and payroll computations. Unlike HTML and CSS, which run in the browser, PHP runs on the server before the page is sent to the user. It allows the system to connect to databases, handle user login and registration, process form data, and generate dynamic content.
- **MySQL** – Used to store and manage employee information, attendance records, and payroll data.
- **Git and GitHub** – Used for version control and managing code changes.
- **Visual Studio Code** – Used as the primary code editor.

## Database
	The system uses MySQL as its database management system because it supports structured data storage and relationships between employee records, attendance, admins and employees accounts, and payroll information.

## Hosting and Deployment
	The Automated Payroll Processing System uses **InfinityFree** as its online hosting and deployment platform. InfinityFree was chosen because it provides free web hosting and supports PHP and MySQL, which are the main technologies used in the development of the system. This makes it suitable for hosting a PHP-based web application without requiring a paid hosting subscription. The system's files are uploaded to InfinityFree, while its MySQL database is configured through the hosting platform. This allows authorized users to access the system online through a web browser, provided they have an internet connection.


# DEVELOPMENT WORKFLOW

### 1. Local System Testing

Before uploading my code to GitHub, I thoroughly tested the system's core functionalities and responsiveness in a local environment. I developed the system using HTML, CSS, and PHP with Visual Studio Code as my primary code editor. I also used XAMPP to run a local server, allowing me to test the system and ensure that its features were working properly.

### 2. Connecting to GitHub

After testing the system's functionality, I connected my local project to GitHub to manage code changes, commits, and merges.

First, I created a GitHub repository named **AUTO_PAY** to store all the project's folders and files. Next, I used the `git init` command to initialize a Git repository in my local project folder. After initializing the repository, I added and committed my project files before pushing them to GitHub.

This allowed me to store my project online and keep track of its development progress.

### 3. Changes and Commits

Throughout the development process, I made several improvements to the system, such as enhancing the logo's responsiveness on mobile devices, adding new files, and updating existing ones.

I recorded a total of **34 commits**, with each commit representing changes and improvements made to the system.

I also created two Git branches: **main** and **master**. The `main` branch serves as the primary branch containing the main version of the system, while the `master` branch is used to develop and test additional changes before integrating them into the `main` branch.

Using separate branches allows me to make modifications without directly affecting the primary version of the system. Once the changes are completed and tested, I merge the `master` branch into the `main` branch.

Before deployment, I make sure to test the system again to verify that its features are functioning properly.

### 4. Deployment

For online hosting and deployment, I chose **InfinityFree** because it offers free web hosting, is easy to use, and supports PHP, which is the primary backend programming language used in the system.

First, I created an account on InfinityFree and set up a hosting account with a domain name for my website. InfinityFree provided the necessary hosting details and account credentials.

Next, I accessed the File Manager for my hosting account and uploaded all the project folders and files to the `htdocs` directory.

After uploading the files, I accessed the hosting Control Panel and created a MySQL database. The platform provided the required database credentials, including the database name, username, password, and hostname. I then updated the database connection in the code in my db.php file using the credentials provided by InfinityFree.

Next, I accessed phpMyAdmin through the hosting Control Panel and imported my system's MySQL database.

Finally, after configuring the database connection and uploading all the necessary files, I accessed my website using its assigned domain name to check whether the system was successfully deployed and accessible online.
	
	