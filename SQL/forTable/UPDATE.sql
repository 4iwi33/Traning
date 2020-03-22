-- Оператор "UPDATE" нужен для обновления данных
-- Оператор "WHERE" где изменить, в нашем случае в id
-- Оператор "SET" выбираем имя столба
UPDATE `test` 
SET `name` = 'Max' 
WHERE id = 5;

--поменяли name и email , тем столбцам у которых id больше 4
UPDATE test 
SET `name` = 'Bobik', `email` = 'ivan@mail.ru'
WHERE id > 4;