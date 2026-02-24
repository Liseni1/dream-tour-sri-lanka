CREATE TABLE users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  role VARCHAR(20) DEFAULT 'user'
);

CREATE TABLE packages (
  package_id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  image VARCHAR(100)
);

CREATE TABLE reservations (
  reservation_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  package_id INT,
  status VARCHAR(30) DEFAULT 'Pending'
);

INSERT INTO users(name, email, password, role)
VALUES
('Admin', 'admin@dreamtour.com', '1234', 'admin');

INSERT INTO packages(title, description, price, image)
VALUES
('Beach Tour', 'Enjoy Mirissa beaches.', 25000, 'beach.jpg'),
('Hill Tour', 'Visit Ella.', 30000, 'hill.jpg'),
('Cultural Tour', 'Explore Sigiriya.', 28000, 'cultural.jpg');