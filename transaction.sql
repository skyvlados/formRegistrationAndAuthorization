BEGIN ;
INSERT INTO items(name) VALUES ('Passat');
INSERT INTO items(manufacturer_id) VALUES (5);
-- INSERT INTO users(login,password) VALUES ('Vlad','pass');
-- INSERT INTO documents(user_id) SELECT id*2 from users where login='Vlad';
COMMIT;