CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    user_type ENUM('silver', 'gold', 'platinum') NOT NULL
);
INSERT INTO users (username, password, user_type) VALUES ('user1', 'password1', 'silver');
INSERT INTO users (username, password, user_type) VALUES ('user2', 'password2', 'gold');
INSERT INTO users (username, password, user_type) VALUES ('user3', 'password3', 'platinum');
