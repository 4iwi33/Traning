--Оператор "INSERT" вставляет новые строки в существующую таблицу
INSERT INTO test 
    (name, bio, birth, email) 
--VALUES (значение)
VALUES('Alex', 'Programmer', '2050-04-04', 'test@mail.ru');
--Сдесь задали значение каждому столбцу

--добавим  не все данные
INSERT INTO test 
    (id, name, email) 
VALUES('3', 'Gosha', 'dodik@mail.ru');

--------------------------------------------------------------------------
--Пропишем этот код в самой БД
 --Оператор "CHANGE" меняет значение
ALTER TABLE test 
CHANGE birth birth DATE NOT NULL;
--После пропишем нижний код в таблице
--Добавили имя и дату 
INSERT INTO test 
    (name, birth) 
VALUES('Bobik', '2070-05-05');
---------------------------------------------------------------------------

--Добавление сразу нескольких столбцов с данными
INSERT INTO test
    (id, name, email, bio, birth)
VALUES
    ('5', 'Bob', 'dodya@mail.com', 'Codder', '2030-03-03'),
    ('6', 'John', 'dodya2@mail.com', 'Codder', '2030-03-03'),
    ('7', 'Mike', 'dodya3@mail.com', 'Codder', '2030-03-03');

--Добавление сразу нескольких столбцов с данными
INSERT INTO test
    (id, name, email, bio, birth)
VALUES
    ('1', 'Bob', 'dodya@mail.com', 'Codder', '2030-03-03'),
    ('2', 'John', 'dodya2@mail.com', 'Codder', '2030-03-03'),
    ('3', 'Mike', 'dodya3@mail.com', 'Codder', '2030-03-03'),
    ('4', 'John', 'dodya2@mail.com', 'Codder', '2030-03-03'),
    ('5', 'John', 'dodya2@mail.com', 'Codder', '2030-03-03'),
    ('6', 'John', 'dodya2@mail.com', 'Codder', '2030-03-03'),
    ('7', 'John', 'dodya2@mail.com', 'Codder', '2030-03-03'),
    ('8', 'John', 'dodya2@mail.com', 'Codder', '2030-03-03'),
    ('9', 'John', 'dodya2@mail.com', 'Codder', '2030-03-03');