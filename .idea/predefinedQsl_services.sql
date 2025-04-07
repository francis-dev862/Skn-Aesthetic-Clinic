CREATE DATABASE skn_booking;
USE skn_aesthetic;

CREATE TABLE service_selections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,  -- You can link this to a user table later
    service_name VARCHAR(255) NOT NULL,
    price VARCHAR(50) NOT NULL,
    selected_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);