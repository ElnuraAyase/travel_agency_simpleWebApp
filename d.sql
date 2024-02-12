
DROP DATABASE IF EXISTS re_mirzayeva_55404_mid2_travel_agency;
DROP TABLE IF EXISTS clients;
DROP TABLE IF EXISTS trips;
DROP TABLE IF EXISTS bookings;


CREATE DATABASE IF NOT EXISTS re_mirzayeva_55404_mid2_travel_agency;
USE re_mirzayeva_55404_mid2_travel_agency;


CREATE TABLE clients (
  client_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);


INSERT INTO clients (name, email) VALUES
  ('Elnura Mirzayeva', 'elnura.mirzayeva@gmail.com'),
  ('John Doe', 'johndoe@example.com'),
  ('Jane Doe', 'janedoe@example.com'),
  ('Peter Jones', 'peterjones@example.com'),
  ('Sarah Smith', 'sarahsmith@example.com');

CREATE TABLE trips (
  trip_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  destination VARCHAR(255) NOT NULL,
  departure_date DATE NOT NULL,
  return_date DATE NOT NULL
);


INSERT INTO trips (name, destination, departure_date, return_date) VALUES
  ('Paris Adventure', 'Paris, France', '2024-05-01', '2024-05-08'),
  ('Romantic Italy', 'Rome, Italy', '2024-06-15', '2024-06-22'),
  ('Beach Getaway to Bali', 'Bali, Indonesia', '2024-07-10', '2024-07-17'),
  ('Explorer\'s Trek to Machu Picchu', 'Machu Picchu, Peru', '2024-08-05', '2024-08-12'),
  ('Safari Experience in Kenya', 'Maasai Mara National Reserve, Kenya', '2024-09-12', '2024-09-19');

-- Create table bookings
CREATE TABLE bookings (
  booking_id INT PRIMARY KEY AUTO_INCREMENT,
  client_id INT NOT NULL,
  trip_id INT NOT NULL,
  book_date DATE NOT NULL,
  FOREIGN KEY (client_id) REFERENCES clients(client_id),
  FOREIGN KEY (trip_id) REFERENCES trips(trip_id)
);

-- Insert initial data into bookings table
INSERT INTO bookings (client_id, trip_id, book_date) VALUES
  (1, 1, '2023-10-04'),
  (2, 2, '2023-10-08'),
  (3, 3, '2023-10-12'),
  (4, 4, '2023-10-16'),
  (5, 5, '2023-10-20');
