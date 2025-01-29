1. Проект створено на php(8.4.2 )+nginx+mysql+php-fpm8.4
2. Сервер: localhost
3. Перед початком роботи створіть DB із назвою "Todo_list" та таблицю Todo (id:int, name:varchar, pass:varchar, email:varchar, date:date, bio:text)  в ній
Створіть та надайте root права користувачу username: "morozua" password: "password".
Або замініть у файлі "configDB.php" строки:
$user = 'morozua';
$pass = 'password'; 
на $user = 'root';
   $pass = ''; 