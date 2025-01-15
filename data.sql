SHOW DATABASES;
CREATE DATABASE salesForce;
USE salesForce;
CREATE TABLE trending(
	content VARCHAR(100) NOT NULL
);
CREATE TABLE events(
	title VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    location VARCHAR(50) NOT NULL,
    type VARCHAR(50)
);
CREATE TABLE users(
	name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL
);
SELECT * FROM users;
SELECT * FROM trending;
SELECT * FROM events;

INSERT INTO trending (content) VALUES 
('Salesforce Will Hire No More Software Engineers in 2025, Says Marc Benioff'),
("10 New Salesforce Flow Features in Spring ‘25"),
("14 Hottest Salesforce Spring ’25 Features for Admins"),
("How to Avoid Bad Salesforce Partners: The Three-Question Test"),
("Salesforce Spring ‘25 Release: What to Expect and How to Prepare");

INSERT INTO events (title, date, location, type) VALUES 
('Japan Dreamin’',"2025-01-20","Tokyo, Japan","Community"),
("Agentforce 2025 Deep Dive: What’s New and What You Need to Know","2025-01-21","Virtual","SF Ben Webinar"),
("Architect Dreamin’","2025-01-22","Scottsdale, AZ","Community"),
("Cactusforce 2025","2025-01-23","Scottsdale, AZ","Community"),
("Philippines Dreamin’","2025-01-25","Manila, Philippines","Community");