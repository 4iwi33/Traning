
--Оператор SQL PRIMARY KEY (Первичный ключ) — это параметр, который
-- устанавливается для однозначной идентификации той или иной записи
-- в таблице. Значения SQL PRIMARY KEY должны быть всегда уникальны,
-- а так же не содержать значений NULL.
---------------------------------------------------------------------------
--создадим таблицу shop
CREATE TABLE shop(             --созд табл shop
id INT NOT NULL AUTO_INCREMENT,--столбец id автоинкремент
title VARCHAR(50),             --столбец title  
price INT,                     --столбец price 
PRIMARY KEY (id)               --(id) Первичный ключ 
);
---------------------------------------------------------------------------
--создадим таблицу orders
--"CURRENT_TIMESTAMP" Функция возвращает текущую дату и время.
--"FOREIGN KEY" - это ключ, используемый для связи двух таблиц.
CREATE TABLE orders(                        
id INT NOT NULL AUTO_INCREMENT,  
orderNumb INT,               
shopID INT,   
personID INT,
dateTime DATETIME DEFAULT CURRENT_TIMESTAMP,--дата/время,по умолчанию,возвращение текущей даты и время 
PRIMARY KEY (id),                           --(id) Первичный ключ    
FOREIGN KEY (shopID) REFERENCES shop(id),   --FOREIGN KEY (shopID) это сылка на shop(id)
FOREIGN KEY (personID) REFERENCES people(id)--FOREIGN KEY (personID)это сылка на people(id)
);
------------------------------------------------------------------------------
--создадим таблицу people
CREATE TABLE people(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    email VARCHAR(50),
    bio TEXT,
    birt DATE,
    PRIMARY KEY (id)
);
INSERT INTO people
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