# Library Management System (PHP & MySQL)

This is a **PHP & MySQL Library Management System** developed as a college project for the **Web Services & Applications** course. The system allows students to sign up, browse, and manage library resources, while administrators can manage books, users, and other library operations.

---

## Features

- Student signup and login
- Admin login and dashboard
- Book management (add, edit, delete)
- Student book issue and return tracking
- CAPTCHA verification during signup
- Mobile and email validations

---

## Installation Instructions

To run this project locally, follow these steps:

1. **Install a local server:**
   - Use **XAMPP** (Windows) or **LAMP** (Linux) stack.

2. **Set up the project folder:**
   - Create a folder named `library` in the `htdocs` directory (for XAMPP) or your web root folder.
   - Copy all project files into this folder.

3. **Set up the database:**
   - Open **phpMyAdmin** (usually at `http://localhost/phpmyadmin`).
   - Create a database named `library`.
   - Import the provided SQL file to populate the database with tables and initial data.

4. **Start the server:**
   - Start Apache and MySQL from XAMPP/LAMP.
   - Open the project in your browser at:  
     ```
     http://localhost/library/
     ```

---

## Live Demo

You can also check out the **live version** of the project here:  
[Library Management System Live](https://aleksandartrifunovic1.000webhostapp.com/)

---

## Admin Panel Access

To access the admin panel, use the following credentials:  

- **Username:** admin  
- **Password:** admin!!123  

> These credentials are only for the admin panel. Student registration has its own workflow.

---

## Technologies Used

- PHP  
- MySQL  
- HTML, CSS, Bootstrap  
- JavaScript, jQuery  

---

## Notes

- Ensure the **GD extension** is enabled in PHP for CAPTCHA functionality.
- Use modern browsers for best compatibility.
- For any issues, check `error_reporting` in PHP and the browser console for debugging.

