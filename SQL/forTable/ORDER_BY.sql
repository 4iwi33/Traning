--Оператор "ORDER BY" сортировать по 
SELECT *
FROM test 
ORDER BY id --сортировать по id по возрастанию
LIMIT 2, 3; --'2'-пропустим две запси, '3'-выведем три последующие записи 
----------------------------------------------------------------------------
SELECT *
FROM test 
ORDER BY birth --сортировать по birth
LIMIT 2, 3; --'2'-пропустим две запси, '3'-выведем три последующие записи 
----------------------------------------------------------------------------
--Оператор "DSEC" сортирует по убыванию
SELECT *
FROM test 
ORDER BY id --сортировать по id
DESC        --сортируем по убыванию
LIMIT 2, 3; --'2'-пропустим две запси, '3'-выведем три последующие записи 