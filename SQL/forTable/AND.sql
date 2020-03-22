-- Оператор "AND" - и
--Поменяли столбец `bio` только в id 5
UPDATE test 
SET `bio` = 'New text'
WHERE name = 'Bobik' AND id = 5;