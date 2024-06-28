-- Imamo tvrtku kojoj treba kreirati bazu podataka kako bi mogla voditi evidenciju o
-- zaposlenicima, njihovim pozicijama i plaćama. Tvrtka ima više odjela. Svaki zaposlenik
-- može raditi u više odjela, a ujedno može biti i voditelj odjela.

DROP DATABASE IF EXISTS company;

CREATE DATABASE IF NOT EXISTS company DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE company;

CREATE TABLE IF NOT EXISTS employee (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    employee_name VARCHAR(45) NOT NULL,
    employee_surname VARCHAR(45) NOT NULL,
    employee_address VARCHAR(45) NOT NULL,
    phone VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    salary DECIMAL(10,2) NOT NULL
);

CREATE TABLE IF NOT EXISTS department (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    department_name VARCHAR(45) NOT NULL,
    leader INT UNSIGNED NOT NULL,
    FOREIGN KEY (leader) REFERENCES employee(id)
);

CREATE TABLE IF NOT EXISTS employee_department (
    employee_id INT UNSIGNED NOT NULL,
    department_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (employee_id) REFERENCES employee(id),
    FOREIGN KEY (department_id) REFERENCES department(id)
);
-- Popunite bazu s nekoliko podataka u svakoj tablici.
INSERT INTO employee (employee_name, employee_surname, employee_address, phone, email, salary) VALUES
    ('Ivo', 'Ivic', 'Ulica neka 1', '091234564', 'ivo@ivic.com', 850.00),
    ('Pero', 'Peric', 'Ulica neka 2', '091545455', 'pero@peric.com', 950.00),
    ('Mato', 'Matic', 'Ulica neka 3', '0982634564', 'mato@matic.com', 1050.00),
    ('Stipo', 'Stipic', 'Ulica neka 4', '091866464', 'stipo@stipic.com', 1550.00),
    ('Mara', 'Maric', 'Ulica neka 5', '0975474564', 'mara@maric.com', 1000.00);

INSERT INTO department (department_name, leader) VALUES
    ('Sale', 4),
    ('Marketing', 4),
    ('Finance', 5),
    ('IT', 3);

-- Dohvatite sve zaposlenike i njihove plaće.

SELECT CONCAT (employee_name, ' ', employee_surname) AS 'Ime i prezime', salary AS 'Placa'
FROM employee;

-- Dohvatite sve voditelje odjela i izračunajte prosjek njihovih plaća

SELECT ROUND(SUM(e.salary) / COUNT(e.id),2) AS 'Prosjecna placa voditelja'
FROM employee e
JOIN department d ON d.leader = e.id;

-- Kreirajte proceduru koja će računati prosjek plaća svih zaposlenika.

DELIMITER $$

CREATE PROCEDURE IF NOT EXISTS izracunaj_prosjecnu_placu() 
BEGIN

SELECT ROUND(SUM(salary)/COUNT(id), 2) AS 'Prosjecna placa'
FROM employee;

END $$
DELIMITER ;