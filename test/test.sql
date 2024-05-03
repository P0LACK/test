CREATE DATABASE IF NOT EXISTS test;

USE test;

CREATE TABLE IF NOT EXISTS requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    uuid VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    itemType VARCHAR(255),
    measureName VARCHAR(255),
    quantity INT,
    price DECIMAL(10, 2),
    costPrice DECIMAL(10, 2),
    sumPrice DECIMAL(10, 2),
    tax DECIMAL(10, 2),
    taxPercent DECIMAL(10, 2),
    discount DECIMAL(10, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
