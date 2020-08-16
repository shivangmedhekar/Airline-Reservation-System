# Airline Reservation System

- We have built a web application as a part of MU Computer Engineering Mini Porject for subjects: Web Technology and Database Mangagement Systems.

The web application is used by cutomers to select and book their flights on desired source and destination on particular date. The user after booking is given a unique PNR number which he has to use during cancellation of his flight booking. The customer can also see the status of the flight which are late, on-time or cancelled.
The admin has access to change anything in the database of flights or customers. 
The `dbconfig.php` file is appended to all php files that require access to database.


### Contents of Web Application
```
Admin/
├── admin.php
├── change_status.php
├── flight-addision.php
├── insertFlight.php
├── index.php
├── flight-addision.php
└── CSS/
    └── admin-login.css
    
Book/
├── confirm.php
├── customer.php
├── flight.php
├── summary.php
└── index.php

Cancel/
├── cancel_summary.php
├── confirm.php
└── index.php

Database/
└── dbconfig.php

Status/
└── index.php

index.php
styling.css

```

## What we have used ?
- HTML
- CSS
- JavaScript
- Bootstarp
- PHP
- MySQL

## Usage:

You should start cloning this repository:

    $ git clone https://github.com/shivangmedhekar/Airline-Reservation-System.git

After getting the code, you must use *XAMP* or *WAMP* for local hosting and open `index.php` in web browser


## Team
|  **Shivang Medhekar** | **Sohum Khot** |  **Elton Lemos** |
| :---: |:---:|:---:|
| [![Shivang Medhekar](https://avatars2.githubusercontent.com/u/69140290?s=200&u=5df35a82b6d2b6b7b876dfdc22d451c92d30a5c6&v=4)](https://github.com/shivangmedhekar)    | [![Sohum Khot](https://avatars0.githubusercontent.com/u/49232257?s=200&u=909a1b15cee566203a07ef8859148b6c508029d2&v=4)](https://github.com/sohumkhot) | [![Elton Lemos](https://media-exp1.licdn.com/dms/image/C5103AQFG2Cinmyjfbg/profile-displayphoto-shrink_200_200/0?e=1597276800&v=beta&t=RY6KFxrNbAhQeA-dB47A51HoFXjyEj7v1UHYnmAOPo4)](https://github.com/icefrostpeng) |
| <a href="https://github.com/shivangmedhekar" target="_blank">`github.com/shivangmedhekar`</a> | <a href="https://github.com/sohumkhot" target="_blank">`github.com/sohumkhot`</a> | <a href="https://github.com/icefrostpeng" target="_blank">`github.com/icefrostpeng`</a> | 

## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
