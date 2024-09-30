# Airline Reservation System

![PHP](https://img.shields.io/badge/PHP-7.4-4F5B93?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-5.7-4479A1?style=for-the-badge&logo=mysql)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.1.3-563D7C?style=for-the-badge&logo=bootstrap)
![jQuery](https://img.shields.io/badge/jQuery-3.3.1-0769AD?style=for-the-badge&logo=jquery)

## Overview

The Airline Reservation System is a web application that allows users to book flights, check flight status, and cancel reservations. It is built using PHP and utilizes Bootstrap for responsive design.

**MU Computer Engineering Mini Project for subjects: Web Technology and Database Management Systems.**

[GitHub Repository](https://github.com/shivangmedhekar/Airline-Reservation-System.git)

## Features

- **Flight Booking**: Users can book flights by selecting their source, destination, and date of travel.
- **Check Flight Status**: Users can check the status of their flights.
- **Cancel Booking**: Users can cancel their flight bookings.
- **Responsive Design**: The application is built using Bootstrap to ensure a responsive user interface.

## Project Structure

The project consists of the following key files and directories:

```
Airline-Reservation-System/
│
├── index.php                # Main entry point of the application
├── Book/                    # Directory for booking-related functionality
│   ├── confirm.php          # Confirmation page for booked flights
│   ├── customer.php         # Customer information form
│   ├── flights.php          # Flight selection page
│   ├── summary.php          # Summary of the booking details
│   └── index.php            # Booking interface
├── Status/                  # Directory for flight status functionality
│   └── index.php            # Status checking interface
├── Cancel/                  # Directory for cancellation functionality
│   ├── cancel_summary.php    # Summary page for canceled bookings
│   ├── confirm.php           # Confirmation page for cancellation
│   └── index.php            # Cancellation interface
├── Images/                  # Directory for images
│   ├── airline-1.jpg        # Image of airline 1
│   ├── airline-2.jpg        # Image of airline 2
│   └── airline-3.jpg        # Image of airline 3
├── styling.css              # Custom styles for the application
└── Database/                # Directory for database configuration
    └── dbconfig.php         # Database connection configuration
```

## Getting Started

To run this application locally, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd Airline-Reservation-System
   ```

2. **Set up the Database**:
   - Ensure you have a MySQL server running.
   - Create a database and configure the `dbconfig.php` file with your database credentials.

3. **Run the Application**:
   - Use a local server such as XAMPP or MAMP to host the application.
   - Navigate to `http://localhost/Airline-Reservation-System/index.php` in your web browser.

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- Bootstrap
- jQuery

## Team

|  **Shivang Medhekar** | **Sohum Khot** |  **Elton Lemos** |
| :---: |:---:|:---:|
| [![Shivang Medhekar](https://avatars2.githubusercontent.com/u/69140290?s=200&u=5df35a82b6d2b6b7b876dfdc22d451c92d30a5c6&v=4)](https://github.com/shivangmedhekar)    | [![Sohum Khot](https://avatars0.githubusercontent.com/u/49232257?s=200&u=909a1b15cee566203a07ef8859148b6c508029d2&v=4)](https://github.com/sohumkhot) | [![Elton Lemos](https://avatars.githubusercontent.com/u/61613837?s=200&v=4)](https://github.com/eltonlemos) |
| <a href="https://github.com/shivangmedhekar" target="_blank">`github.com/shivangmedhekar`</a> | <a href="https://github.com/sohumkhot" target="_blank">`github.com/sohumkhot`</a> | <a href="https://github.com/eltonlemos" target="_blank">`github.com/eltonlemos`</a> | 

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
