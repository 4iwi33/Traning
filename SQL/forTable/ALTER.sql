--Оператор "ALTER TABLE" используется для добавления,удаления или изменения столбцов
-- в существующей таблице.
--Оператор "ADD" добавить 
--"pass" название столбца который создаём   
ALTER TABLE test
ADD pass VARCHAR(32);

 --УДАЛЕНЕ

 --Оператор "DROP COLUMN" удаление столбца и указываем какой 
ALTER TABLE test
DROP COLUMN pass;
 
 --Оператор "CHANGE" меняет значение
ALTER TABLE test 
CHANGE birth birth DATE NOT NULL;