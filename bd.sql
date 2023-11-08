CREATE DATABASE crudsystem;
USE crudsystem;

CREATE TABLE crudtable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pass VARCHAR(255) NOT NULL
);

INSERT INTO crudtable (name, lastName, email, pass) VALUES
    ('John', 'Doe', 'john@example.com', 'password123'),
    ('Alice', 'Smith', 'alice@example.com', 'securepass456'),
    ('Bob', 'Johnson', 'bob@example.com', 'mypassword789');
