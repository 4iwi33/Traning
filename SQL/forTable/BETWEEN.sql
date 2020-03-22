--Оператор "BETWEEN" между или от/до не включительно
SELECT *        --вывести всё
FROM test
WHERE id 
BETWEEN 2 AND 6 --между 2 и 6 (то есть 3,4,5)
AND id <> 4     --и id не равное четырём
ORDER BY id     --сортируем по id
DESC            --сортируем по убыванию
LIMIT 10;       --лимитом до 10