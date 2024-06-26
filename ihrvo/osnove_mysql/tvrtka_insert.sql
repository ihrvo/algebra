INSERT INTO grad (ime, zip) VALUE ('Zagreb', '10000');
INSERT INTO grad (ime, zip) VALUE ('Split', '21000');
INSERT INTO grad (ime, zip) VALUE ('Pula', '52000');

INSERT INTO zaposlenici (ime, adresa, poslovnica_id, grad_id)
VALUE ('Ivo Ivić', 'Ulica grada Gospića 12', 3, 1);

WHERE id > 2
INSERT INTO poslovnice (ime, adresa, grad_id)
VALUE ('Trgovina Zagreb', 'Ulica grada Vukovara', 1, 1);

-- micanje stranog ključa ALTER TABLE poslovnice DROP FOREIGN KEY poslovnice_ibfk_1;

INSERT INTO poslovnice
  (ime, adresa, grad_id)
VALUES
  ('Trgovina Split', 'Ulica neka', 2), 
  ('Trgovina Pula', 'ulica druga', 3);