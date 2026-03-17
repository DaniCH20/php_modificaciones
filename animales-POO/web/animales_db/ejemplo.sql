USE zoo_db;

CREATE TABLE animales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    especie VARCHAR(100) NOT NULL
);

INSERT INTO animales (nombre, especie) VALUES 
('Leo', 'León'),
('Dumbo', 'Elefante'),
('Nemo', 'Pez Payaso'),
('Bugs', 'Conejo');