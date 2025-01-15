# Salesforce Ben Clone Website

## Project Overview
This project is a functional clone of the **Salesforce Ben** website, developed using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**. The site includes user authentication features (sign-up and login) and dynamic content management for sections like "Trending" and "Upcoming Events." It is fully responsive and designed to work seamlessly across various devices.

---

## Features

### 1. **User Authentication**
- **Sign-Up Page**:
  - Users can register by providing their name, email, and password.
  - Error messages are displayed if any field is left blank or the input is invalid.
  - Passwords are securely stored in encrypted form in the MySQL database for enhanced security.
  - Includes a link for already registered users to navigate directly to the login page.

- **Login Page**:
  - Registered users can log in using their credentials.
  - Validates user input and provides error messages for incorrect details.

### 2. **Dynamic Content Management**
- **Trending and Upcoming Events Sections**:
  - Admins can add content to the "Trending" and "Upcoming Events" sections through the database.
  - The website dynamically fetches and displays this data without requiring changes to the design.

### 3. **Responsive Design**
- The site is fully responsive, ensuring a clean and user-friendly experience across desktops, tablets, and mobile devices.

---

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

---

## How It Works

### **User Authentication**
1. **Sign-Up Process**:
   - User fills out the form with name, email, and password.
   - Input validation ensures all fields are filled correctly.
   - Passwords are hashed using a secure encryption method before being stored in the database.
   - Successful registration redirects the user to the login page.

2. **Login Process**:
   - User enters email and password.
   - Credentials are verified against the database.
   - Upon successful login, the user is granted access to the main site.

### **Dynamic Content**
- Admins can update the "Trending" and "Upcoming Events" sections by modifying the respective tables (`trending` and `events`) in the MySQL database.
- The website automatically reflects the updated content without requiring any code changes.

---

## Database Structure

### **Users Table** (`users`)
| Column Name | Data Type | Description               |
|-------------|-----------|---------------------------|
| `id`        | INT       | Primary key, auto-increment. |
| `name`      | VARCHAR   | User's name.             |
| `email`     | VARCHAR   | User's email (unique).   |
| `password`  | VARCHAR   | Encrypted user password. |

### **Trending Table** (`trending`)
| Column Name | Data Type | Description               |
|-------------|-----------|---------------------------|
| `id`        | INT       | Primary key, auto-increment. |
| `title`     | VARCHAR   | Title of the trending item. |
| `content`   | TEXT      | Description of the item.  |

### **Events Table** (`events`)
| Column Name | Data Type | Description               |
|-------------|-----------|---------------------------|
| `id`        | INT       | Primary key, auto-increment. |
| `event_name`| VARCHAR   | Name of the event.        |
| `details`   | TEXT      | Event details.            |

---

## How to Run the Project
1. Clone the repository to your local machine.
2. Set up a **MySQL** database and import the provided SQL file to create the necessary tables.
3. Update the database connection details in the PHP configuration file.
4. Launch a local server (e.g., XAMPP or WAMP).
5. Open the project in your browser to access the website.

---

## Security Features
- Passwords are stored in encrypted form using PHP's `password_hash()` function.
- Input validation is implemented to prevent SQL injection and other common vulnerabilities.

---

## Future Enhancements
- Add a password recovery feature.
- Implement user roles (e.g., admin, user) for better content management.
- Enhance the UI/UX with animations and advanced styling.

---

## Author
**Harsh Gupta**

For any queries or suggestions, feel free to contact me.

---

