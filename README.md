# Overview

A web application using PHP and MariaDB for photo albums management.

The application offers the user the ability to create, view, update and delete photo albums, and their associated images.

### Prerequisites
PHP + MariaDB (alternative: MySQL or other RDBMS compliant with the MariaDB's syntax) + Apache (or alternative HTTP server) - all of them configured and running.

Could be packed as WAMP, XAMPP, etc.

## Starting the application
Create an empty database, apply the migration scripts in the `database/migration` directory to it, adjust the connection string in `base/sql/statement.php` and place the project in the directory expected by your server.
