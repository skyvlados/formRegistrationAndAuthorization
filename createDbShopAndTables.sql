--создание базы данных
CREATE DATABASE shop;

--создание таблицы стран
CREATE TABLE countries(
    id SERIAL PRIMARY KEY,
    name VARCHAR(30) CONSTRAINT unique_name_country UNIQUE
);
--создание таблицы производителей
CREATE TABLE manufacturers(
    id SERIAL PRIMARY KEY,
    name VARCHAR(30) CONSTRAINT unique_name_manufacturer UNIQUE,
    country_id INTEGER,
    FOREIGN KEY (country_id) REFERENCES countries (id)
);
--создание таблицы товаров
CREATE TABLE items(
    id SERIAL PRIMARY KEY,
    name VARCHAR(30) CONSTRAINT unique_name_items UNIQUE,
    price FLOAT,
    manufacturer_id INTEGER,
    FOREIGN KEY (manufacturer_id) REFERENCES manufacturers(id),
    made_at DATE);

--добавление индекса в таблицу товаров по году производства
CREATE INDEX made_at_index ON items (made_at);