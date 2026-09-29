# 🎨 Online Painting Management System

The **Online Painting Management System** is a web-based application designed to manage and showcase paintings through an organized online platform. The system allows users to register, log in, browse paintings, search and filter paintings, and interact with the available features. It also provides management features for adding, editing, and deleting painting information.

---

## 📌 Project Overview

The main purpose of this project is to develop a simple and user-friendly online painting management platform using **PHP and MySQL**.

The system provides a structured way to manage painting information and allows users to interact with the website through different pages and features.

---

## ✨ Features

### 👤 User Features

* User Registration
* User Login
* User Logout
* View available paintings
* Search paintings
* Filter paintings
* View painting information
* Contact page
* Form validation

### 🖼️ Painting Management

* Add new paintings
* View painting records
* Edit painting information
* Delete paintings
* Search and filter painting records

### 🔐 Security & Validation

* Login session management
* Form input validation
* Server-side validation
* Prepared SQL statements
* User authentication
* Restricted access to protected pages

---

## 🛠️ Technologies Used

| Technology | Purpose                                |
| ---------- | -------------------------------------- |
| HTML5      | Web page structure                     |
| CSS3       | Website design and styling             |
| JavaScript | Client-side interaction and validation |
| PHP        | Backend development                    |
| MySQL      | Database management                    |
| XAMPP      | Local development environment          |

---

## 🗂️ Project Structure

```text
Online-Painting-Management-System/
│
├── index.php
├── login.php
├── register.php
├── logout.php
├── dashboard.php
├── contact.php
│
├── add_painting.php
├── edit_painting.php
├── delete_painting.php
├── paintings.php
│
├── db.php
│
├── css/
│   └── style.css
│
├── js/
│   └── script.js
│
├── images/
│   └── painting images
│
└── README.md
```

> The exact file names may vary depending on the final project version.

---

## 🗄️ Database

The project uses **MySQL** as the database management system.

The database stores information related to:

* Users
* Paintings
* Painting details
* User interactions/records where applicable

The PHP application connects to MySQL through the database connection file:

```text
db.php
```

---

## ⚙️ How to Run the Project Locally

### Step 1: Install XAMPP

Install **XAMPP** and start:

* Apache
* MySQL

### Step 2: Copy the Project

Place the project folder inside:

```text
C:\xampp\htdocs\
```

For example:

```text
C:\xampp\htdocs\Online-Painting-Management-System
```

### Step 3: Create the Database

Open:

```text
http://localhost/phpmyadmin
```

Create the required database and import the provided SQL file.

### Step 4: Configure Database Connection

Open:

```text
db.php
```

Set the database connection information according to the local MySQL configuration.

### Step 5: Run the Website

Open the browser and visit:

```text
http://localhost/Online-Painting-Management-System/
```

---

## 🔄 System Workflow

```text
User
 │
 ├── Register
 │      ↓
 │   Login
 │      ↓
 │   Dashboard
 │      ↓
 ├── View Paintings
 ├── Search / Filter
 └── Contact
```

For painting management:

```text
Admin / Authorized User
          │
          ↓
    Painting Management
          │
     ┌────┼────┐
     ↓    ↓    ↓
    Add  Edit Delete
     │    │    │
     └────┼────┘
          ↓
      MySQL Database
```

---

## 🔒 Validation and Security

The project uses several basic security and validation techniques:

* Required field validation
* Input validation
* Session-based authentication
* Prepared SQL statements
* Restricted access to authenticated pages
* Validation of IDs before database operations
* Controlled database operations

Prepared statements are used to reduce the risk of SQL injection during database operations.

---

## 🧪 Testing

The following functionalities are tested:

| Test Case          | Expected Result                  |
| ------------------ | -------------------------------- |
| User registration  | Account is created successfully  |
| User login         | User can access the system       |
| Invalid login      | Error message is displayed       |
| Add painting       | Painting is saved                |
| Edit painting      | Painting information is updated  |
| Delete painting    | Selected painting is removed     |
| Search painting    | Matching paintings are displayed |
| Filter painting    | Relevant paintings are displayed |
| Logout             | User session is ended            |
| Invalid form input | Validation message is displayed  |

---

## 🎯 Project Objectives

The main objectives of this project are:

* To develop a functional web-based painting management system.
* To practice frontend and backend web development.
* To use PHP for server-side programming.
* To use MySQL for database management.
* To implement CRUD operations.
* To understand authentication and session management.
* To create a simple and user-friendly interface.

---

## 🚀 Future Improvements

The system can be improved in the future by adding:

* Online painting purchase/order system
* Payment gateway
* Image upload management
* Painting categories
* Artist profiles
* User reviews and ratings
* Wishlist functionality
* Admin analytics dashboard
* Email notifications
* Improved responsive design

---

## 👩‍💻 Project Information

**Project Name:** Online Painting Management System

**Project Type:** Web Application

**Backend:** PHP

**Database:** MySQL

**Frontend:** HTML, CSS, JavaScript

**Development Environment:** XAMPP

---

## 📄 License

This project was developed for academic and educational purposes.
