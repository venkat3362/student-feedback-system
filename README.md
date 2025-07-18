# 📝 Student Feedback System

A simple web-based application to collect and view feedback from students, built using **PHP**, **MySQL**, and **HTML/CSS**.

## 🌐 Live Demo (Localhost)
- Form: http://localhost/student-feedback/index.php
- Feedback Viewer: http://localhost/student-feedback/view.php

## ✨ Features
- Submit feedback with name, email, and message
- View all submissions in a clean table
- Timestamp added automatically
- Responsive, user-friendly design

## 💻 Technologies Used
- PHP
- MySQL
- HTML/CSS
- XAMPP / phpMyAdmin
- Git & GitHub

## 📂 Folder Structure
student-feedback/
├── index.php # Feedback form
├── add.php # Handles form submission
├── view.php # Displays all feedback
├── db.php # DB connection
├── style.css # UI Styling
└── README.md # This file

sql
Copy
Edit

## ⚙️ Setup Instructions

1. Install [XAMPP](https://www.apachefriends.org/) and start Apache & MySQL  
2. Clone this repo or copy it into:  
   `C:\xampp\htdocs\student-feedback`
3. Open [phpMyAdmin](http://localhost/phpmyadmin)
4. Create a database named `student_feedback`
5. Run the SQL below to create the `feedback` table:

```sql
CREATE TABLE feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  message TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Open http://localhost/student-feedback/index.php in browser

Submit feedback using the form

View all submissions at http://localhost/student-feedback/view.php

👨‍💻 Author
Venkat Vivek Reddy

IT Student | Batch of 2026