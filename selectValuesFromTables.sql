--Выборка товаров по куску названия
SELECT manufacturers.name as Название_производителя,items.name as Название_товара FROM items JOIN manufacturers
    ON manufacturers.id=items.manufacturer_id WHERE lower(items.name) LIKE 'serial%';

--Выборка по цене
SELECT manufacturers.name as Название_производителя, items.name as Название_товара, items.price FROM items JOIN manufacturers
    ON items.manufacturer_id = manufacturers.id WHERE price<=1000000 ORDER BY price;

--Выборка товаров по имени производителя
SELECT manufacturers.name as Название_производителя, items.name as Название_товара FROM items JOIN manufacturers
    ON items.manufacturer_id = manufacturers.id WHERE manufacturers.name='BMW';

--Выборка товаров по названию страны, которая их произвела
SELECT items.name as Название_товара, countries.name as Страна FROM items JOIN manufacturers
    ON items.manufacturer_id = manufacturers.id JOIN countries
        ON manufacturers.country_id = countries.id WHERE countries.name='Германия';

--Выборка товаров по году производства
SELECT name as Название_товара, extract(year from  made_at) as Год_производства FROM items
WHERE extract(year from  made_at)>=2020;