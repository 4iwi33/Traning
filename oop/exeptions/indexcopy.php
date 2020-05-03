<?php
namespace Home; // пространство имён 
// "namespace"  весегда должно находтся вверху самым первым
// Что такое пространства имен? В широком смысле - это один из способов инкапсуляции элементов.
//  Такое абстрактное понятие можно увидеть во многих местах. Например, в любой операционной 
//  системе директории служат для группировки связанных файлов и выступают в качестве пространс
//  тва имен для находящихся в них файлов. В качестве конкретного примера файл foo.txt может 
//  находиться сразу в обеих директориях: /home/greg и /home/other, но две копии foo.txt не 
//  могут существовать в одной директории. Кроме того, для доступа к foo.txt извне директории 
//  /home/greg, мы должны добавить имя директории перед именем файла используя разделитель, 
//  чтобы получить /home/greg/foo.txt. Этот же принцип распространяется и на пространства имен
//   в программировании.
class User
{
    public $name;
    public $password;
    public $email;
    public $city;

    function __construct($name, $password, $email, $city) //сдесь аргументы конструктора
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo()
    {
        $information = "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
        // возращаем наши значения
        return $information;
    }
}

$user1 = new User("Vadim ", "54321 ", "vadya@mail.com ", "Minsk ");
echo $user1->getInfo();
