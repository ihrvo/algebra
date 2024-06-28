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
    ('Mara', 'Maric', 'Ulica neka 5', '0975474564', 'mara@maric.com', 1000.00),
    ('Mateja', 'Matejic', 'Ulica neka 6', '0975264234', 'mateja@matejic.com', 900.00),
    ('Petra', 'Petric', 'Ulica neka 7', '091455564', 'petra@petric.com', 1030.00),
    ('Kreso', 'Kresic', 'Ulica neka 8', '095645635', 'kreso@kresic.com', 1200.00),
    ('Jakov', 'Jakovic', 'Ulica neka 9', '0995435464', 'jakov@jakovic.com', 1500.00),
    ('Zoran', 'Zoric', 'Ulica neka 10', '098948864', 'zorana@zoric.com', 700.00),
    ('Ivan', 'Ivanic', 'Ulica neka 1', '098765433', 'ivan@ivic.com', 1000.00);

INSERT INTO department (department_name, leader) VALUES
    ('Sale', 4),
    ('Marketing', 4),
    ('Finance', 5),
    ('Warehouse', 8),
    ('IT', 9);

INSERT INTO employee_department (employee_id, department_id) VALUES
    (1, 1),
    (1, 2),
    (2, 1),
    (2, 1),
    (3, 1),
    (4, 1),
    (4, 2),
    (5, 3),
    (6, 3),
    (7, 3),
    (8, 4),
    (9, 5),
    (10, 5),
    (11, 5);



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

-- SQL primjeri

-- Zaposlenici po odjelima

SELECT CONCAT (e.employee_name, ' ', e.employee_surname) AS 'Djelatnik', d.department_name AS 'Naziv odjela'
FROM employee e
JOIN employee_department ed ON e.id = ed.employee_id
JOIN department d ON d.id = ed.department_id;

-- voditelji po odjelima

SELECT d.department_name AS 'Naziv odjela', CONCAT (e.employee_name, ' ', e.employee_surname) AS 'Voditelj'
FROM department d
JOIN employee e ON e.id = d.leader;

