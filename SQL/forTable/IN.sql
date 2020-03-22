--Оператор "IN"  в
SELECT *        --вывести всё
FROM test
WHERE id        --в столбце id
IN(4, 5, 2, 1)  --4,5,2,1 
ORDER BY id     --сортируем по id
DESC            --сортируем по убыванию
LIMIT 10;   