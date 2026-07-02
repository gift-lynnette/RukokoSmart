CREATE DATABASE IF NOT EXISTS rukoko_contacts;
USE rukoko_contacts;

CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(150) NOT NULL UNIQUE,
    display_order INT NOT NULL DEFAULT 0
);

CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(150) NOT NULL,
    email VARCHAR(190) NOT NULL,
    service_of_interest VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('new', 'read', 'responded') NOT NULL DEFAULT 'new',
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_status (status),
    INDEX idx_submitted_at (submitted_at)
);

CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT IGNORE INTO services (service_name, display_order) VALUES
('CCTV Installation', 1),
('CCTV Repair', 2),
('Remote Monitoring', 3),
('Corporate Branding', 4),
('Vehicle Branding', 5),
('Promotional Materials', 6);