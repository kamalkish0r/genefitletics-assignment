CREATE DATABASE testdb;

USE testdb;

CREATE TABLE A (
    id INT AUTO_INCREMENT PRIMARY KEY,
    value FLOAT
);

CREATE TABLE B (
    id INT AUTO_INCREMENT PRIMARY KEY,
    value FLOAT
);

-- Insert random values into table A
INSERT INTO A (value)
SELECT FLOOR(RAND() * 800) + 1 AS random_value
FROM information_schema.tables
LIMIT 800;

-- Insert random values into table B
INSERT INTO B (value)
SELECT FLOOR(RAND() * 50) + 1 AS random_value
FROM information_schema.tables
LIMIT 50;
