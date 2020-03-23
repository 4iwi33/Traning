--Оператор "CREATE NINDEX" ндексы используются для быстрого извлечения данных из базы данных
--Создадим индекс для поля name
CREATE INDEX Nindex --создали идекс и назвали его "INDEX Nindex"
ON test (name);     --в таблице test в столбце name

--удалим индекс где установили его 
DROP INDEX Nindex --удалим индекс "Nindex"
ON test;          --в таблице test
  