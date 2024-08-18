# PRODIGY_FS_02
Employee Management System 


# Employee Management System

## Project Overview

The **Employee Management System** is a web-based application designed to streamline the management of employee records. It allows administrators to perform essential CRUD operations—Create, Read, Update, and Delete—on employee data. The system is built with security in mind, ensuring that sensitive employee information is protected through robust authentication and validation mechanisms. This solution is ideal for organizations seeking an efficient way to maintain and manage their employee database.

## Key Features

- **Create Employee Records:** Administrators can add new employees by entering their details such as name, email, age, department, and mobile number. This ensures accurate tracking of employee information.
- **View Employee Records:** The system displays all employee records in a clean, organized table format. Users can easily view key information like employee ID, name, email, and department.
- **Update Employee Records:** Existing employee data can be updated effortlessly using pre-filled forms, allowing administrators to make quick changes when necessary.
- **Delete Employee Records:** Employees can be removed from the system with just a click, making it easy to maintain an up-to-date database.
- **Secure Authentication:** Only authorized personnel can access the system via a login page. This ensures that sensitive employee data is handled exclusively by approved users.
- **Input Validation:** The system incorporates robust validation checks to ensure that only valid and accurate data is entered into the database.

## Technology Stack

- **Backend:** PHP (for server-side logic and database interaction)
- **Frontend:** HTML, CSS (with Bootstrap for styling)
- **Database:** MySQL (used to store employee data)
- **Authentication:** Session-based login system to ensure secure access
- **Validation:** Server-side validation implemented using PHP and MySQL to ensure data integrity

## Project Structure

- `connect.php`: Handles the connection to the MySQL database.
- `display.php`: The main dashboard that displays all employee records and provides options for updating or deleting them.
- `user.php`: The form page that allows administrators to add new employee details.
- `update.php`: A script to handle updates to employee data, using pre-filled forms based on the selected record.
- `delete.php`: A script to handle the deletion of employee records from the database.
- `login.php`: The authentication page that verifies user credentials before allowing access to the system.

## Installation & Setup

### 1. Clone the Repository

Start by cloning the project repository to your local machine:
git clone https://github.com/your-username/employee-management-system.git


### 2. Navigate to the Project Directory

After cloning, move into the project directory:
cd employee-management-system


### 3. Set Up the Database

- Open your MySQL database management tool (such as phpMyAdmin).
- Create a new database named `Employee_management`.
- Import the provided `employee_management.sql` file to set up the required tables and data structure.
- Update the `connect.php` file with your database connection details (host, username, password, database name).

### 4. Run the Application

To run the application on your local development server, use either of the following methods:

- If you're using XAMPP/WAMP, place the project folder in the `htdocs` directory and start Apache/MySQL.
- Alternatively, run the built-in PHP server:

php -S localhost:8000


### 5. Access the Application

Open a web browser and navigate to `http://localhost:8000` (or the appropriate URL for your local server). You should be presented with the login page to access the system.

## Usage Guide

### 1. Login

Upon launching the application, you will be prompted to log in. Enter your credentials to gain access to the administrative dashboard. The login system ensures that only authorized users can manage employee data.

### 2. Manage Employee Records

Once logged in, you can:
- **Add New Employees:** Click the "Add Employee" button to open the employee form and enter new employee details.
- **View Employees:** The dashboard displays a table listing all current employees, complete with essential information such as name, email, department, and more.
- **Update Employee Details:** To modify an employee’s details, click the "Update" button corresponding to that employee. This will take you to a pre-filled form where changes can be made and saved.
- **Delete Employees:** To remove an employee from the system, click the "Delete" button. The system will securely delete the record from the database.

### 3. Logout

Once your work is complete, be sure to log out to ensure the security of the system and its data.

## Security Considerations

- **Authentication:** A secure session-based login system restricts access to only authorized users. Users must log in to access any of the system's functionality, preventing unauthorized access to sensitive data.
- **Input Validation:** The system uses server-side validation to ensure that all input fields are completed correctly before data is submitted. This prevents issues such as SQL injection and ensures that only accurate data is stored.
- **Error Handling:** Graceful error handling is implemented throughout the system. In the event of a failure (e.g., database issues), appropriate error messages are displayed to inform the user.

## Future Enhancements

- **Role-Based Access Control:** Implement user roles such as Admin and HR, each with different permissions.
- **Export Data:** Add functionality to export employee records to formats like CSV or Excel for reporting purposes.
- **Client-Side Validation:** Enhance the user experience with client-side validation (JavaScript) before form submission.
- **Logging:** Add audit logging to track CRUD operations, providing an additional layer of security and accountability.

## Contributing

If you would like to contribute to this project, you are welcome to fork the repository and submit a pull request. Contributions such as bug fixes, new features, or improvements to the codebase are highly encouraged.

## License

This project is open-source and is licensed under the MIT License. You are free to use, modify, and distribute the code as long as the original license is maintained.

