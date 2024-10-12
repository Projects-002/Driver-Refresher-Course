CREATE DATABASE driving_license;

USE driving_license;

CREATE TABLE quiz_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    q1 VARCHAR(255),
    q2 VARCHAR(255),
    q3 VARCHAR(255),
    q4 VARCHAR(255),
    q5 VARCHAR(255),
    q6 VARCHAR(255),
    score INT,
    submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
