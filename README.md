# GeneFitletics Assignment

This project involves a PHP script that connects to a MySQL database and calculates a result based on certain conditions using mean values from two tables.

## Prerequisites

- PHP installed on your system.
- MySQL server installed and running.
- Access to phpMyAdmin or a MySQL client to execute SQL scripts.

## Setup Instructions

1. **Database Setup:**
   - Execute the `createdb.sql` script using phpMyAdmin or a MySQL client to create the `testdb` database and populate tables `A` and `B` with random values within specified ranges.

2. **PHP Script:**
   - Update the script (`index.php`) with your MySQL server details (`$servername`, `$username`, `$password`, `$dbname`).

## Running the Script

1. Open a terminal or command prompt.
2. Navigate to the project directory.
3. Execute the PHP script:
   ```bash
   php index.php
