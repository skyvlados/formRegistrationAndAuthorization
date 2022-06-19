--добавление стран в таблицу
INSERT INTO countries(name) VALUES ('Россия');
INSERT INTO countries(name) VALUES ('Украина');
INSERT INTO countries(name) VALUES ('США');
INSERT INTO countries(name) VALUES ('Германия');
--добавление производителей в таблицу
INSERT INTO manufacturers(name,country_id) VALUES ('LADA',1);
INSERT INTO manufacturers(name,country_id) VALUES ('ZAZ',2);
INSERT INTO manufacturers(name,country_id) VALUES ('TESLA',3);
INSERT INTO manufacturers(name,country_id) VALUES ('BMW',4);
--добавление товаров в таблицу
INSERT INTO items(name,price,manufacturer_id,made_at) VALUES ('Vesta',1000000,1,'2021-09-10');
INSERT INTO items(name,price,manufacturer_id,made_at) VALUES ('Chance',500000,2,'2008-01-01');
INSERT INTO items(name,price,manufacturer_id,made_at) VALUES ('Model X',7000000,3,'2020-08-02');
INSERT INTO items(name,price,manufacturer_id,made_at) VALUES ('Serial 5',5000000,4,'2022-09-11');
