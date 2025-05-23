# Registration-form
Objective
Build a basic login and registration system using PHP and MySQL, designed to demonstrate secure user authentication.

Features
User Registration

Fields: username, email, password

Validates and stores user data securely in a MySQL database

User Login

Fields: email, password

Authenticates using hashed passwords (password_hash, password_verify)

Welcome Page

After login, displays a message:
Welcome, [username]

Security

Passwords are stored securely using PHP's built-in password hashing functions

Tech Stack
Layer	Technology
Front-end	HTML, CSS
Back-end	PHP
Database	MySQL

Folder Structure
perl
Copy
Edit
simple-login-system/
├── config.php           # Database connection
├── register.php         # Registration logic and form
├── login.php            # Login logic and form
├── welcome.php          # Welcome page after login
├── logout.php           # Ends user session
├── style.css            # Optional styling
└── README.md
Setup Instructions
1. Clone the Repository
bash
Copy
Edit
git clone https://github.com/your-username/simple-login-system.git
cd simple-login-system
2. Create a MySQL Database
sql
Copy
Edit
CREATE DATABASE user_auth;

USE user_auth;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
3. Update config.php
Set your local MySQL credentials:

php
Copy
Edit
<?php
$conn = mysqli_connect("localhost", "your_db_username", "your_db_password", "user_auth");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
4. Start Local Server
If you're using XAMPP:

Move the project to the htdocs/ directory.

Start Apache and MySQL from the XAMPP control panel.

Open in browser:

perl
Copy
Edit
http://localhost/simple-login-system/register.php

Demo Credentials (optional)
You can manually insert a test user:

php
Copy
Edit
$password = password_hash('test123', PASSWORD_DEFAULT);
Then insert into MySQL:

sql
Copy
Edit
INSERT INTO users (username, email, password) VALUES ('Test User', 'test@example.com', '$password');
