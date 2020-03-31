-- Оператор "SELECT" выбрать 
-- Оператор "SELECT *" выбрать всё 

--Выведем в нашей базе таблицу lol
SELECT * 
FROM lol;

--Выведем только name и bio 
SELECT name, bio
FROM test ;

-----------------------------------------
SELECT id, name --выведем id и name 
FROM test       --в таблице test    
WHERE  id > 2   --где id больше двух 
AND id <4;      --и id меньше четырёх    
-----------------------------------------
SELECT id, name --выведем id и name 
FROM test       --в таблице test    
WHERE  id >= 2   --где id больше двух включительно
AND id <4;      --и id меньше четырёх    
----------------------------------------
--Оператор "OR" или
SELECT *                       --выведем всё
FROM test                      --в таблице test  
WHERE name = 'Bobik' OR id = 4;--где name равно 'Bobik' или id равно четырём

